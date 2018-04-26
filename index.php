<!DOCTYPE html>
<html>
<head>
	<title>Superdating!</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
</head>
<body>
    
    <h1>Is saving the world not enough for you? <br> Find a soulmate to share your superhero passion with ;)</h1>
    <h3>You are currently logged in as Thor Odinson</h3>
    <a href="edit_profile.php">Edit profile</a> <br>
      
    <?php

    // ensure that php errors are displayed
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

	// Include and initiate the database class
	include('classes/database.php');
	$database = new Database;
	$database->connect();

	// Get all the profiles
	$profiles = $database->query('SELECT * FROM profiles');

	// Loop through all profiles
	foreach ($profiles as $profile) {
        $comments = $database->query("SELECT * FROM comments LEFT JOIN profiles ON 
        comments.profile_from = profiles.id WHERE profile_to = " . $profile['id']);
		?>
    
		<article>
			<h2> <?php echo $profile['name'];?> (<?php echo $profile['age'];?>)</h2>
            <img src="<?php echo $profile['img'];?>">
            
            <h3>Superpower: <?php echo $profile['superpower'];?></h3>
            
			<h3>Gender: <?php echo $profile['gender'];?></h3>
            
			<p>
				Hobbies: <?php echo $profile['hobbies'];?>
			</p>
            
            <dl>
            <?php
            foreach ($comments as $comment) {
                ?>
                <dt><b>Comment from: <?php echo $comment['name'];?></b></dt> 
                <dd><?php echo $comment['message'];?></dd>
            <?php
            } 
        ?>
            </dl>
            
            <form method='post' action='comment_process.php'>
                <input type="hidden" name="profile_from" value="1">
                <input type="hidden" name="profile_to" value="<?php echo $profile['id'];?>">
                <textarea name='message' placeholder="Write a comment .."></textarea> <br>
                <input type="submit" name="submit" value="Send">
            </form>
            
            <a href="./like.php?id=<?php echo $profile['id'];?>">LIKE PROFILE</a>
            <p>Amount of likes: <?php echo $profile['likes'];?></p>
            
		</article>
    
		<?php
	}
?>
    
</body>
</html>