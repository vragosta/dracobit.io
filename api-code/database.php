<?php 
	namespace DatabaseUtil;
	
	// PDO Constants
	include ('define.php');

	function add_to_mobile_db($username){
		$userID = get_user_id_from_name($username);

		$pdo = new PDO(DB_DSN, DB_UN, DB_PW);

		$query = "INSERT INTO mobile_users (userID, userKey, isLoggedIn, isPasswordChanged) VALUES (?, ? 0, 0)";
		$stmt = $pdo->prepare($query);

		// generate userKey
		$stmt->execute(array($userID, bin2hex(random_bytes($length))));
	}

	function get_user_id_from_name($username){
		$pdo = new PDO(DB_DSN, DB_UN, DB_PW);

		$query = "SELECT ID FROM wp_users WHERE user_login = ?";
		$stmt = $pdo->prepare($query);
		$stmt->execute(array($username));

		$temp = $stmt->fetch(PDO::FETCH_NUM);
		return $temp[0];
	}

	function get_user_id_from_key($userKey){
		$pdo = new PDO(DB_DSN, DB_UN, DB_PW);

		$query = "SELECT userID FROM mobile_users WHERE userKey = ?";
		$stmt = $pdo->prepare($query);
		$stmt->execute(array($userKey));

		$temp = $stmt->fetch(PDO::FETCH_NUM);
		return $temp[0];
	}

	function is_logged_in($userID){
		$pdo = new PDO(DB_DSN, DB_UN, DB_PW);

		$query = "SELECT isLoggedIn FROM mobile_users WHERE userID = ?";

		$stmt->$pdo->prepare($query);
		$stmt->execute(array($userID));

		$temp = $stmt->fetch(PDO::FETCH_NUM);

		if ($temp[0] == 1)		return true;
		else 					return false;
	}

	function is_password_changed($userID){
		$pdo = new PDO(DB_DSN, DB_UN, DB_PW);

		$query = "SELECT isPasswordChanged FROM mobile_users WHERE userID = ?";

		$stmt->$pdo->prepare($query);
		$stmt->execute(array($userID));

		$temp = $stmt->fetch(PDO::FETCH_NUM);

		if ($temp[0] == 1)		return true;
		else 					return false;
	}

	function get_user_key($userID){
		$pdo = new PDO(DB_DSN, DB_UN, DB_PW);

		$query = "SELECT userKey FROM mobile_users WHERE userID = ?";
		$stmt = $pdo->prepare($query);
		$stmt->execute(array($userID));

		$temp = $stmt->fetch(PDO::FETCH_NUM);
		return $temp[0];
	}


 ?>