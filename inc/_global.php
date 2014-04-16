<?php
session_start();
include_once __DIR__ . '../../Model/User.php';
include_once __DIR__ . '../../Model/Auth.php';
include_once __DIR__ . '../../Model/Hours.php';
include_once ('_password.php');
include_once( 'class-phpass.php');
include_once('pluggable.php');;
function GetConnection() {
	global $sql_password;
	$conn = new mysqli('localhost', 'root', $sql_password, 'test');
	return $conn;

}

function FetchAll($sql) {
	//echo $sql;
	global $rs;

	global $Id;

	$ret = array();
	$conn = GetConnection();
	$result = $conn -> query($sql);
	echo $conn -> error;

	while ($rs = $result -> fetch_assoc()) {
		$ret[] = $rs;

	}

	$conn -> close();
	return $ret;
}

function Fetch_One($sql) {
	$arr = FetchAll($sql);
	if (!$arr) {
		return null;
	} else {

		return $arr[0];
	}
}
?>