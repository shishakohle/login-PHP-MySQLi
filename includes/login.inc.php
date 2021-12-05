<?php
	if (isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		require_once 'dbconnect.php';
		require_once 'functions.inc.php';
		
		if( emptyInputLogin($username, $password) )
		{
			header("location: ../login.php?error=emptyinput");
			exit();
		}
		
		loginUser($conn, $username, $password);
	}
	else
	{
		header("location: ../login.php");
		exit();
	}
