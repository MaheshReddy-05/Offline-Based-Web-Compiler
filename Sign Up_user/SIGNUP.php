<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="insert into user_det (username,email,password)
     values('$name','$email','$password');";

     $result = mysqli_query($con,$sql);

     if($result)
     {
		
        header('location:/seproject/Login_user/index.php');
     }
     else
     {
		die(mysqli_error($con));
     }
}
?>

<head>
<link href="style.css" rel="stylesheet">
</head>
<script src="script.js"></script>
<div class="container">
	<div class="header">
		<h2>Create Account</h2>
	</div>
	<form id="form" class="form" method="post">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" placeholder="Enter User name" id="username" name="username"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Email</label>
			<input type="email" placeholder="Enter Email" id="email" name="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" placeholder="Password" id="password" name="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password check</label>
			<input type="password" placeholder="Password two" id="password2"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<button name="submit">Submit</button>
	</form>
</div>