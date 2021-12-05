<?php
	session_start();
	
	if ( isset($_SESSION["username"]) )
	{
		echo "<p>You are now logged in as " . $_SESSION["username"] . ".</p>";
		echo "<p>Welcome, " . $_SESSION["realname"] . "!</p>";
		echo "<p><a href='includes/logout.inc.php'>Logout</a></p>";
	}
	else
	{
		echo "<p>You are not logged in.</p>";
		echo "<p><a href='login.php'>Login</a></p>";
		echo "<p><a href='signup.php'>Signup</a></p>";
	}
