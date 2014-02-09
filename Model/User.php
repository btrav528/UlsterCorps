<?php
class User{
static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM Users WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM Users');
		}
	}
static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From Users WHERE Id=$id ";

		$conn -> query($sql);
		//echo $sql;
		$error = $conn -> error;
		$conn -> close();
		//$error = "dd";
		if ($error) {
			return array('db_error' => $error);
		} else {
			return false;
		}
	}
}
?>