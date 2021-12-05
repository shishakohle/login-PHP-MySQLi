<html>

<head>
	<title>Signup</title>
</head>

<body>

	<div>
		<H1>Signup Form</H1>
		<p>
			<form action="includes/signup.inc.php" method="post">
				<p><input type="text" name="fullname" placeholder="Full name"></p>
				<p><input type="text" name="email" placeholder="E-Mail"></p>
				<p><input type="text" name="username" placeholder="Username"></p>
				<p><input type="password" name="password" placeholder="Password"></p>
				<p><input type="password" name="passwordRepeat" placeholder="Repeat password"></p>
				<p><button type="submit" name="submit">Sign me up</button></p>
			</form>
		</p>
		<?php
			if( isset($_GET["error"]) )
			{
				if($_GET["error"]=="emptyinput")
				{
					echo "<p>Fill in all fields!</p>";
				}
				if($_GET["error"]=="invalidusername")
				{
					echo "<p>Username contains invalid characters.</p>";
				}
				if($_GET["error"]=="invalidemail")
				{
					echo "<p>Invalid email address.</p>";
				}
				if($_GET["error"]=="passwordmismatch")
				{
					echo "<p>You entered two different passwords.</p>";
				}
				if($_GET["error"]=="usernametaken")
				{
					echo "<p>Sorry, this username is already taken.</p>";
				}
				if($_GET["error"]=="stmtfailed")
				{
					echo "<p>Something went wrong, try again later.</p>";
				}
				if($_GET["error"]=="emailregistered")
				{
					echo "<p>You already registered with this email address.</p>";
				}
				if($_GET["error"]=="none")
				{
					echo "<p>We signed you up. Welcome!</p>";
				}
			}
		?>
	</div>

</body>
</html>
