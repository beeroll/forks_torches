<?php
header('Content-Type: text/html; charset=utf-8');

@include_once('app_config.php');

// change the following path if necessary
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

if(isset($yiiFrameworkPath)) {
    require_once($yiiFrameworkPath);
}
else {
    require_once('yii.php');
}
Yii::createWebApplication($config)->run();
