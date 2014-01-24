<?php
session_start();
function GetConnection() {
        global $sql_password;
        $conn = new mysqli('localhost', 'n02207313', $sql_password, 'n02207313_db');
        return $conn;

}
?>