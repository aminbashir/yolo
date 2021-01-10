<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="sign-in.css">
        <title>AminBashir-portfolio login</title>
    </head>

    <body>

	<?php
	include("connection.php");
	session_start();
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password1 =md5("$password");
 
            // Check user is exist in the database
			$result = mysqli_query($conn, "SELECT * FROM `logins` WHERE username='$username' AND passwords='$password1'");
			
			// Associative array
			$row = mysqli_fetch_assoc($result);
  			$role = $row['role'];
			
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
				$_SESSION['type']=$role;
                // Redirect to user dashboard page
                header("Location: view-event.php");
            }
        }
    ?>

<div class="container">

		<div class="header">
			<h1>
				Sign In
			</h1>			
		</div>
		<div class="form_container">
			<form action="" method="post">
				<div>
					<input type="text" name="username"autofocus required>
					<label for="">
						Username
					</label>
				</div>

				<div>
					<input type="password" name="password" id="password" autofocus required>
					<label for="">
						Password
					</label>
				</div>

				<div>
					<input type="submit" value="Login" name="submit">
				</div>
			</form>
		</div>
		<div class="forgot_password">
			<p>Have an account?
				<a href="sign-up.php">
					sign up here
				</a>
			</p>
		</div>
	
	
		<div class="forgot_password">
			<p>Need Help?
				<a href="help.php">
					HELP
				</a>
			</p>
		</div>
	</div>

	
    </body>
</html>
