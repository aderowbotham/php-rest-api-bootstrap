<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['pre_system'][] = array(
  'class' => '',
  'function' => 'load_app_controllers',
  'filename' => 'App_controllers.php',
  'filepath' => 'hooks'
);


$hook['post_controller'][] = array(
  'class' => '',
  'function' => 'close_ci_sessions',
  'filename' => 'Session_hook.php',
  'filepath' => 'hooks'
);



/* End of file hooks.php */
/* Location: ./system/application/config/hooks.php */
