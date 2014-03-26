<?php
const ADMIN = 0;
const USER = 1;
class Auth {
	public static function logout() {
		session_destroy();
	}

	public static function IsLoggedIn() {
		return self::GetUser() != null;
	}

	public static function GetUser() {
		return $_SESSION['User'];
	}

	public static function HasPermission() {
		$user = self::GetUser();
		return $user['UserType'] == ADMIN;
	}

	public static function LogIn($userName, $password) {

		$sql = "        SELECT * FROM Users 
                                                     WHERE UserName='$userName'
                                        ";

		$user = Fetch_One($sql);
		if ($user == null) {
			echo "user null";
			$_SESSION['loginUserError'] = "That User Doesn't Exist";
			unset($_SESSION['loginPasswordError']);
			header("Location: ?action=login");
		} else if ($user['Password'] == $password) {
			echo "password";
			$_SESSION['User'] = $user;
			unset($_SESSION['loginPasswordError']);
		} else {
			unset($_SESSION['loginUserError']);
			$_SESSION['loginPasswordError'] = "Password is incorrect";
			header("Location: ?action=login");
		}

	}

	static public function Secure() {
		if (!self::IsLoggedIn()) {
			header('Location: ' . "../../View/Auth/index.php?action=login");
			die();
		}
	}

}
