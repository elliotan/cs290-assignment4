<?php
	session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Content1.php</title>
	</head>

	<body>

		<h1>WELCOME TO CONTENT 1.php</h1>

	<?php

		///new user logging in while old is still logged in
		if(isset($_REQUEST['username'])){
			if(isset($_SESSION['username']) && $_SESSION['username'] != $_REQUEST['username']){

				echo "Can't log in because ".$_SESSION['username']." is logged in. ";
				echo 'To log out click <a href="logout.php">here</a>';
			}
			///user with session started returns to content1
			elseif(isset($_SESSION['username'])){
				echo "Welcome back ".$_SESSION['username'].". ";
				echo '<p>';
				echo '<a href="content2.php">Members Only</a>';
				echo '<p>';
				echo 'To log out click <a href="logout.php">here</a>';
				echo '<p>';
				echo "You have been here ".$_SESSION['visits']. " times. ";
				$_SESSION['visits']++;
			}
			///first log in; initiate session count
			else{
				$_SESSION['username'] = $_REQUEST['username'];
				echo "User ".$_SESSION['username']." is now logged in.<br/>";
				$_SESSION['visits']=0;
				echo '<p>';
				echo "You have been here ".$_SESSION['visits']. " times. ";
				$_SESSION['visits']++;
				echo '<p>';
				echo '<a href="content2.php">Members Only</a>';
				echo '<p>';
				echo "To log out click ";
				echo '<a href="logout.php">here</a>.';
			}
		}
		else{
			///user with session started returns to content1
			if(isset($_SESSION['username'])){
				echo "Welcome back ".$_SESSION['username'].".";
				echo '<p>';
				echo '<a href="content2.php">Members Only</a>';
				echo '<p>';
				echo "You have been here ".$_SESSION['visits']. " times. ";
				$_SESSION['visits']++;
				echo 'To log out click <a href="logout.php">here</a>';
			}
			///user attempts to access content1.php without going thru login.php
			else{
				echo 'Not logged in, return to <a href="login.php">login page</a>';
			}
		}
	?>

	</body>
</html>