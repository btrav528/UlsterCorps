<?php

if (array_key_exists('User', $_SESSION)) {
	$user = $_SESSION['User'];
}
class User {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT wp_users.display_name, Users.*, wp_users.user_login,wp_users.user_email, wp_users.user_pass, wp_users.ID
FROM Users
INNER JOIN wp_users
ON wp_users.ID=Users.wp_users_id
WHERE Users.Id=$id");
		} else {

			return FetchAll("SELECT wp_users.display_name, Users.*, wp_users.user_login, wp_users.user_pass, wp_users.ID
FROM Users
INNER JOIN wp_users
ON wp_users.ID=Users.wp_users_id");
		}

	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From Users WHERE Id=$id ";

		$conn -> query($sql);

		$error = $conn -> error;
		$conn -> close();

		if ($error) {
			return array('db_error' => $error);
		} else {
			return false;
		}
	}

	static public function Validate($row) {
		$errors = array();
		if (!$row['PrimaryPhone'])
			$errors['PrimaryPhone'] = 'A phone number is required.';
		if (!$row['ZIP'])
			$errors['ZIP'] = 'A zip code is required.';
		return count($errors) ? $errors : null;
	}

	static public function FirstSave($row) {
		$conn = GetConnection();
		$row2 = User::Encode($row, $conn);
		$oid = $user['ID'];
		$sql = "Insert Into Users ( Level, wp_users_id, PrimaryPhone, SecondaryPhone, ZIP, Artists, ComputerSkills, Construction, Cooking, EmergencyFeed, EmergencyShelter, Farming, Financial, Fundraising, Grantwriting, GraphicDesign, HealthCare,HeavyLifting, Media, MediationLegal, MentalCare, Mentorship, Research, Spanish, SpecialEvent, Transportation, Tutoring, VideoPhoto ) Values ('" . "''1', '" . $row2["ID"] . "', '" . $row2["PrimaryPhone"] . "', '" . $row2["SecondaryPhone"] . "', '" . $row2["ZIP"] . "', '" . $row2["Artists"] . "', '" . $row2["ComputerSkills"] . "', '" . $row2["Construction"] . "', '" . $row2["Cooking"] . "', '" . $row2["EmergencyFeed"] . "', '" . $row2["EmergencyShelter"] . "', '" . $row2["Farming"] . "', '" . $row2["Financial"] . "', '" . $row2["Fundraising"] . "', '" . $row2["Grantwriting"] . "', '" . $row2["GraphicDesign"] . "', '" . $row2["HealthCare"] . "', '" . $row2["HeavyLifting"] . "', '" . $row2["Media"] . "', '" . $row2["MediationLegal"] . "', '" . $row2["MentalCare"] . "', '" . $row2["Mentorship"] . "', '" . $row2["Research"] . "', '" . $row2["Spanish"] . "', '" . $row2["SpecialEvent"] . "', '" . $row2["Transportation"] . "', '" . $row2["Tutoring"] . "', '" . $row2["VideoPhoto"] . "') ";
		$conn -> query($sql);

		$error = $conn -> error;

		$conn -> close();

	}

	static public function Save($row) {
		$conn = GetConnection();
		$row2 = User::Encode($row, $conn);

		if ($row['Id'] != null) {

			$sql = "UPDATE wp_users SET display_name ='" . $row2["display_name"] . "' , user_login='" . $row2["user_login"] . "', user_pass='" . $row2["user_pass"] . "', user_email='" . $row2["user_email"] . "' WHERE ID='" . $row2['ID'] . "';";

			$conn -> query($sql);
			$error = $conn -> error;
			$oid = mysqli_insert_id($conn);
			$sql2 = "UPDATE Users  SET ZIP='" . $row2["ZIP"] . "' ,PrimaryPhone='" . $row2["PrimaryPhone"] . "',SecondaryPhone='" . $row2["SecondaryPhone"] . "',  Level='" . $row2["Level"] . "', Artists='" . $row2["Artists"] . "', ComputerSkills='" . $row2["ComputerSkills"] . "', Construction='" . $row2["Construction"] . "', Cooking='" . $row2["Cooking"] . "', EmergencyFeed='" . $row2["EmergencyFeed"] . "', EmergencyShelter='" . $row2["EmergencyShelter"] . "', Farming='" . $row2["Farming"] . "', Financial='" . $row2["Financial"] . "', Fundraising='" . $row2["Fundraising"] . "', Grantwriting='" . $row2["Grantwriting"] . "',GraphicDesign='" . $row2["GraphicDesign"] . "', HealthCare='" . $row2["HealthCare"] . "', HeavyLifting='" . $row2["HeavyLifting"] . "', Media='" . $row2["Media"] . "', MediationLegal='" . $row["MediationLegal"] . "', MentalCare='" . $row2["MentalCare"] . "', Mentorship='" . $row2["Mentorship"] . "', Research='" . $row2["Research"] . "', Spanish='" . $row2["Spanish"] . "', SpecialEvent='" . $row["SpecialEvent"] . "', Transportation='" . $row2["Transportation"] . "', Tutoring='" . $row2["Tutoring"] . "', wp_users_id='" . $row2["ID"] . "', VideoPhoto='" . $row2["VideoPhoto"] . "' WHERE Id='" . $row2['Id'] . "';";
			$conn -> query($sql2);
			$error = $conn -> error;
		} else {
			$sql2 = " INSERT INTO wp_users(display_name, user_login, user_pass, user_email ) VALUES ('" . $row2["display_name"] . "', '" . $row2["user_login"] . "', '" . $row2["user_pass"] . "', '" . $row2["user_email"] . "') ";

			$conn -> query($sql2);
			$error = $conn -> error;
			$oid = mysqli_insert_id($conn);

			$sql = "Insert Into Users ( Level, wp_users_id, PrimaryPhone, SecondaryPhone, ZIP, Artists, ComputerSkills, Construction, Cooking, EmergencyFeed, EmergencyShelter, Farming, Financial, Fundraising, Grantwriting, GraphicDesign, HealthCare,HeavyLifting, Media, MediationLegal, MentalCare, Mentorship, Research, Spanish, SpecialEvent, Transportation, Tutoring, VideoPhoto ) Values ('" . "''1', '" . $oid . "', '" . $row2["PrimaryPhone"] . "', '" . $row2["SecondaryPhone"] . "', '" . $row2["ZIP"] . "', '" . $row2["Artists"] . "', '" . $row2["ComputerSkills"] . "', '" . $row2["Construction"] . "', '" . $row2["Cooking"] . "', '" . $row2["EmergencyFeed"] . "', '" . $row2["EmergencyShelter"] . "', '" . $row2["Farming"] . "', '" . $row2["Financial"] . "', '" . $row2["Fundraising"] . "', '" . $row2["Grantwriting"] . "', '" . $row2["GraphicDesign"] . "', '" . $row2["HealthCare"] . "', '" . $row2["HeavyLifting"] . "', '" . $row2["Media"] . "', '" . $row2["MediationLegal"] . "', '" . $row2["MentalCare"] . "', '" . $row2["Mentorship"] . "', '" . $row2["Research"] . "', '" . $row2["Spanish"] . "', '" . $row2["SpecialEvent"] . "', '" . $row2["Transportation"] . "', '" . $row2["Tutoring"] . "', '" . $row2["VideoPhoto"] . "') ";
			echo $sql;
			$conn -> query($sql);

			$error = $conn -> error;

		}

		$conn -> close();

		if ($error) {
			return array('db_error' => $error);
		} else {
			return false;
		}

	}

	static function Encode($row, $conn) {
		$row2 = array();
		foreach ($row as $key => $value) {
			$row2[$key] = $conn -> real_escape_string($value);
		}
		return $row2;
	}

	static public function Blank() {
		return array('display_name' => null, 'user_login' => null, 'user_pass' => null, 'user_email' => null, 'id' => null, 'Level' => 1, 'Id' => null, 'PrimaryPhone' => null, 'ZIP' => null, 'SecondaryPhone' => null, 'Artists' => 0, 'ComputerSkills' => 0, 'Construction' => 0, 'Cooking' => 0, 'EmergencyFeed' => 0, 'EmergencyShelter' => 0, 'Farming' => 0, 'Financial' => 0, 'Fundraising' => 0, 'Grantwriting' => 0, 'GraphicDesign' => 0, 'HealthCare' => 0, 'HeavyLifting' => 0, 'Media' => 0, 'MediationLegal' => 0, 'MentalCare' => 0, 'Mentorship' => 0, 'Research' => 0, 'Spanish' => 0, 'SpecialEvent' => 0, 'Transportation' => 0, 'Tutoring' => 0, 'VideoPhoto' => 0);
	}

}
?>