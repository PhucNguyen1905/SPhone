<?php
require_once "mvc/core/config.php";
function fixSqlInject($sql) {
	$sql = str_replace('\\', '\\\\', $sql);
	$sql = str_replace('\'', '\\\'', $sql);
	return $sql;
}

function getGet($key) {
	$value = '';
	if(isset($_GET[$key])) {
		$value = $_GET[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getPost($key) {
	$value = '';
	if(isset($_POST[$key])) {
		$value = $_POST[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getRequest($key) {
	$value = '';
	if(isset($_REQUEST[$key])) {
		$value = $_REQUEST[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getCookie($key) {
	$value = '';
	if(isset($_COOKIE[$key])) {
		$value = $_COOKIE[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getSecurityMD5($pwd) {
	return md5(md5($pwd).PRIVATE_KEY);
}

function executeResultU($sql) {
	$data = null;

	//open connection
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//query
	$resultset = mysqli_query($conn, $sql);
	if($resultset){
		$data = mysqli_fetch_array($resultset, 1);
		//close connection
		mysqli_close($conn);
	}
	return $data;
}

function getUserToken($noSession=0) {
	if(isset($_SESSION['user']) && $noSession==0) {
		return $_SESSION['user'];
	}
	$token = getCookie('token');
	$sql = "select * from tokens where token = '$token'";
	$item = executeResultU($sql);
	if($item != null) {
		$userId = $item['user_id'];
		$sql = "select * from user where id = '$userId' and deleted = 0";
		$item = executeResultU($sql);
		if($item != null) {
			$_SESSION['user'] = $item;
			return $item;
		}
	}

	return null;
}



function fixUrl($thumbnail, $rootPath = "http://localhost/SPhone/public/images/") {
	if(stripos($thumbnail, 'http://') !== false || stripos($thumbnail, 'https://') !== false) {
	} else {
		$thumbnail = $rootPath.$thumbnail;
	}

	return $thumbnail;
}
