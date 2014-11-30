<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-23 09:07:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$site_config' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in file:line
2014-08-23 09:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 17:02:41 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Welcome.php:12
2014-08-23 17:02:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Welcome.php(12): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Welcome.php:12
2014-08-23 17:11:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\main.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\main.php:6
2014-08-23 17:11:21 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\main.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\main.php:6
2014-08-23 17:14:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Welcome.php [ 22 ] in file:line
2014-08-23 17:14:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line