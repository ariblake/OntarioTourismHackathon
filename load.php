<?php 
define('ABSPATH', __DIR__);
define('ADMIN_PATH', ABSPATH.'/admin');
define('ADMIN_SCRIPT_PATH', ADMIN_PATH. '/script');
ini_set('display_errors',1);
require_once ABSPATH.'/config/database.php';
require_once ADMIN_SCRIPT_PATH.'/script/connect.php';
require_once ADMIN_SCRIPT_PATH.'/script/functions.php';
require_once ADMIN_SCRIPT_PATH.'/script/subscriber.php';

