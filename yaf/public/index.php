<?php

define("APPLICATION_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");
$application->bootstrap()->run();
?>
