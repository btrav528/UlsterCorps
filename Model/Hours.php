<?php
class Hours {
	static public function Save($row) {
		$conn = GetConnection();
		$row2 = Hours::Encode($row, $conn);
		$sql = "INSERT INTO Hours(HoursRequested, TimeIn, TimeOut, Date, Event_Id, Users_Id )Values ('" . $row2["HoursRequested"] . "', '" . $row2["TimeIn"] . "', '" . $row2["TimeOut"] . "', '" . $row2["Date"] . "', '" . $row2["Event_Id"] . "', '" . $row2["Users_Id"] . "') ";
		$conn -> query($sql);

		$error = $conn -> error;
		$conn -> close();

		if ($error) {
			return array('db_error' => $error);
		} else {
			return false;
		}
	}
	static public function GetRequest($id){
		return Fetch_One("SELECT * FROM Hours WHERE Hours.Id=$id");
	}

	static public function Get($id = null) {
		if (isset($id)) {
			return FetchAll("SELECT Hours.*, wp_users.display_name
FROM Hours
INNER JOIN Users, wp_users
WHERE Hours.Users_Id=Users.Id AND wp_users.ID=Users.wp_users_id AND Users.Id=$id");
		} else {
			return FetchAll('SELECT Hours.*, wp_users.display_name
FROM Hours
INNER JOIN Users, wp_users
WHERE Hours.Users_Id=Users.Id AND wp_users.ID=Users.wp_users_id ');
		}

	}

	static function Encode($row, $conn) {
		$row2 = array();
		foreach ($row as $key => $value) {
			$row2[$key] = $conn -> real_escape_string($value);
		}
		return $row2;
	}

	static public function GetEvent($id) {
		return Fetch_One("SELECT event_name FROM wp_em_events WHERE event_id=$id");
	}

	static public function GetEventList() {
		return FetchAll("SELECT event_name , event_id FROM wp_em_events WHERE event_end_date > '2013-10-23'");
	}

	static public function Validate($row) {
		var_dump($row);
		$errors = array();
		if (!$row['Date'])
			$errors['Date'] = "Please enter the date that you volunteered.";
		if (!$row['Event_Id'])
			$errors['Event_Id'] = "Please select the event that you volunteered at.";
		if (!$row['TimeIn'])
			$errors['TimeIn'] = "Please specify what time you started working.";
		if (!$row['TimeOut'])
			$errors['TimeOut'] = "Please specify what time you stopped working.";
		if (!$row['HoursRequested'])
			$errors['HoursRequested'] = "Please specify how many hours you worked.";
		return count($errors) ? $errors : null;
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From Hours WHERE Id=$id ";

		$conn -> query($sql);

		$error = $conn -> error;
		$conn -> close();

		if ($error) {
			return array('db_error' => $error);
		} else {
			return false;
		}
	}

}
