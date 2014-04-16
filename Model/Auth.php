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
		$wp_hasher = new PasswordHash(8, TRUE);

		$sql = "SELECT wp_users.user_login, wp_users.user_pass, wp_users.ID, wp_users.display_name, wp_users.user_email, Users.Id, Users.Level
		FROM wp_users 
		INNER JOIN Users
		ON Users.wp_users_id=wp_users.ID
		WHERE user_login='$userName'";
		$user = Fetch_One($sql);
		$id=$user['ID'];
		$password = $wp_hasher -> HashPassword($password);
		echo $password;
		if ($user == null) {
			echo "user null";
			$_SESSION['loginUserError'] = "That user doesn't exist";
			unset($_SESSION['loginPasswordError']);
			header("Location: ?action=login");
		} else if ($wp_hasher -> HashPassword($password, $user['user_pass'])) {

			$sql = "SELECT Users.Level, wp_users.display_name
			FROM Users
			INNER JOIN wp_users
			ON Users.wp_users_id=wp_users.ID
			WHERE wp_users.ID=$id";
			$_SESSION['User']=Fetch_One($sql);
			$_SESSION['User'] = $user;
			unset($_SESSION['loginPasswordError']);
			header("Location: ../welcome.php");
		} else {
			echo "password wrong";
			unset($_SESSION['loginUserError']);
			$_SESSION['loginPasswordError'] = "Password is incorrect";
			header("Location: ?action=login");
		}

	}

	public static function LogInOrg($userName, $password) {

		$sql = "        SELECT * FROM Orgs 
                                                     WHERE UserName='$userName'
                                        ";

		$user = Fetch_One($sql);
		if ($user == null) {
			echo "user null";
			$_SESSION['loginUserError'] = "That User Doesn't Exist";
			unset($_SESSION['loginPasswordError']);
			header("Location: ?action=loginorg");
		} else if ($user['Password'] == $password) {
			echo "password";
			$_SESSION['User'] = $user;
			unset($_SESSION['loginPasswordError']);
			header("Location: ../welcome.php");
		} else {
			unset($_SESSION['loginUserError']);
			$_SESSION['loginPasswordError'] = "Password is incorrect";
			header("Location: ?action=loginorg");
		}

	}

	static public function Secure() {
		if (!self::IsLoggedIn()) {
			header('Location: ' . "../../View/Auth/index.php?action=login");
			die();
		}
	}

}
