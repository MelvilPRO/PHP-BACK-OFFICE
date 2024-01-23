<?php
	if (isset($_COOKIE["Melviloup"]))
		echo $_COOKIE["Melviloup"];

	echo "<br>";

	session_start();
	echo $_SESSION["Melviloup"];
?>