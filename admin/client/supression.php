<!-- 
	Si l'id est n'est pas null
	On fait une requête préparée pour supprimer l'utilisateur avec cet Id
 -->
<?php require_once $_SERVER["DOCUMENT_ROOT"]."/connect.php";
if (isset($_GET["id"]) && $_GET["id"] > 0)
{
	$sql = "DELETE FROM tblclient
	WHERE clientId = :id";

	$statement = $db->prepare($sql);
	$statement->execute([":id"=>$_GET["id"]]);
}

header("location:index.php");