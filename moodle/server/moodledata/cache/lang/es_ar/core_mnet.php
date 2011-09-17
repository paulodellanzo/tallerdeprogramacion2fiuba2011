<?php $this->cache['es_ar']['core_mnet'] = array (
  'aboutyourhost' => 'Acerca de su servidor',
  'accesslevel' => 'Nivel de acceso',
  'addhost' => 'Agregar servidor',
  'addnewhost' => 'Agregar un nuevo servidor',
  'addtoacl' => 'Agregar a Control de Acceso',
  'allhosts_no_options' => 'No hay opciones disponibles cuando se ven múltiples hosts.',
  'allow' => 'Permitir',
  'applicationtype' => 'Tipo de aplicación',
  'authfail_nosessionexists' => 'Autorización fallida: la sesión mnet no existe.',
  'authfail_sessiontimedout' => 'Autorización fallida: la sesión mnet ha sobrepasado el límite de tiempo.',
  'authfail_usermismatch' => 'Autorización fallida: el usuario no concuerda.',
  'authmnetdisabled' => 'El conector (\'plugin\') de identificación está <strong>deshabilitado</strong>.',
  'badcert' => 'Este no es un certificado válido.',
  'certdetails' => 'Detalles del certificado',
  'configmnet' => 'La red Moodle permite la comunicación de este servidor con otros servidores o servicios.',
  'couldnotgetcert' => 'Ningún certificado fue encontrado en <br />{$a}. <br />El host puede estar caído o incorrectamente configurado.',
  'couldnotmatchcert' => 'Esto no concuerda con el certificado actualmente publicado por el servidor web.',
  'courses' => 'cursos',
  'courseson' => 'cursos activados',
  'currentkey' => 'Clave pública actual',
  'current_transport' => 'Transporte actual',
  'databaseerror' => 'No se pudieron escribir detalles en la base de datos.',
  'deleteaserver' => 'Eliminando un servidor',
  'deletehost' => 'Eliminar host',
  'deletekeycheck' => '¿Está totalmente seguro que quiere eliminar esta clave?',
  'deleteoutoftime' => 'Su ventana de 60 segundos para eliminar esta clave ha expirado.Por favor comience de nuevo.',
  'deleteuserrecord' => 'SSO ACL: eliminar registro para el usuario \'{$a->user}\' de {$a->host}.',
  'deletewrongkeyvalue' => 'Un error ha ocurrido. Si usted no estaba intentando eliminar su clave SSL, entonces es posible que usted haya sido sujeto de un ataque malicioso. Ninguna acción ha sido tomada.',
  'deny' => 'Denegar',
  'description' => 'Descripción',
  'duplicate_usernames' => 'Hemos fallado en crear un índice en las columnas "mnethostid" y "username" en su tabla de usuarios.<br />Esto puede ocurrir cuando tiene <a href="{$a}" target="_blank">nombres de usuarios duplicados en su tabla de usuarios</a>.<br />Su actualización aún debería completarse exitosamente. Haga clic en el vínculo de arriba, y luego en instrucciones de arreglo este problema aparecerá en una nueva ventana. Usted puede atenderlo al final de la actualización.<br />',
  'enabled_for_all' => '(Este servicio ha sido habilitado para todos los hosts).',
  'enterausername' => 'Por favor entre un nombre de usuario, ó una lista de usuarios separados por comas.',
  'error7020' => 'Este error ocurre por lo general si el sitio remoto ha creado un registro con el wwwroot equivocado, por ejemplo http://yoursite.com en lugar de http://www.yoursite.com. Debería contactar con el administrador del sitio remoto con su wwwroot (tal como se especifica en config.php) pidiéndole que actualice el registro de su servidor.',
  'error7022' => 'El mensaje que ha enviado al sitio remoto ha sido adecuadamente encriptado, pero no firmado. Que ocurra esto es muy extraño, y usted probablemente debería informar sobre el error (proporcionando toda la información posible sobre la versión de de la aplicación, etc.)',
  'error7023' => 'El sitio remoto ha intentado desencriptar su mensaje con todas las claves que tiene registradas para su sitio, pero han fallado. Debería poder solucionar este problema introduciendo a mano las claves del sitio remoto. Es poco probable que esto ocurra a menos que no haya mantenido contacto con el sitio remoto durante varios meses.',
  'error7024' => 'Usted envía un mensaje no encriptado al sitio remoto, pero éste no acepta comunicación sin encriptar desde su sitio. Que ocurra esto es muy extraño, y usted probablemente debería informar sobre el error (proporcionando toda la información posible sobre la versión de la aplicación, etc.)',
  'error7026' => 'La clave con la que su mensaje ha sido firmado es distinta de la consta en el servidor remoto. Es más, el servidor ha intentado comprobar la clave y no lo ha conseguido. Intente introducir manualmente la clave y pruebe de nuevo.',
  'error709' => 'El sitio remoto no ha podido obtener una clave SSL para usted.',
  'expired' => 'Esta clave expiró el',
  'expires' => 'Válida hasta',
  'expireyourkey' => 'Eliminar esta clave',
  'expireyourkeyexplain' => 'Moodle automáticamente rota sus claves cada 28 días (por defecto) pero usted tiene la opción de <em>manualmente</em> hacer expirar esta clave en cualquier momento. Lo anterior sería útil únicamente si usted cree que esta clave ha sido comprometida (siendo utilizada por quien no debería). Un reemplazo será automáticamente generado.<br />Eliminando esta clave le hará imposible a otros Moodles comunicarse con usted, hasta que manualmente contacte cada administrador y les de la nueva clave.',
  'exportfields' => 'Campos a exportar',
  'failedaclwrite' => 'Se produjo un error al escribir a la lista de control de acceso MNET para el usuario \'{$a}\'.',
  'findlogin' => 'Encontrar acceso',
  'forbidden-function' => 'Esa función no ha sido abilitada para RPC.',
  'forbidden-transport' => 'El método de transporte que está intentando utilizar no es permitido.',
  'forcesavechanges' => 'Forzar guardar los cambios',
  'helpnetworksettings' => 'Configurar comunicación MNet',
  'hidelocal' => 'Ocultar usuarios locales',
  'hideremote' => 'Ocultar usuarios remotos',
  'host' => 'host',
  'hostcoursenotfound' => 'Host o curso no encontrado',
  'hostdeleted' => 'Ok - host eliminado',
  'hostexists' => 'Ya existe un registro para un host con ese nombre (puede ser eliminado). <a href="{$a}">Haga clic aquí</a>para editar ese registro.',
  'hostlist' => 'Lista de hosts en red',
  'hostname' => 'Nombre del host',
  'hostnamehelp' => 'El nombre completo del dominio del host remoto, por ejemplo www.ejemplo.com',
  'hostnotconfiguredforsso' => 'Este servidor no está configurado para acceso remoto.',
  'hostsettings' => 'Ajustes del host',
  'http_self_signed_help' => 'Permitir conexiones usando un certificado firmado DIY SSL en el host remoto.',
  'https_self_signed_help' => 'Permitir conexiones usando un DIY SSL firmado en PHP en el host remoto sobre http.',
  'https_verified_help' => 'Permitir conexiones usando un certificado verificado SSL en el host remoto.',
  'http_verified_help' => 'Permitir conexiones usando un certificado verificado SSL en PHP en el host remoto, excepto sobre http (no https).',
  'id' => 'ID',
  'idhelp' => 'Este valor es automáticamente asignado y no puede cambiarse',
  'importfields' => 'Campos a importar',
  'inspect' => 'Inspeccionar',
  'installnosuchfunction' => '¡Error de codificación! Alguien está intentando instalar una función mnet xmlrpc ({$a->method}) desde un archivo ({$a->file}) y no se puede encontrar!',
  'installnosuchmethod' => '¡Error de codificación! Alguien está intentando instalar un método mnet xmlrpc ({$a->method}) en una clase ({$a->file}) y no se puede encontrar!',
  'installreflectionclasserror' => '¡Error de codificación! La introspección MNet ha fallado para el método \'{$a->method}\' en la clase \'{$a->class}\'.  El mensaje original de error, por si sirviera de ayuda, es: \'{$a->error}\'',
  'installreflectionfunctionerror' => '¡Error de codificación! La introspección MNet ha fallado para la función \'{$a->method}\' en el archivo \'{$a->file}\'. El mensaje original de error, por si sirviera de ayuda, es: \'{$a->error}\'',
  'invalidaccessparam' => 'Parámetro de acceso no válido.',
  'invalidactionparam' => 'Parámetro de acción no válido.',
  'invalidhost' => 'Debe dar un identificador de host válido',
  'invalidpubkey' => 'La clave no es una clave SSL válida. ({$a})',
  'invalidurl' => 'Parámetro URL no válido.',
  'ipaddress' => 'Dirección IP',
  'is_in_range' => 'La dirección IP <code>{$a}</code>  representa un host de confianza válido.',
  'ispublished' => '{$a} ha habilitado este servicio para usted.',
  'issubscribed' => '{$a} se está suscribiendo a este servicio en su host.',
  'keydeleted' => 'Su clave ha sido exitosamente eliminada y reemplazada.',
  'keymismatch' => 'La clave pública que usted tiene para este host es diferente a la clave pública que está actualmente publicando. La clave publicada actualmente es:',
  'last_connect_time' => 'Última conexión',
  'last_connect_time_help' => 'La última vez que usted se conectó con este host.',
  'last_transport_help' => 'El transporte que ha usado para la última conexión con este host.',
  'leavedefault' => 'Usar en su lugar los ajustes por defecto',
  'listservices' => 'Listar servicios',
  'loginlinkmnetuser' => '<br/>Si usted es un usuario remoto de MNet y puede <a href="{$a}">confirmar su dirección de correo aquí</a>, puede ser redirigido a su página de entrada.<br />',
  'logs' => 'Registros',
  'managemnetpeers' => 'Gestionar pares',
  'method' => 'Método',
  'methodhelp' => 'Ayuda de método para {$a}',
  'methodsavailableonhost' => 'Métodos disponibles en {$a}
',
  'methodsavailableonhostinservice' => 'Métodos disponibles para {$a->service} en {$a->host}',
  'methodsignature' => 'Firma de método para {$a}',
  'mnet' => 'MNet',
  'mnet_concatenate_strings' => 'Concatenar (hasta) 3 cadenas de texto y retornar el resultado',
  'mnetdisabled' => 'MNet está <strong>deshabilitado</strong>.',
  'mnetidprovider' => 'Provisor de ID MNET',
  'mnetidproviderdesc' => 'Puede usar esta opción para recuperar un enlace en el que identificarse, en el caso de que proporcione la dirección email correcta que corresponda al nombre de usuario con el que trató de entrar.',
  'mnetidprovidermsg' => 'Usted debería poder identificarse a su proveedor {$a}.',
  'mnetidprovidernotfound' => 'Lo sentimos, no se ha podido encontrar más información.',
  'mnetlog' => 'Registros',
  'mnetpeers' => 'Iguales',
  'mnetservices' => 'Servicios',
  'mnet_session_prohibited' => 'Usuarios de su servidor inicial no tienen actualmente permitido divagar por {$a}.',
  'mnetsettings' => 'Ajustes de MNet',
  'moodle_home_help' => 'La ruta a la página de inicio de MNet en el host remoto, por ejemplo: /moodle/.',
  'name' => 'Nombre',
  'net' => 'Red',
  'networksettings' => 'Ajustes de red',
  'never' => 'Nunca',
  'noaclentries' => 'No hay entradas en la lista de control de acceso SSO',
  'noaddressforhost' => 'Lo sentimos, pero el nombre del host ({$a}) no se ha podido resolver.',
  'nocurl' => 'La librería Curl de PHP no está instalada',
  'nolocaluser' => 'Ningún registro local existe para el usuario remoto, y no puede crearse, puesto que este host no crea usuarios automáticamente. Por favor, contacte con su administrador.',
  'nomodifyacl' => 'Usted no tiene permitido modificar la lista de control de acceso MNET.',
  'nonmatchingcert' => 'El asunto del certificado: <br /><em>{$a->subject}</em><br />no concuerda con el host de donde provino:<br /><em>{$a->host}</em>.
',
  'nopubkey' => 'Hubo un problema obteniendo la clave pública.<br />Quizás el host no admite MNet o la clave no es válida.',
  'nosite' => 'No se pudo encontrar curso al nivel del sitio',
  'nosuchfile' => 'El archivo/función {$a} no existe.',
  'nosuchfunction' => 'No se pudo localizar la función, o función prohibida por RPC.',
  'nosuchmodule' => 'La ruta de la función fue dada incorrectamente y no pudo ser localizada. Por favor use el formato: mod/Nombre_Modulo/lib/Nombre_Funcion .',
  'nosuchpublickey' => 'Incapaz de obtener la clave pública para verificación de firma.',
  'nosuchservice' => 'El servicio RPC no está corriendo en este host.',
  'nosuchtransport' => 'No existe transporte con esa identificación.',
  'notBASE64' => 'Esta cadena de texto no está codificada en formato Base64. No puede ser una clave válida.',
  'notenoughidpinfo' => 'Su proveedor de identidad no nos está dando suficiente información para crear o actualizar localmente su cuenta. ¡Lo sentimos!',
  'not_in_range' => 'La dirección IP  <code>{$a}</code>  no representa un host de confianza válido.',
  'notinxmlrpcserver' => 'Intento de acceder al cliento remoto MNet, no ducante la ejecución del servidor XMLRPC',
  'notmoodleapplication' => 'ATENCIÓN: Esta no es una aplicación Moodle, por lo que algunos de los métodos de inspección pueden no funcionar adecuadamente.',
  'notPEM' => 'Esta clave no está en formato PEM. No funcionará.',
  'notpermittedtojump' => 'Usted no tiene permiso para iniciar una sesión remota desde este servidor Moodle.',
  'notpermittedtoland' => 'Usted no tiene permiso para iniciar una sesión remota.',
  'off' => 'apagado',
  'on' => 'encendido',
  'options' => 'Opciones',
  'peerprofilefielddesc' => 'Aquí se puede reemplazar la configuración global de los campos del perfil a enviar e importar cuando se crean usuarios nuevos',
  'permittedtransports' => 'Transportes permitidos',
  'phperror' => 'Un error interno de PHP previno que su operación hubiese sido llevada a cabo.',
  'position' => 'Posición',
  'postrequired' => 'La función de elminación requiere una operación POST.',
  'profileexportfields' => 'Campos a enviar',
  'profilefielddesc' => 'Aquí puede configurar la lista de campos del perfil que se envían y reciben de MNet cuando las cuentas de usuario se crean o se actualizan. También puede cambiarlo para cada elemento MNet individual. Tenga en cuenta que los siguientes campos se envían siempre y no son opcionales: {$a}',
  'profilefields' => 'Campos de perfil',
  'profileimportfields' => 'Campos a importar',
  'promiscuous' => 'Promiscuo',
  'publickey' => 'Clave pública',
  'publickey_help' => 'La clave pública es automáticamente obtenida desde el servidor remoto.',
  'publish' => 'Publicar',
  'reallydeleteserver' => '¿Está seguro que desea eliminar el servidor?',
  'receivedwarnings' => 'Se recibieron las siguientes advertencias',
  'recordnoexists' => 'El registro no existe.',
  'reenableserver' => 'No - seleccione esta opción para rehabilitar el servidor.',
  'registerallhosts' => 'Registrar todos los hosts (modo promiscuo)',
  'registerallhostsexplain' => 'Puede registrar todos los hosts que se intenten conectar con su sitio Moodle automáticamente. Esto implica que un registro aparecerá en su lista de host por cada sitio Moodle que se conecte con el suyo y pida su clave pública.<br />Tiene la opción de configurar el acceso para \'Todos los Hosts\' y posteriormente habilitar determinados servicios de acceso, también es posible proveer servicios a cualquier servidor Moodle indiscriminadamente.',
  'registerhostsoff' => 'El registro de todos los hosts está actualmente <b>desactivado</b>',
  'registerhostson' => 'El registro de todos los hosts está actualmente <b>activado</b>',
  'remotecourses' => 'Cursos remotos',
  'remotehost' => 'Host remoto',
  'remotehosts' => 'Hosts remotos',
  'remoteuserinfo' => 'Remote {$a->remotetype} user - profile fetched from <a href="{$a->remoteurl}">{$a->remotename}</a>',
  'requiresopenssl' => 'El trabajo de red requiere la extensión OpenSSL',
  'restore' => 'Restaurar',
  'returnvalue' => 'Retornar valor',
  'reviewhostdetails' => 'Revisar detalles del host',
  'reviewhostservices' => 'Revisar servicios del host',
  'RPC_HTTP_PLAINTEXT' => 'HTTP no encriptado',
  'RPC_HTTP_SELF_SIGNED' => 'HTTP (auto-firmado)',
  'RPC_HTTPS_SELF_SIGNED' => 'HTTPS (auto-firmado)',
  'RPC_HTTPS_VERIFIED' => 'HTTPS (firmado)',
  'RPC_HTTP_VERIFIED' => 'HTTP (firmado)',
  'selectaccesslevel' => 'Por favor seleccione un nivel de acceso de la lista.',
  'selectahost' => 'Por favor seleccione un host Moodle remoto.',
  'service' => 'Nombre del servicio',
  'serviceid' => 'ID del servicio',
  'servicesavailableonhost' => 'Servicios disponibles en {$a}',
  'serviceswepublish' => 'Servicios que publicamos a {$a}.',
  'serviceswesubscribeto' => 'Servicios en {$a} a los que nos suscribimos.',
  'settings' => 'Ajustes',
  'showlocal' => 'Mostrar usuarios locales',
  'showremote' => 'Mostrar usuarios remotos',
  'ssl_acl_allow' => 'SSO ACL: Permitir al usuario {$a->user} de {$a->host}',
  'ssl_acl_deny' => 'SSO ACL: Denegar al usuario {$a->user} de {$a->host}',
  'ssoaccesscontrol' => 'Control de acceso SSO',
  'ssoacldescr' => 'Utilice esta página para conceder/denegar acceso a determinadaos usuarios de hosts MNet remotos. Funciona cuando ofrezca servicios SSO a usuarios remotos. Para controlar los permisos <em>locales</em> de sus usuarios paranavegar por otros hosts MNet, utilice el sistema de roles para concederles el permiso <em>mnetlogintoremote</em>.',
  'ssoaclneeds' => 'Para que esta funcionalidad trabaje adecuadamente, debe de tener la opción \'Networking\') activada, además de el conector (\'plugin\') de identificación MNet.',
  'strict' => 'Estricto',
  'subscribe' => 'Suscribir',
  'system' => 'Sistema',
  'testclient' => 'Cliente de prueba MNet',
  'testtrustedhosts' => 'Probar una dirección',
  'testtrustedhostsexplain' => 'Ingrese una dirección IP para ver si es un host de confianza.',
  'theypublish' => 'Ellos publican',
  'theysubscribe' => 'Ellos suscriben',
  'transport_help' => 'Estas opciones son recíprocas, de modo que usted solamente puede forzar a un servidor remoto a usar un certificado SSL firmado si su servidor tiene también un certificado SSL firmado.',
  'trustedhosts' => 'Hosts XML-RPC',
  'trustedhostsexplain' => '<p>El mecanismo de hosts de confianza permite que máquinas específicas ejecuten llamadas a través de XML-RPC a cualquier parte del API de Moodle. Esto está disponible para scripts para controlar el comportamiento de Moodle y puede ser una opción muy peligrosa para activar. Si se tienen dudas, mantenerlo desactivado.</p> <p>Esto <strong>no</strong> es necesario para la Red de Trabajo Moodle(\'Moodle Networking\').</p> <p>Para activarlo, ingrese una lista de direcciones IP o redes, una en cada línea. Algunos ejemplos:</p>Su host local:<br />127.0.0.1<br />Su host local (con un bloqueo de red):<br />127.0.0.1/32<br />Únicamente el host con dirección IP 192.168.0.7:<br />192.168.0.7/32<br />Cualquier host con una dirección IP entre 192.168.0.1 y 192.168.0.255:<br />192.168.0.0/24<br />Un host cualquiera:<br />192.168.0.0/0<br />Obviamente el último ejemplo <strong>no</strong> es una configuración recomendada.',
  'turnitoff' => 'Desconectarlo',
  'turniton' => 'Conectarlo',
  'type' => 'Tipo',
  'unknown' => 'Desconocido',
  'unknownerror' => 'Un error desconocido ocurrió durante la negociación.',
  'usercannotchangepassword' => 'No puede cambiar su contraseña aquí puesto que eres un usuario remoto.',
  'userchangepasswordlink' => '<br /> Puede cambiar su contraseña en su  proveedor <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a>.',
  'usernotfullysetup' => 'Your user account is incomplete.  You need to go <a href="{$a}">back to your provider</a> and ensure your profile is completed there.  You may need to log out and in again for this to take effect.',
  'usersareonline' => 'Advertencia: {$a} usuarios de ese servidor están actualmente en su sitio.',
  'validated_by' => 'Es validado por la red:  <code>{$a}</code>',
  'verifysignature-error' => 'La verificación de firma falló. Un error ha ocurrido.',
  'verifysignature-invalid' => 'La verifivación de firma falló. Parece que esta carga no fue firmada por usted.',
  'version' => 'Versión',
  'warning' => 'Advertencia',
  'wrong-ip' => 'Su dirección IP no concuerda con la que tenemos registrada.',
  'xmlrpc-missing' => 'Debe tener XML-RPC instalado en su construcción PHP para poder usar esta característica.',
  'yourhost' => 'Su Host',
  'yourpeers' => 'Sus iguales',
);