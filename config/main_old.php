<?php
/* Константа ROOT_DIR на директорию ВСЕГО проекта. 
$_SERVER - супер глобальный массив
$_SERVER['DOCUMENT_ROOT'] -  ссылается на директорию public */
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'] . "/../");

define('TEMPLATES_DIR', ROOT_DIR . 'templates/');

define('CONTROLLERS_NAMESPACE', '\app\controllers\\');