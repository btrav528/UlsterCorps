<?php
include_once __DIR__ . '../../Model/User.php';
function GetConnection() {
	global $sql_password;
	$conn = new mysqli('localhost', 'n02207313', $sql_password, 'test');
	return $conn;

}

function FetchAll($sql) {
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
	return $arr[0];
}
?>