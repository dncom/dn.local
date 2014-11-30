<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-09 00:43:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Registration.php [ 70 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php:70
2014-11-09 00:43:19 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Registration->action_step6()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php:70
2014-11-09 00:43:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Registration.php [ 70 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php:70
2014-11-09 00:43:42 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Registration->action_step6()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php:70
2014-11-09 00:47:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Registration.php [ 70 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php:70
2014-11-09 00:47:14 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Registration->action_step6()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php:70
2014-11-09 02:12:34 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 02:12:34 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(16): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(15): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 02:14:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 02:14:55 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(16): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(15): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 02:14:56 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 02:14:56 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(16): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(15): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 02:15:08 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 02:15:08 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(16): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(15): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 02:15:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 02:15:12 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(16): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(15): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 08:19:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Registration.php [ 70 ] in C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php:70
2014-11-09 08:19:08 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 70, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_Registration->action_step6()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\dn.local\application\classes\Controller\Registration.php:70
2014-11-09 11:38:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\user.php [ 32 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:38:58 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\user.php [ 32 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:26 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\user.php [ 32 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:29 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\user.php [ 32 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:31 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\user.php [ 32 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:33 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\user.php [ 32 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:39:34 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 11:40:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 11:40:24 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 11:41:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 15 ] in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 11:41:47 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 11:42:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 16 ] in C:\xampp\htdocs\dn.local\application\views\user.php:16
2014-11-09 11:42:05 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:16
2014-11-09 11:44:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_info() on a non-object ~ APPPATH\classes\Controller\User.php [ 35 ] in file:line
2014-11-09 11:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 11:45:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\user.php [ 15 ] in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 11:45:25 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 11:47:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: unique_ ~ APPPATH\views\user.php [ 15 ] in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 11:47:05 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 11:47:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: unique_ ~ APPPATH\views\user.php [ 15 ] in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 11:47:07 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 11:52:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\user.php [ 73 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:73
2014-11-09 11:52:00 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(73): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 73, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:73
2014-11-09 12:01:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_User::$_unique ~ APPPATH\classes\Model\user.php [ 21 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:21
2014-11-09 12:01:26 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 21, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_all()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:21
2014-11-09 12:01:50 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:01:50 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(24): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:01:56 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:01:56 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(24): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:01:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:01:58 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(24): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:02:48 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:02:48 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(24): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:02:49 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:02:49 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(24): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:02:50 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:02:50 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(24): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:03:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_User::$unique_ ~ APPPATH\classes\Model\user.php [ 21 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:21
2014-11-09 12:03:05 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 21, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_all()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:21
2014-11-09 12:08:01 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMunique_' at line 1 [ SELECT * FROMunique_ ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:08:01 --- DEBUG: #0 C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROMun...', false, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(24): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_all()
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\dn.local\modules\database\classes\Kohana\Database\Query.php:251
2014-11-09 12:08:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 15 ] in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 12:08:28 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 12:09:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 15 ] in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 12:09:10 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 12:09:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 15 ] in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 12:09:13 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:15
2014-11-09 12:11:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_User::get_info(), called in C:\xampp\htdocs\dn.local\application\classes\Controller\User.php on line 35 and defined ~ APPPATH\classes\Model\user.php [ 27 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:11:54 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(27): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:12:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\user.php [ 32 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 12:12:05 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 12:12:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\user.php [ 32 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 12:12:07 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 32, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:32
2014-11-09 12:18:14 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_User::get_info(), called in C:\xampp\htdocs\dn.local\application\classes\Controller\User.php on line 35 and defined ~ APPPATH\classes\Model\user.php [ 27 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:18:14 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(27): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:20:11 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_User::get_info(), called in C:\xampp\htdocs\dn.local\application\classes\Controller\User.php on line 35 and defined ~ APPPATH\classes\Model\user.php [ 27 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:20:11 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(27): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:20:12 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_User::get_info(), called in C:\xampp\htdocs\dn.local\application\classes\Controller\User.php on line 35 and defined ~ APPPATH\classes\Model\user.php [ 27 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:20:12 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(27): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:20:17 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_User::get_info(), called in C:\xampp\htdocs\dn.local\application\classes\Controller\User.php on line 35 and defined ~ APPPATH\classes\Model\user.php [ 27 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:20:17 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(27): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:20:20 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_User::get_info(), called in C:\xampp\htdocs\dn.local\application\classes\Controller\User.php on line 35 and defined ~ APPPATH\classes\Model\user.php [ 27 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:20:20 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(27): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(35): Model_User->get_info()
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:27
2014-11-09 12:28:32 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-11-09 12:28:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:28:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-11-09 12:28:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:28:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-11-09 12:28:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:28:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-11-09 12:28:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:30:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-11-09 12:30:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:30:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-11-09 12:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:31:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-11-09 12:31:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:31:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-11-09 12:31:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:31:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comment' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-11-09 12:31:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:32:51 --- CRITICAL: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\Model\user.php [ 21 ] in file:line
2014-11-09 12:32:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 12:34:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:34:51 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:34:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:34:53 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:34:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:34:56 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:34:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:34:59 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:02 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:07 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:19 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:21 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:23 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:24 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:26 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:30 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:34 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:35:38 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:01 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:04 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:05 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:07 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:36:07 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:37:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:37:58 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:20 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:22 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:28 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:54 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:38:56 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:40:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:40:12 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(14): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:40:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:40:12 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:41:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:41:15 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:41:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\user.php [ 11 ] in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:41:16 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:11
2014-11-09 12:50:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unique ~ APPPATH\classes\Model\user.php [ 36 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:36
2014-11-09 12:50:37 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 36, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(13): Model_User->get_info('1')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:36
2014-11-09 13:09:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _unique_ ~ APPPATH\classes\Model\user.php [ 65 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:65
2014-11-09 13:09:10 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 65, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(13): Model_User->get_info('1')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:65
2014-11-09 13:09:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _unique_ ~ APPPATH\classes\Model\user.php [ 65 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:65
2014-11-09 13:09:26 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 65, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(13): Model_User->get_info('1')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:65
2014-11-09 13:09:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _unique_ ~ APPPATH\classes\Model\user.php [ 65 ] in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:65
2014-11-09 13:09:29 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\classes\Model\user.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 65, Array)
#1 C:\xampp\htdocs\dn.local\application\classes\Controller\User.php(13): Model_User->get_info('1')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(84): Controller_User->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\dn.local\application\classes\Model\user.php:65
2014-11-09 13:17:07 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant unique_ - assumed 'unique_' ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:17:07 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:17:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: User ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:17:50 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:18:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:18:10 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:19:27 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:19:27 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:19:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:19:44 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:20:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:20:33 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:21:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'name' (T_STRING), expecting ']' ~ APPPATH\views\user.php [ 14 ] in file:line
2014-11-09 13:21:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 13:22:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:22:51 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:24:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:24:23 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:25:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uniqe ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:25:51 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:25:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uniqe ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:25:53 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:25:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uniqe ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:25:54 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:26:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unique ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:26:20 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:26:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: unique ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:26:22 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:27:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:27:24 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:28:11 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:28:11 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:30:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:30:03 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:30:16 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:30:16 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:30:39 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:30:39 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:32:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:32:26 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 13:32:41 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\xampp\htdocs\dn.local\system\classes\Kohana\HTML.php:71
2014-11-09 13:32:41 --- DEBUG: #0 C:\xampp\htdocs\dn.local\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 71, Array)
#1 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_HTML::chars(Array)
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\dn.local\system\classes\Kohana\HTML.php:71
2014-11-09 21:42:26 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:44:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Unique' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:44:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:46:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Unique' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:46:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:46:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Unique' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:51:21 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:51:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:53:59 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:53:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:57:22 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:57:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:57:24 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:57:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:57:53 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:38 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:40 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:41 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:42 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:42 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:42 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:42 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:43 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:43 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:43 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 21:59:44 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 21:59:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:01:31 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:01:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:01:32 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:01:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:01:33 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:01:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:01:33 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:01:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:01:33 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:01:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:01:34 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:01:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:01:34 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:01:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:02:14 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:02:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:06:24 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:06:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:07:28 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:07:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:07:29 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:07:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:07:29 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:07:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:07:30 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:07:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:07:30 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:07:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:07:30 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:07:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:07:59 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\User.php [ 14 ] in file:line
2014-11-09 22:07:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-09 22:17:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: adress ~ APPPATH\views\user.php [ 14 ] in C:\xampp\htdocs\dn.local\application\views\user.php:14
2014-11-09 22:17:50 --- DEBUG: #0 C:\xampp\htdocs\dn.local\application\views\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\dn.local\application\views\common.php(59): Kohana_View->__toString()
#5 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\dn.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\dn.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\dn.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\dn.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\dn.local\application\views\user.php:14