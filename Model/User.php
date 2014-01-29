<?php
class Users{
static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_User WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_User');
		}
	}
}
?>