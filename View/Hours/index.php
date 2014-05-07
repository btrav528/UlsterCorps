<?php
include_once '../../inc/_global.php';
Auth::secure();
$user = $_SESSION['User'];

@$action = $_REQUEST['action'];
$errors = null;
switch($action) {
	//case 'approve':
	//	$hours=
	//$errors=Hours::Aprove($_REQUEST['id']);
	//if(!$errors){
	//	header("Location: ?");
	//	die();
	//}
	//break;
	case 'delete' :
		if (isset($_POST['id'])) {
			$errors = Hours::Delete($_REQUEST['id']);
			if (!$errors) {
				header("Location:  ?");
				die();
			}
		}
		$model = Hours::GetRequest($_REQUEST['id']);
		$view = 'delete.php';
		break;
	case 'save' :
		if ($_REQUEST['event_id'] == 0 && !array_key_exists("OtherOrg", $_REQUEST)) {
			$_REQUEST['OtherOrg'] = null;
			$_REQUEST['OtherLoc'] = null;
			$_REQUEST['OtherName'] = null;
			$model = $_REQUEST;
			$view = 'other.php';
		} else {
			$errors = Hours::Validate($_REQUEST);
			if (!$errors) {
				$errors = Hours::Save($_REQUEST);

			}
			if (!$errors) {
				header("Location: ?status=Saved&Id=" . $_REQUEST['Id']);
				die();
			}
			$model = $_REQUEST;
			$view = 'new.php';
		}
		break;

	case 'new' :
		$model = array('Id' => null, 'HoursRequested' => null, 'TimeIn' => null, 'TimeOut' => null, 'Date' => null, 'event_id' => null, 'Users_Id' => $user['Id']);
		$view = 'new.php';
		break;
	case 'edit' :
		break;
	default :
		if ($user["Level"] == 0) {
			$model = Hours::Get();
			if (!$model) {
				$model['error'] = "You do not have any hour requests pending";
			}

		} else {

			$model = Hours::Get($user['Id']);
			if (!$model) {
				$model['error'] = "You do not have any hour requests pending";
			}
		}
		$view = 'List.php';
		break;
}
include $view;
?>