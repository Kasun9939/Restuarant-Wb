<?php include('partials/menu.php') ?>




<div class="main-content">
  <div class="wrapper">
	<h1>Change Password</h1>
	  <br/><br/>
	
	  
	  <?php
	   if(isset($_GET['id'])){
		   $id=$_GET['id'];
	   }
	
	
	
	
	
	
	
	
	
	
	
	
	?>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	
	<form action="" method="POST">
	  
	  <table class="tbl-30">
		<tr>
		  <td>Old Paaword</td>
			<td>
			
			<input type="password" name="current_password" placeholder="Current Password">
			</td>
	    </tr>
		  <tr>
		    <td>New Password</td>
		    <td>
			  
			<input type="password" name="new_password" placeholder="New Password">
			</td>
		  </tr>
		      <tr>
		    <td>Confirm Password</td>
		    <td>
			  
			<input type="password" name="confirm_password" placeholder="Confirm Password">
			</td>
		  </tr>
		    <tr>
		    <td colspan="2">
				<input type="hidden" name="id" value="<?php echo $id  ?>">
				<input type="submit" name="submit" value="Change Password" class="btn-secondary">
			</td>
		  </tr>
		</table>
	  </form>
	</div>
</div>


<?php 
	
	if(isset($_POST['submit'])){
		//echo "Clicked";
		
		//1.get the data from form
		$id=$_POST['id'];
		$current_password=md5($_POST['current_password']);
		$new_password=md5($_POST['new_password']);
		$confirm_password=md5($_POST['confirm_password']);
		
		//2. check whether the user with current id and current password exists or not
		
		$sql="SELECT*FROM tbl_admin id=$id AND password='$current_password'";
		
		//excute the query
		$res=mysqli_query($conn,$sql);
		
		if($res==true){
			
			
			//check whether data is avalible or not
			$count=mysqli_num_rows($res);
			
			if($count==1){
				//user exists and password can be changed
				//echo "User found";
				if($new_password==$confirm_password){
					//update the password
			        //echo "Password is matched";	
					$sql2= "UPDATE tbl_admin SET
					password='$new_password'
					WHERE id=$id
					
					
					";
					//excute the query
					$res2=mysqli_query($conn,$sql2);
					if($res2==true){
						//display success message
						//redirect to manage admin page with error message
					$_SESSION['change-pwd']="<div class='success'>Password is correct.</div>";
					//redirect message
					header('location'.SITEURL.'admin/manage-admin.php');
					}else{
						//display error message
						$_SESSION['change-pwd']="<div class='error'>Error.</div>";
					//redirect message
					header('location'.SITEURL.'admin/manage-admin.php');
					}
					
			
				}
				else{
					//redirect to manage admin page with error message
					$_SESSION['pwd-not-match']="<div class='error'>Password is not found.</div>";
					//redirect message
					header('location'.SITEURL.'admin/manage-admin.php');
				}	
			}else{
				//user does not exists set message and redirect
				$_SESSION['user-not-found'] = "<div class='error'>User not found.</div>";
				//redirect user
				header('location:'.SITEURL.'admin/manage-admin.php');
			}
		}
		
		//3.check whether the new password and confirm password match  or not
		
		//4. change the 
		
		
	}
	
	
	
	
	?>
















<?php include('partials/footer.php') ?>