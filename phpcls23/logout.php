<?php
if (basename(__DIR__) != 'phpcls23'){
	$baseURL = '../';
	$isInternal = true;
}else{
	$baseURL = '';
	$isInternal = false;
}

session_start();
session_destroy();

header('Location:login.php');