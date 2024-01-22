<?php require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
if (isset($_GET["id"]) && $_GET["id"] > 0)
{
	$sql = "DELETE FROM tblclient
	WHERE clientId = :id";

	$statement = $db->prepare($sql);
	$statement->execute([":id"=>$_GET["id"]]);
}

header("location:index.php");