<?php
class User {
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
			$errors['PrimaryPhone'] = 'A phone number is required.';
		if (!$row['ZIP'])
			$errors['ZIP'] = 'A zip code is required.';
		if (!$row['UserName'])
			$errors['UserName'] = 'A user name is required for login purposes.';
		if (!$row['Password'])
			$errors['Password'] = 'A password is required.';

		return count($errors) ? $errors : null;
	}

	static public function Save($row) {
		$conn = GetConnection();
		$row2 = User::Encode($row, $conn);
		if ($row['Id'] != null) {
			$sql = "UPDATE Users  SET FirstName='" . $row2['FirstName'] . "', LastName='" . $row2["LastName"] . "',UserName='" . $row2['UserName'] . "', Password='" . $row2["Password"] . "',ZIP='" . $row2["ZIP"] . "' ,PrimaryPhone='" . $row2["PrimaryPhone"] . "',SecondaryPhone='" . $row2["SecondaryPhone"] . "', Email='" . $row2["Email"] . "',  Level='" . $row2["Level"] . "', Artists='" . $row2["Artists"] . "', ComputerSkills='" . $row2["ComputerSkills"] . "', Construction='" . $row2["Construction"] . "', Cooking='" . $row2["Cooking"] . "', EmergencyFeed='" . $row2["EmergencyFeed"] . "', EmergencyShelter='" . $row2["EmergencyShelter"] . "', Farming='" . $row2["Farming"] . "', Financial='" . $row2["Financial"] . "', Fundraising='" . $row2["Fundraising"] . "', Grantwriting='" . $row2["Grantwriting"] . "',GraphicDesign='" . $row2["GraphicDesign"] . "', HealthCare='" . $row2["HealthCare"] . "', HeavyLifting='" . $row2["HeavyLifting"] . "', Media='" . $row2["Media"] . "', MediationLegal='" . $row["MediationLegal"] . "', MentalCare='" . $row2["MentalCare"] . "', Mentorship='" . $row2["Mentorship"] . "', Research='" . $row2["Research"] . "', Spanish='" . $row2["Spanish"] . "', SpecialEvent='" . $row["SpecialEvent"] . "', Transportation='" . $row2["Transportation"] . "', Tutoring='" . $row2["Tutoring"] . "', VideoPhoto='" . $row2["VideoPhoto"] . "' WHERE Id='" . $row2['Id'] . "';";
		} else {
			$sql = "Insert Into Users (FirstName, LastName, UserName, Password, Level, Email, PrimaryPhone, SecondaryPhone, ZIP, Artists, ComputerSkills, Construction, Cooking, EmergencyFeed, EmergencyShelter, Farming, Financial, Fundraising, Grantwriting, GraphicDesign, HealthCare,HeavyLifting, Media, MediationLegal, MentalCare, Mentorship, Research, Spanish, SpecialEvent, Transportation, Tutoring, VideoPhoto ) Values ('" . $row2["FirstName"] . "', '" . $row2["LastName"] . "', '" . $row2["UserName"] . "', '" . $row2["Password"] . "', '1', '" . $row2["Email"] . "', '" . $row2["PrimaryPhone"] . "', '" . $row2["SecondaryPhone"] . "', '" . $row2["ZIP"] . "', '" . $row2["Artists"] . "', '" . $row2["ComputerSkills"] . "', '" . $row2["Construction"] . "', '" . $row2["Cooking"] . "', '" . $row2["EmergencyFeed"] . "', '" . $row2["EmergencyShelter"] . "', '" . $row2["Farming"] . "', '" . $row2["Financial"] . "', '" . $row2["Fundraising"] . "', '" . $row2["Grantwriting"] . "', '" . $row2["GraphicDesign"] . "', '" . $row2["HealthCare"] . "', '" . $row2["HeavyLifting"] . "', '" . $row2["Media"] . "', '" . $row2["MediationLegal"] . "', '" . $row2["MentalCare"] . "', '" . $row2["Mentorship"] . "', '" . $row2["Research"] . "', '" . $row2["Spanish"] . "', '" . $row2["SpecialEvent"] . "', '" . $row2["Transportation"] . "', '" . $row2["Tutoring"] . "', '" . $row2["VideoPhoto"] . "') ";
		}
		
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

	static function Encode($row, $conn) {
		$row2 = array();
		foreach ($row as $key => $value) {
			$row2[$key] = $conn -> real_escape_string($value);
		}
		return $row2;
	}

	static public function Blank() {
		return array('id' => null, 'FirstName' => null, 'LastName' => null, 'Password' => null, 'Level' => 1, 'Id' => null, 'PrimaryPhone' => null, 'ZIP' => null, 'SecondaryPhone' => null, 'Email' => null, 'UserName' => null, 'Artists' => 0, 'ComputerSkills' => 0, 'Construction' => 0, 'Cooking' =>0,'EmergencyFeed' =>0, 'EmergencyShelter' =>0, 'Farming' =>0, 'Financial' =>0, 'Fundraising' =>0, 'Grantwriting' =>0, 'GraphicDesign' =>0, 'HealthCare' =>0, 'HeavyLifting' =>0, 'Media' =>0, 'MediationLegal' =>0, 'MentalCare' =>0, 'Mentorship' =>0, 'Research' =>0, 'Spanish' =>0, 'SpecialEvent' =>0, 'Transportation' =>0, 'Tutoring' =>0 ,'VideoPhoto' =>0 );
	}

}
?>