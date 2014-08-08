<?php
/** Autoload any classes that are required **/
function __autoload($class_name="BaseController") {
	include ROOT . DS . 'core/Controllers/'. $class_name. '.php';
}