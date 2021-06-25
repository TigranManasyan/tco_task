<?php 
	require_once "../config/Database.php";

	class Category extends Database {
		public function save_category($name) {
			$result_unique = $this -> sql_db -> query("SELECT COUNT(*) FROM `categories` WHERE `title` = '$name'");
			if($result_unique  > 0 ) {
				return false;
			} else {
				$res = $this -> sql_db -> query("INSERT INTO `categories` VALUES (Null, '$name')");
				if($res) {
					return true; 
				} else {
					return false;
				}
			}
		}

		public function all() {
			$result_all = $this -> sql_db -> query("SELECT * FROM `categories`");
			return $result_all -> fetch_all(MYSQLI_ASSOC);
		}
	}


 ?>