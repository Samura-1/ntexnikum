<?php 
session_start();
require '../database/connection.php';
$user = $_POST;
if (isset($user['login-go'])) {
	$errro = array();
	$check_user = $connection->prepare("SELECT * FROM `user` WHERE login = :login");
	$check_user ->bindParam(':login',$user['login']);
	$check_user ->execute();
	$count = $check_user ->rowCount();
	$check_user = $check_user ->FETCHALL(PDO::FETCH_ASSOC);
	if ($count > 0) {
		if ($user['pass'] == password_verify($user['pass'],$check_user[0]['pass'])) {
			$_SESSION['login_user'] = $check_user;
			header('Location: '.$_SERVER['HTTP_REFERER']);
		}else{
		header('Location: '.$_SERVER['HTTP_REFERER']);
		}		
	}else{
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}
}else{
	header('Location: '.$_SERVER['HTTP_REFERER']);
}
