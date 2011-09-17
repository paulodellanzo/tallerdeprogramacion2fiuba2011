<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This page handles editing and creation of quiz overrides
 *
 * @package    mod
 * @subpackage quiz
 * @copyright  2010 Matt Petro
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->dirroot.'/mod/quiz/lib.php');
require_once($CFG->dirroot.'/mod/quiz/locallib.php');
require_once($CFG->dirroot.'/mod/quiz/override_form.php');


$cmid = optional_param('cmid', 0, PARAM_INT);
$overrideid = optional_param('id', 0, PARAM_INT);
$action = optional_param('action', null, PARAM_ALPHA);
$reset = optional_param('reset', false, PARAM_BOOL);

$override = null;
if ($overrideid) {

    if (! $override = $DB->get_record('quiz_overrides', array('id' => $overrideid))) {
        print_error('invalidoverrideid', 'quiz');
    }
    if (! $quiz = $DB->get_record('quiz', array('id' => $override->quiz))) {
        print_error('invalidcoursemodule');
    }
    if (! $cm = get_coursemodule_from_instance("quiz", $quiz->id, $quiz->course)) {
        print_error('invalidcoursemodule');
    }
} else if ($cmid) {

    if (! $cm = get_coursemodule_from_id('quiz', $cmid)) {
        print_error('invalidcoursemodule');
    }
    if (! $quiz = $DB->get_record('quiz', array('id' => $cm->instance))) {
        print_error('invalidcoursemodule');
    }
} else {
    print_error('invalidcoursemodule');
}
$course = $DB->get_record('course', array('id'=>$cm->course), '*', MUST_EXIST);

$url = new moodle_url('/mod/quiz/overrideedit.php');
if ($action) {
    $url->param('action', $action);
}
if ($overrideid) {
    $url->param('id', $overrideid);
} else {
    $url->param('cmid', $cmid);
}

$PAGE->set_url($url);

require_login($course, false, $cm);

$context = get_context_instance(CONTEXT_MODULE, $cm->id);

// Add or edit an override

require_capability('mod/quiz:manageoverrides', $context);

if ($overrideid) {
    // editing override
    $data = clone $override;
} else {
    // new override
    $data = new stdClass();
}

// merge quiz defaults with data
$keys = array('timeopen', 'timeclose', 'timelimit', 'attempts', 'password');
foreach ($keys as $key) {
    if (!isset($data->{$key}) || $reset) {
        $data->{$key} = $quiz->{$key};
    }
}

// If we are duplicating an override, then clear the user/group and override id
// since they will change.
if ($action === 'duplicate') {
    $override->id = null;
    $override->userid = null;
    $override->groupid = null;
}

// true if group-based override
$groupmode = !empty($data->groupid) || ($action === 'addgroup' && empty($overrideid));

$overridelisturl = new moodle_url('/mod/quiz/overrides.php', array('cmid'=>$cm->id));
if (!$groupmode) {
    $overridelisturl->param('mode', 'user');
}

// Setup the form.
$mform = new quiz_override_form($url, $cm, $quiz, $context, $groupmode, $override);
$mform->set_data($data);

if ($mform->is_cancelled()) {
    // redirect back to override list
    redirect($overridelisturl);
} else if (optional_param('resetbutton', 0, PARAM_ALPHA)) {
    // redirect back to current page and reset the form.
    $url->param('reset', true);
    redirect($url);
} else if ($fromform = $mform->get_data()) {
    // Process the data
    $fromform->quiz = $quiz->id;

    // Replace unchanged values with null
    foreach ($keys as $key) {
        if ($fromform->{$key} == $quiz->{$key}) {
            $fromform->{$key} = null;
        }
    }

    // See if we are replacing an existing override
    $userorgroupchanged = false;
    if (empty($override->id)) {
        $userorgroupchanged = true;
    } else if (!empty($fromform->userid)) {
        $userorgroupchanged = $fromform->userid !== $override->userid;
    } else {
        $userorgroupchanged = $fromform->groupid !== $override->groupid;
    }
    if ($userorgroupchanged) {
        $conditions = array(
                'quiz' => $quiz->id,
                'userid' => empty($fromform->userid)? null : $fromform->userid,
                'groupid' => empty($fromform->groupid)? null : $fromform->groupid);
        if ($oldoverride = $DB->get_record('quiz_overrides', $conditions)) {
            // There is an old override, so we merge any new settings on top of
            // the older override
            foreach ($keys as $key) {
                if (is_null($fromform->{$key})) {
                    $fromform->{$key} = $oldoverride->{$key};
                }
            }
            // Delete the old override
            $DB->delete_records('quiz_overrides', array('id' => $oldoverride->id));
        }
    }

    if (!empty($override->id)) {
        $fromform->id = $override->id;
        $DB->update_record('quiz_overrides', $fromform);
    } else {
        unset($fromform->id);
        $fromform->id = $DB->insert_record('quiz_overrides', $fromform);
    }

    quiz_update_events($quiz, $fromform);

    add_to_log($cm->course, 'quiz', 'edit override',
            "overrideedit.php?id=$fromform->id", $quiz->id, $cm->id);

    if (!empty($fromform->submitbutton)) {
        // redirect back to override list
        redirect($overridelisturl);
    }

    // 'again' button pressed, so redirect back to this page
    $url->remove_params('cmid');
    $url->param('action', 'duplicate');
    $url->param('id', $fromform->id);
    redirect($url);

}

// Print the form

$pagetitle = get_string('editoverride', 'quiz');
$PAGE->navbar->add($pagetitle);
$PAGE->set_title($pagetitle);
$PAGE->set_heading($course->fullname);
echo $OUTPUT->header();
echo $OUTPUT->heading($pagetitle);

$mform->display();

echo $OUTPUT->footer();
