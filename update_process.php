<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<?php
	
	// check what is received through POST
	include('classes/database.php');
	$database = new Database;
	$database->connect();


	//- - - Edit profile - - - 

	$sql = "UPDATE profiles SET 
            name = '" . $_POST['name'] . "',
            superpower = '" . $_POST['superpower'] . "',
            img = '" . $_POST['img'] . "',
            age = '" . $_POST['age'] . "',
            hobbies = '" . $_POST['hobbies'] . "' WHERE id = '1'"; 


	// Call prepared function to execute the above
	$database->queryWithoutFetchAll($sql);

?>
    
    <p>Alllrhigh! You changed your profile!
        <a href="index.php">Back</a>
    </p>
    
</body>
</html>