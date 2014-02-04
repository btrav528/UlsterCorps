<?php
class User{
static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM Users WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM Users');
		}
	}
}
?>