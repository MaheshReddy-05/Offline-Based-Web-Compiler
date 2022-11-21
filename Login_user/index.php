<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

$sql="select * from user_det where username='$username' and password='$password';";
$result=mysqli_query($con,$sql);
if($result){
	$row=mysqli_fetch_assoc($result);
		if($row!=null)
		{
			header('location: /Ide/Online-Based-Web-Compiler/ui/ide.php');
		}
	else
     {
        echo "<script type='text/javascript'>alert('No match for User Name and Password');</script>";
     }
}
     else
     {
        die(mysqli_error($con));
	}
}
	
	 
?>


<head>
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="style.css" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1 >CODE SOFTWARE</h1>
		
		</div>
	</div>
	
	
		<div class="right">
		<h5>Log</h5>
		<p>Don't have an account? <a href="/seproject/SIGN UP_user/SIGNUP.php">Creat Your Account</a></p>
		
		<form name="form-my" method="post">
		<div class="inputs">
			<input type="text" placeholder="user name" name="username">
			<br>
			<input type="password" placeholder="password" name="password">
			<br><br>
			<button name="submit">Login</button>
			
		</div>
		</form>

		<br><br>
			<br><br>
			
		
			
			<br>
			
	</div>
	
</div>
<!-- partial -->
  
</body>

