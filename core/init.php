<?php
ob_start();
session_start();

$GLOBALS['config']=array(
	'mysql'=>array(
		'host'=>'localhost:3306',
		'username'=>'testUser',
		'password'=>'P@ssw0rd',
		'db'=>'dodoka_db',
		'charset'=>array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'")
	),
	'remember'=>array(
		'cookie_name'=>'hash',
		'cookie_expiry'=>60*60*24*7
	),
	'session'=>array(
		'session_name'=>'user',
		'token_name'=>'token'
	)
);

spl_autoload_register(function($class){
	require_once 'classes/'.$class.'.php';
});

require_once 'functions/sanitize.php';
?>