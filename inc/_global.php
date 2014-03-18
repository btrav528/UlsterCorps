<?php
session_start();
include_once __DIR__ . '../../Model/User.php';
include_once __DIR__ . '../../Model/Auth.php';
include_once ('_password.php');
function GetConnection() {
	global $sql_password;
	$conn = new mysqli('localhost', 'root', $sql_password, 'test');
	return $conn;

}

function FetchAll($sql)
{
	global $rs;
	
	global $Id;

        $ret = array();
        $conn = GetConnection();
        $result = $conn->query($sql);
        echo $conn->error;
        
        while ($rs = $result->fetch_assoc()) {
                $ret[] = $rs;
			
        }
        
        $conn->close();

        return $ret;
	}
function Fetch_One($sql)
{		
        $arr = FetchAll($sql);
        return $arr[0];
		
}

?>