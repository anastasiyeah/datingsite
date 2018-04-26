<?php
	// check what is received through POST

	include('classes/database.php');
	$database = new Database;
	$database->connect();

	
	$sql = "UPDATE profiles SET likes = likes + 1 WHERE id = " . htmlspecialchars($_GET["id"]);

	// function to execute the above
	$database->queryWithoutFetchAll($sql);

	header("Location: index.php");

?>

 

