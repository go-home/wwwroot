<?php
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('BUILD_DIR_SECURE', false);
define('APP_DEBUG',True);
//define('BUILD_LITE_FILE',False);
define('APP_PATH','./GoHome/');
define ('RUNTIME_PATH', './Runtime/' );
require './Bootstrap/Bootstrap.php';
//require './Runtime/lite.php';