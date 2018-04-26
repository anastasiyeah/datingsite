<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
</head>
<body>
    
     <h1>Edit your profile</h1>
    <h3>You are currently logged in as Thor Odinson</h3>
        <a href="index.php">Go Back</a>
    
    <?php
   
// Include and initiate the database class 
	include('classes/database.php');
	$database = new Database;
	$database->connect();
    
    ?>

  <form action="update_process.php" method="post">
     
  	<label for="name">Name</label>
  	<input type="text" name="name" placeholder="Name">
      
    <label for="superpower">Superpower</label>
  	<textarea name="superpower" placeholder="Text"></textarea>
      
    <label for="age">Age</label>
  	<input type="text" name="age" placeholder="e.g. 25">
  	  	
  	<label for="image">Image</label>
  	<input type="text" name="image" placeholder="absolute url to image">

  	<label for="hobbies">Hobbies</label>
  	<input type="text" name="hobbies" placeholder="Text">

  	<input type="submit" name="submit" value="Update">
  </form>
    
</body>
</html>