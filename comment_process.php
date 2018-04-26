<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
</head>
<body>
    
<?php
	
	// check what is received through POST
	include('classes/database.php');
	$database = new Database;
	$database->connect();


    
	//- - - Add new comment - - - 

	// First, prepare the SQL
	$sql = "INSERT INTO comments (
							message, 
                            profile_from,
                            profile_to
						) 
			VALUES (?,?,?)";
	
	// Secondly, add values
	$values = array(
		$_POST['message'],
        $_POST['profile_from'],
        $_POST['profile_to'],
	);


	// Call prepared function to execute the above
	$database->prepared($sql,$values);
    

?>
    <p>Coolio! You posted a comment!
        <a href="index.php">Back</a>
    </p>
    
</body>
</html>