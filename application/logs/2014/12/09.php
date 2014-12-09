<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-09 04:27:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH/classes/Controller/Wall.php [ 25 ] in /Applications/XAMPP/xamppfiles/htdocs/dn.local/application/classes/Controller/Wall.php:25
2014-12-09 04:27:50 --- DEBUG: #0 /Applications/XAMPP/xamppfiles/htdocs/dn.local/application/classes/Controller/Wall.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/X...', 25, Array)
#1 /Applications/XAMPP/xamppfiles/htdocs/dn.local/system/classes/Kohana/Controller.php(84): Controller_Wall->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/XAMPP/xamppfiles/htdocs/dn.local/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wall))
#4 /Applications/XAMPP/xamppfiles/htdocs/dn.local/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/XAMPP/xamppfiles/htdocs/dn.local/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/XAMPP/xamppfiles/htdocs/dn.local/application/classes/Controller/User.php(25): Kohana_Request->execute()
#7 /Applications/XAMPP/xamppfiles/htdocs/dn.local/system/classes/Kohana/Controller.php(84): Controller_User->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Applications/XAMPP/xamppfiles/htdocs/dn.local/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#10 /Applications/XAMPP/xamppfiles/htdocs/dn.local/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Applications/XAMPP/xamppfiles/htdocs/dn.local/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/XAMPP/xamppfiles/htdocs/dn.local/index.php(118): Kohana_Request->execute()
#13 {main} in /Applications/XAMPP/xamppfiles/htdocs/dn.local/application/classes/Controller/Wall.php:25