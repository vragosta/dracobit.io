<?php 
	namespace DatabaseUtil;
	
	// PDO Constants
	include ('define.php');

	function add_to_mobile_db($username){
		$userID = get_user_id($username);

		$pdo = new PDO(DB_DSN, DB_UN, DB_PW);

		$query = "INSERT INTO mobile_users (userID, isLoggedIn, isPasswordChanged) VALUES (?, 0, 0)";
		$stmt = $pdo->prepare($query);
		$stmt->execute(array($userID))
	}

	function get_user_id($username){
		$pdo = new PDO(DB_DSN, DB_UN, DB_PW);

		$query = "SELECT ID FROM wp_users WHERE user_login = ?";
		$stmt = $pdo->prepare($query);
		$stmt->execute(array($username));

		$temp = $stmt-fetch(PDO::FETCH_NUM);
		return $temp[0];
	}


 ?>