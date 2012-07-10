<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-09 15:06:41 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'breadcrumb' at 'MODPATH/breadcrumb' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-09 15:06:41 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'breadcrumb' at 'MODPATH/breadcrumb' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /Volumes/Files/Sites/servicenow/application/bootstrap.php(149): Kohana_Core::modules(Array)
#1 /Volumes/Files/Sites/servicenow/index.php(102): require('/Volumes/Files/...')
#2 {main}
2012-07-09 15:06:56 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:06:56 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('site', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('site')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(57): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Site->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:08:20 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:08:20 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('site', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('site')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(57): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Site->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:08:22 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:08:22 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('site', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('site')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(57): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Site->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:08:23 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:08:23 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('site', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('site')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(57): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Site->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:11:09 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:11:09 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('site', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('site')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(57): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Site->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:12:44 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:12:44 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('site', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('site')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(57): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Site->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:17:44 --- ERROR: ErrorException [ 8 ]: Undefined index: chat_url ~ MODPATH/boldchat/classes/boldchat/core.php [ 23 ]
2012-07-09 15:17:44 --- STRACE: ErrorException [ 8 ]: Undefined index: chat_url ~ MODPATH/boldchat/classes/boldchat/core.php [ 23 ]
--
#0 /Volumes/Files/Sites/servicenow/modules/boldchat/classes/boldchat/core.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 23, Array)
#1 /Volumes/Files/Sites/servicenow/modules/boldchat/classes/boldchat/core.php(16): Boldchat_Core->__construct(Array)
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(216): Boldchat_Core::factory(Array)
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(63): Controller_Site->_set_chat()
#4 [internal function]: Controller_Site->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:18:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Assets::factory() ~ APPPATH/classes/request.php [ 103 ]
2012-07-09 15:18:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Assets::factory() ~ APPPATH/classes/request.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:19:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Assets::factory() ~ APPPATH/classes/request.php [ 103 ]
2012-07-09 15:19:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Assets::factory() ~ APPPATH/classes/request.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 15:24:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 15:24:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(150): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:29:42 --- ERROR: View_Exception [ 0 ]: The requested view titlebar could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:29:42 --- STRACE: View_Exception [ 0 ]: The requested view titlebar could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('titlebar')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('titlebar', NULL)
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(156): View::factory('titlebar')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 15:31:00 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for /Volumes/Files/Sites/servicenow/assets/less/vars.less ~ MODPATH/assets/classes/assets/core.php [ 166 ]
2012-07-09 15:31:00 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for /Volumes/Files/Sites/servicenow/assets/less/vars.less ~ MODPATH/assets/classes/assets/core.php [ 166 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/Volumes/Files/...', 166, Array)
#1 /Volumes/Files/Sites/servicenow/modules/assets/classes/assets/core.php(166): filemtime('/Volumes/Files/...')
#2 /Volumes/Files/Sites/servicenow/application/classes/request.php(89): Assets_Core->styles()
#3 /Volumes/Files/Sites/servicenow/modules/site/views/public.php(29): Request->styles()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#7 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(170): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Site->after()
#9 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#10 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-09 15:32:02 --- ERROR: ErrorException [ 2 ]: file_put_contents(/Volumes/Files/Sites/servicenow/assets/css/public_54df9d8cf3eefb9ab7d3c280d943743e6f91f07e.css): failed to open stream: Permission denied ~ MODPATH/assets/classes/assets/core.php [ 226 ]
2012-07-09 15:32:02 --- STRACE: ErrorException [ 2 ]: file_put_contents(/Volumes/Files/Sites/servicenow/assets/css/public_54df9d8cf3eefb9ab7d3c280d943743e6f91f07e.css): failed to open stream: Permission denied ~ MODPATH/assets/classes/assets/core.php [ 226 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/Volumes/Files/...', 226, Array)
#1 /Volumes/Files/Sites/servicenow/modules/assets/classes/assets/core.php(226): file_put_contents('/Volumes/Files/...', '.ui-helper-hidd...')
#2 /Volumes/Files/Sites/servicenow/application/classes/request.php(89): Assets_Core->styles()
#3 /Volumes/Files/Sites/servicenow/modules/site/views/public.php(29): Request->styles()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#7 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(170): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Site->after()
#9 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#10 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-09 15:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 15:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 15:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 15:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 15:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 15:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 15:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 15:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 15:42:02 --- ERROR: View_Exception [ 0 ]: The requested view lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:42:02 --- STRACE: View_Exception [ 0 ]: The requested view lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('lead_form')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('lead_form', Array)
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(36): View::factory('lead_form', Array)
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Public->lead_form(true)
#4 [internal function]: Controller_Public->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:42:25 --- ERROR: View_Exception [ 0 ]: The requested view lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:42:25 --- STRACE: View_Exception [ 0 ]: The requested view lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('lead_form')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('lead_form', Array)
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(36): View::factory('lead_form', Array)
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Public->lead_form(true)
#4 [internal function]: Controller_Public->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:42:29 --- ERROR: View_Exception [ 0 ]: The requested view lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:42:29 --- STRACE: View_Exception [ 0 ]: The requested view lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('lead_form')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('lead_form', Array)
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(36): View::factory('lead_form', Array)
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Public->lead_form(true)
#4 [internal function]: Controller_Public->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 15:42:30 --- ERROR: View_Exception [ 0 ]: The requested view lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 15:42:30 --- STRACE: View_Exception [ 0 ]: The requested view lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('lead_form')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('lead_form', Array)
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(36): View::factory('lead_form', Array)
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Public->lead_form(true)
#4 [internal function]: Controller_Public->before()
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 16:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 16:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 16:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 16:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 16:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 16:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 16:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 16:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 16:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 16:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 16:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 16:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 16:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 16:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 16:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-09 16:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 16:36:10 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
2012-07-09 16:36:10 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 812, Array)
#1 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(198): Kohana_Request->__construct('', NULL)
#2 /Volumes/Files/Sites/servicenow/index.php(108): Kohana_Request::factory()
#3 {main}
2012-07-09 16:42:15 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
2012-07-09 16:42:15 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 812, Array)
#1 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(198): Kohana_Request->__construct('', NULL)
#2 /Volumes/Files/Sites/servicenow/index.php(108): Kohana_Request::factory()
#3 {main}
2012-07-09 16:42:51 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
2012-07-09 16:42:51 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 812, Array)
#1 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(198): Kohana_Request->__construct('', NULL)
#2 /Volumes/Files/Sites/servicenow/index.php(108): Kohana_Request::factory()
#3 {main}
2012-07-09 16:45:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:45:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(148): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:47:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:47:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:47:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:47:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:02 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:02 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:04 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:04 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:05 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:05 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:05 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:05 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:05 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:05 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:05 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:05 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:32 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:32 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:34 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:34 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:48:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:48:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:49:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
2012-07-09 16:49:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ APPPATH/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#2 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#5 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 16:50:36 --- ERROR: View_Exception [ 0 ]: The requested view menu/public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 16:50:36 --- STRACE: View_Exception [ 0 ]: The requested view menu/public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('menu/public')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('menu/public', NULL)
#2 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(21): View::factory('menu/public')
#3 /Volumes/Files/Sites/servicenow/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/site')
#4 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(154): Kohana_Menu::factory('site')
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-09 17:00:09 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 17:00:09 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('public')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(55): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-09 17:00:48 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 17:00:48 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('public')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(55): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-09 17:00:57 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 17:00:57 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('public')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(55): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-09 17:00:58 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 17:00:58 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('public')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(55): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-09 17:00:58 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 17:00:58 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('public')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(55): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-09 17:00:58 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 17:00:58 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('public')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(55): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-09 17:00:58 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 17:00:58 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('public')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(55): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-09 17:00:59 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-09 17:00:59 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/servicenow/application/classes/view.php(12): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/servicenow/system/classes/kohana/controller/template.php(33): View::factory('public')
#3 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/site.php(55): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/servicenow/modules/site/classes/controller/public.php(17): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-09 17:08:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH/config/routes.php [ 21 ]
2012-07-09 17:08:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH/config/routes.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-09 17:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/matrix.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 17:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/matrix.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 17:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/matrix.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 17:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/matrix.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 17:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/icons/icon_set.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-09 17:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/icons/icon_set.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-09 17:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL workplace_virtualization was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-09 17:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL workplace_virtualization was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/servicenow/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/servicenow/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/servicenow/index.php(109): Kohana_Request->execute()
#3 {main}