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
static public function Validate($row) {
		$errors = array();
		if (!$row['FirstName'])
			$errors['FirstName'] = 'First name is required.';
		if (!$row['LastName'])
			$errors['LastName'] = 'Last name required.';
		if (!$row['Email'])
			$errors['Email'] = 'An email address is required.';
		if (!$row['PrimaryPhone'])
			$errors['PrimaryPhone'] = 'A Phone number is required.';
		if (!$row['ZIP'])
			$errors['ZIP'] = 'A zip code is required.';
		if (!$row['UserName'])
			$errors['UserName'] = 'A user name is requiredfor login purposes.';
		if (!$row['Password'])
			$errors['Password'] = 'A password is required.';
		

		return count($errors) ? $errors : null;
	}

}

?>