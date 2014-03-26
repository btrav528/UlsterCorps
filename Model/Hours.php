<?php
class Hours {
	static public function Save($row){
				$conn = GetConnection();
				$row2 = Hours::Encode($row, $conn);
				$sql="INSERT INTO Hours(HoursRequested, TimeIn, TimeOut, Date, Event_Id, Users_Id )Values ('" . $row2["HoursRequested"] . "', '" . $row2["TimeIn"]."', '".$row2["TimeOut"]. 
				"', '".$row2["Date"]. "', '".$row2["Event_Id"]."', '" . $row2["Users_Id"] . "') ";
			$conn -> query($sql);
		
		$error = $conn -> error;
		$conn -> close();
		
		if ($error) {
			return array('db_error' => $error);
		} else {
			return false;
		}
	}
	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM Hours WHERE users_Id=$id");
		} else {
			echo "fetchall";
			return FetchAll('SELECT * FROM Hours');
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

	static public function GetUser($id) {
		return Fetch_One("SELECT LastName FROM users WHERE Id=$id");
	}
	static public function GetEventList(){
		return FetchAll("SELECT event_name , event_id FROM wp_em_events");
	}
	static public function Validate($row){
		var_dump($row);
		$errors=array();
		if(!$row['Date'])
			$errors['Date']="Please enter the date that you volunteered.";
		if(!$row['Event_Id'])
			$errors['Event_Id']="Please select the even that you volunteered at.";
		if(!$row['TimeIn'])
			$errors['TimeIn']= "Please specify what time you started working.";
		if(!$row['TimeOut'])
			$errors['TimeOut']="Please specify what time you stopped working.";
		if(!$row['HoursRequested'])
			$errors['HoursRequested']="Please specify how many hours you worked.";
		return count($errors) ? $errors : null;
	}
}

