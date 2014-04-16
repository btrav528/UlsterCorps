<?php
include_once '../../inc/_global.php';
Auth::secure();
$user = $_SESSION['User'];

@$action = $_REQUEST['action'];
$errors = null;
switch($action) {
	case 'save' :
		$errors = Hours::Validate($_REQUEST);
		if (!$errors) {
			$errors = Hours::Save($_REQUEST);
			var_dump($errors);
		}
		if (!$errors) {
			header("Location: ?status=Saved&Id=" . $_REQUEST['Id']);
			die();
		}
		$model = $_REQUEST;
		$view = 'new.php';

		break;
	case 'new' :
		$model = array('Id' => null, 'HoursRequested' => null, 'TimeIn' => null, 'TimeOut' => null, 'Date' => null, 'Event_Id' => null, 'Users_Id' => $user['Id']);
		$view = 'new.php';
		break;
	default :
		if ($user["Level"] == 0) {
			$model = Hours::Get();
			$model['error'] = null;

		} else {

			$model = Hours::Get($user['Id']);
			if (!$model) {
				$model['error'] = "You do not have any hour requests pending";
			} else {
				$model['User'] = Hours::GetUser($model['users_id']);
				$model['Event'] = Hours::GetEvent($model['Event_Id']);

			}
		}
		$view = 'List.php';
		break;
}
include $view;
?>