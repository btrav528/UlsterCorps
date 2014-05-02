<?php
include_once '../../inc/_global.php';
global $pas;
@$action = $_REQUEST['action'];
$errors = null;

switch ($action) {
	default :
		$model = array('UserName' => null, 'Password' => null);
		$view = 'login.php';
		break;

	case 'login' :
		$model = array('UserName' => null, 'Password' => null);
		$view = 'login.php';
		$title = "Login";
		break;
	case 'loginorg' :
		$model = array('UserName' => null, 'Password' => null);
		$view = 'loginorg.php';
		break;

	case 'submitLogin' :
		Auth::LogIn($_REQUEST['UserName'], $_REQUEST['Password']);

		break;
	case 'submitLoginOrg' :
		Org::LogIn($_REQUEST['UserName'], $_REQUEST['Password']);
		break;
	case 'logout' :
		Auth::logout();
		$view = 'logout.php';
		break;
	case 'new' :
		$model = User::Blank();
		$view = 'new.php';
		break;
	case 'newOrg':
		$model= Org::Blank();
		$view='newOrg.php';
		break;
	case 'saveOrg':
		$errors=Org::Validate($_REQUEST);
		$wp_hasher = new PasswordHash(8, TRUE);
		$_REQUEST['Password'] = wp_hash_password($_REQUEST['Password']);
		$errors = Org::Save($_REQUEST);
		if (!$errors) {
			header("Location: ?status=Saved&Id=" . $_REQUEST['Id']);
			die();
		}
		$model = $_REQUEST;
		$view = 'newOrg.php';
		break;
	case 'save' :
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
		$errors = User::Validate($_REQUEST);
		$wp_hasher = new PasswordHash(8, TRUE);
		$_REQUEST['user_pass'] = wp_hash_password($_REQUEST['user_pass']);
		$errors = User::Save($_REQUEST);

		if (!$errors) {
			header("Location: ?status=Saved&Id=" . $_REQUEST['Id']);
			die();
		}
		$model = $_REQUEST;
		$view = 'new.php';

		break;
}
include $view;
?>