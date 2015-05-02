<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


/*line below this is from lecture on sessions.  isset($_GET['username'])
*checks to see if the user has entered a username.  
*$_GET['action']==end is the key that is passed in the href of logout click
*here to indicate that the user wishes to log out.  
*/

/*if(isset($_GET['username']) && $_GET['action'] == 1){
	echo "$_SESSION[username] has been logged out";
	$_SESSION = array();
	session_destroy();
}*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login.php</title>
	</head>
	
	<body>
		<form action="content1.php" method="POST">
			<h1>Please enter your username: </h1>
			<input type= "text" name= "username">
			<input type= "submit" value="GO">
		</form>
	</body>
</html>

