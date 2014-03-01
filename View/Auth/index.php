<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
$errors = null;

switch ($action) {
	case 'login' :
		$model = array('UserName' => null, 'Password' => null);
		$view = 'login.php';
		$title = "Login";
		break;

	case 'submitLogin' :
		Auth::LogIn($_REQUEST['UserName'], $_REQUEST['Password']);

		header("Location: ../User/");

		break;
}
?>