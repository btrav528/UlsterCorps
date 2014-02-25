<?php
include_once '../../inc/_global.php';
@$action = $_REQUEST['action'];
switch($action) {
	case 'new' :
		$model = User::Blank();
		$view = 'edit.php';

	case 'edit' :
		$model = User::Get($_REQUEST['id']);
		$view = 'edit.php';
		break;

	case 'details' :
		$model = User::Get($_REQUEST['id']);
		$view = 'details.php';
		break;
	case 'delete' :
		if (isset($_POST['id'])) {
			$errors = User::Delete($_REQUEST['id']);
			if (!$errors) {
				header("Location:  ?");
				die();
			}
		}
		$model = User::Get($_REQUEST['id']);
		$view = 'delete.php';
		break;

	case 'save' :
		$errors = User::Validate($_REQUEST);
		if (!$errors) {
			if (empty($_REQUEST['Artists'])) {
				$_REQUEST['Artists'] = 0;
			}
			if (empty($_REQUEST['ComputerSkills'])) {
				$_REQUEST['ComputerSkills'] = 0;
			}
			if (empty($_REQUEST['Construction'])) {
				$_REQUEST['Construction'] = 0;
			}
			if (empty($_REQUEST['Cooking'])) {
				$_REQUEST['Cooking'] = 0;
			}
			if (empty($_REQUEST['EmergencyFeed'])) {
				$_REQUEST['EmergencyFeed'] = 0;
			}
			if (empty($_REQUEST['EmergencyShelter'])) {
				$_REQUEST['EmergencyShelter'] = 0;
			}
			if (empty($_REQUEST['Farming'])) {
				$_REQUEST['Farming'] = 0;
			}
			if (empty($_REQUEST['Financial'])) {
				$_REQUEST['Financial'] = 0;
			}
			if (empty($_REQUEST['Fundraising'])) {
				$_REQUEST['Fundraising'] = 0;
			}
			if (empty($_REQUEST['Grantwriting'])) {
				$_REQUEST['Grantwriting'] = 0;
			}
			if (empty($_REQUEST['GraphicDesign'])) {
				$_REQUEST['GraphicDesign'] = 0;
			}
			if (empty($_REQUEST['HealthCare'])) {
				$_REQUEST['HealthCare'] = 0;
			}
			if (empty($_REQUEST['HeavyLifting'])) {
				$_REQUEST['HeavyLifting'] = 0;
			}
			if (empty($_REQUEST['Media'])) {
				$_REQUEST['Media'] = 0;
			}
			if (empty($_REQUEST['MediationLegal'])) {
				$_REQUEST['MediationLegal'] = 0;
			}
			if (empty($_REQUEST['MentalCare'])) {
				$_REQUEST['MentalCare'] = 1;
			}
			if (empty($_REQUEST['Mentorship'])) {
				$_REQUEST['Mentorship'] = 0;
			}
			if (empty($_REQUEST['Research'])) {
				$_REQUEST['Research'] = 0;
			}
			if (empty($_REQUEST['Spanish'])) {
				$_REQUEST['Spanish'] = 0;
			}
			if (empty($_REQUEST['SpecialEvent'])) {
				$_REQUEST['SpecialEvent'] = 0;
			}
			if (empty($_REQUEST['Transportation'])) {
				$_REQUEST['Transportation'] = 0;
			}
			if (empty($_REQUEST['Tutoring'])) {
				$_REQUEST['Tutoring'] = 0;
			}
			if (empty($_REQUEST['VideoPhoto'])) {
				$_REQUEST['VideoPhoto'] = 0;
			}

			$errors = User::Save($_REQUEST);
		}
		if (!$errors) {
			header("Location: ?status=Saved&Id=" . $_REQUEST['Id']);
			die();
		}
		$model = $_REQUEST;
		$view = 'edit.php';
		$title = "Edit: " . $model['FirstName'] . $model['LastName'];

		break;
	default :
		$model = User::Get();
		$view = 'List.php';
		break;
}
include $view;
?>