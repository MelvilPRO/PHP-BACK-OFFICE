<?php require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
	$hashed = password_hash("Melviloup", PASSWORD_DEFAULT);
	echo $hashed;
	
	$userLogin = "Melviloup";
	$userPwd = $hashed;
	$userName = "Melviloup";

	$sql = "INSERT INTO tblutilisateur (userLogin, userPwd, userName)
			VALUES (:userLogin, :userPwd, :userName)";

	$statement = $db->prepare($sql);
	$statement->bindParam(":userLogin", $userLogin);
	$statement->bindParam(":userPwd", $userPwd);
	$statement->bindParam(":userName", $userName);
	$statement->execute();
?>