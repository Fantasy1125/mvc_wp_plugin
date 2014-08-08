<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(dirname('setup.php')));
	
	require_once(ROOT . DS . 'core' . '\bootstrap.php');
	require_once(ROOT . DS . 'config' . '\security.php');
	
	/*
		Main plugin
	*/
	
	$baseController = new BaseController();
	$baseController->test();