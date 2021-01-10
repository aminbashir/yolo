<?php 
	include('connection.php');
	session_start();
	$errors=array();
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=md5($_POST['password_1']);
		$password2=md5($_POST['password_2']);
        
        //assignining the role of the admin during registration period
		$role="admin";

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }
		if (empty($password2)) { array_push($errors, "Confirn password is required"); }
		if ($password != $password2) {
            array_push($errors, "Password missmatch");
		}
		
		//continue with insertion of data if no error has occured
		if (count($errors) == 0) {
			$query = "INSERT INTO `logins` (`lid`, `username`, `email`, `passwords`, `role`) VALUES (NULL, '$username', '$email', '$password', '$role');";
			mysqli_query($conn, $query);
			$_SESSION['type'] = $role;
			echo("<script>alert('registered successfully')</script>");
		}

		
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Amin Portfolio</title>
	<link rel="stylesheet" type="text/css" href="sign-up.css">
</head>
<body>
	<?php  if (count($errors) != 0):?>
		<div class="error">
			<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
			<?php endforeach ?>
		</div>
	<?php  endif ?>

	<div class="header">
		<h2>Sign Up</h2>
	</div>
	
	<form method="post" action="admin.php">
		<div class="input-group">
			<label>Username</label>
			<input type="email" name="username" placeholder="enter your username or email here">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="Plese type your email here">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>

		
		<div class="input-group">
			<input type="submit" name="submit" class="btn" value="SIGN UP">
		</div>
		<p>
			Already a member? <a href="sign-in.php">Sign in</a>
		</p>
	</form>
</body>
</html>
