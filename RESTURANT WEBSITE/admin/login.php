<!doctype html>





<?php  include('../config/constant.php'); ?>













<html>
<head>
<meta charset="utf-8">
<title>Login Food Order System</title>
	<link rel="stylesheet" href="file:///C:/wamp64/www/RESTURANT%20WEBSITE/css/main.css">
</head>

<body>

	<div class="login">
	<h1 class="text-center">Login</h1><br/>
		
		
		<?php
		
		
		if(isset($_SESSION['login']))
		{
			echo $_SESSION['login'];
			unset($_SESSION['login']);
		}
		?>
		
		<br><br>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!-------------login form start---------->
		<form action="" method="POST" class="text-center">
		Username:<br/><br/>
			<input type="text" name="username" placeholder="Enter username"><br/><br/>
		Password:<br/><br/>
			<input type="password" name="password" placeholder="Enter Password">
			
			<br/><br/>
			
			<input type="submit" name="submit" value="Login" class="btn-primary">
			
		</form>
		
		
		
		<!---------login form end--------------->
		
		
		
		
		
		
		
		
		
		
		
		
		
	<p class="text-center">Created by - <a href="#">W.K.K.B.WEERASINGHE</a></p>
</div>	
</body>
</html>




<?php



//check whether the submit button clicked or not
if(isset($_POST['submit']))
{
	//process for login
	//1. get to data for login form
	 $username=$_POST['username'];
	 $password=md5($_POST['password']);
	
	//sql query
	$sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
	
	//3.execute query
	$res=mysqli_query($conn,$sql);
	
	
	//user exist or not
	$count=mysqli_num_rows($res);
	
	
	if($count==1)
	{
		//login success
		$_SESSION['login']="Login Successful";
		//redirect home page
		header('location'.SITEURL.'index.php');
		
		
		
		
	}else{
		//user not availabe
	  //login fail
		$_SESSION['login']="Login failed";
		//redirect home page
		header('location'.SITEURL.'admin/login.php');
	}
	
}
?>





















