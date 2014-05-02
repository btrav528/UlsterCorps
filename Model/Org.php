<?php
class Org {

	static public function Blank() {
		return array('display_name' => null, 'Id' => null, 'Address' => null, 'PrimaryPhone' => null, 'UserName' => null, 'Password' => null, 'ZIP' => null, 'Email' => null);
	}

	public static function LogIn($userName, $password) {

		$wp_hasher = new PasswordHash(8, TRUE);

		$sql = "SELECT * FROM test.Orgs WHERE UserName='$userName'";
		$user = Fetch_One($sql);
		$id = $user['Id'];
		$password = $wp_hasher -> HashPassword($password);
		echo $password;
		if ($user == null) {
			//User name is not found in database
			$_SESSION['loginUserError'] = "That user doesn't exist";
			unset($_SESSION['loginPasswordError']);
			header("Location: ?action=loginorg");
		} else if ($wp_hasher -> HashPassword($password, $user['user_pass'])) {
			//username exists and password matches
			//$sql = "SELECT Users.Level, wp_users.display_name
			//FROM Users
			//INNER JOIN wp_users
			//ON Users.wp_users_id=wp_users.ID
			//WHERE wp_users.ID=$id";
			//CHANGE THIS!
			$_SESSION['User'] = Fetch_One($sql);
			$_SESSION['User'] = $user;

			unset($_SESSION['loginPasswordError']);
			unset($_SESSION['loginUserError']);
			header("Location: ../welcome.php");
		} else {
			//password is incorrect
			unset($_SESSION['loginUserError']);
			$_SESSION['loginPasswordError'] = "Password is incorrect";
			header("Location: ?action=loginorg");
		}

	}
static public function Validate($row){
	$errors=array();
	if (!$row['PrimaryPhone'])
			$errors['PrimaryPhone'] = 'A phone number is required.';
	if (!$row['display_name'])
			$errors['display_name'] = 'A name is required.';
	if (!$row['Email'])
			$errors['Email'] = 'An email address is required.';
	if (!$row['UserName'])
			$errors['UserName'] = 'A username is required.';
	if (!$row['ZIP'])
			$errors['ZIP'] = 'A zip code is required.';
	if (!$row['Password'])
			$errors['Password'] = 'A password is required.';
	if (!$row['Address'])
			$errors['Address'] = 'An address is required.';
	return count($errors) ? $errors : null;
}

	static public function Save($row) {
		$conn = GetConnection();
		$row2 = User::Encode($row, $conn);

		if ($row['Id'] != null) {

			$sql = "UPDATE Orgs SET display_name='" . $row2['display_name'] . "', Address='" . $row2['Address'] . "', PrimaryPhone='" . $row2['PrimaryPhone'] . "', Email='" . $row2['Email'] . "', ZIP='" . $row2['ZIP'] . "', UserName='" . $row2['UserName'] . "', Password='" . $row2['Password'] . "';";

			$conn -> query($sql);
			$error = $conn -> error;
		} else {
			$sql = "INSERT INTO Orgs(display_name, Address, PrimaryPhone, Email, ZIP, UserName, Password)VALUES('" . $row2["display_name"] . "', '" . $row2["Address"] . "', '" . $row2["PrimaryPhone"] . "', '" . $row2["Email"] . "', '" . $row2["ZIP"] . "', '" . $row2["UserName"] . "', '" . $row2["Password"] . "') ";
			$conn -> query($sql);
			$error = $conn -> error;

			$error = $conn -> error;

		}

		$conn -> close();

		if ($error) {
			return array('db_error' => $error);
		} else {
			return $temp;
		}

	}

}
