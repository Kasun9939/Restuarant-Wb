<?php include('partials/menu.php'); ?>


<div class="main-content">
   <div class="wrapper">
	<h1>Update Admin</h1>
	   
	   
	   <br/><br/>
	   <?php
	   
	   //get the id or selected admin
	   $id=$_GET['id'];
	   
	   
	   //create sql query to get the details
	   
	   $sql="SELECT*FROM tbl_admin WHERE id=$id";
	   
	   //excute the query
	   $res=mysqli_query($conn,$sql);
	   
	   //check whether the query is excuted or not
	   if($res==true){
		   //check whether the data is available or not
		   $count = mysqli_num_rows($res);
		   //check whether the we have data or not
		   if($count==1)
		   {
			   //get the details
			   //echo "Admin Available";
			   $row=mysqli_fetch_assoc($res);
			   
			   $full_name=$row['full_name'];
			   $username=$row['username'];
		   }
		   else
		   {
			   //redirect to manage admin page
			   header('location:'.SITEURL.'admin/manage-admin.php');
		   }
	   }
	   
	   
	   ?>
	   
	   
	   <form action="" method="POST">
	   <table>
		   <tr>
		     <td>Full Name:</td>
		     <td>
			   <input type="text" name="full_name" value="<?php  echo $full_name;  ?>">
			   </td>
		   </tr>
		      <tr>
		        <td>Username:</td>
		        <td>
				<input type="text" name="username" value="<?php echo $username; ?>">  
			    </td>
	          </tr>
		   
		   <tr>
		   <td colspan="2">
			     <input type="hidden" name="id" value="<?php echo $id ?>">
			     <input type="submit" name="submit" value="update admin" class="btn-secondary">
			   </td>
		   
		   
		   </tr>
		   
		   
		   
		   
	   </table>
	   </form>
	   
	   
	   
	   
	   
	   
	   
	   
   </div>
</div>

<?php



//check whether the submit button is clicked or not
if(isset($_POST['submit']))
{
	//echo "Button Clicked";
	//get all the values from form to update
   $id=$_POST['id'];
   $full_name=$_POST['full_name'];
   $username=$_POST['username'];
	//create sql query
	$sql="UPDATE tbl_admin SET
	full_name='$full_name',
	username='$username'
	WHERE id='$id'
	
	";
	
	//excute thequery
	$res=mysqli_query($conn,$sql);
	
	//check whether the query excuted successfully or not
	if($res==true){
		//query excute and admin data
		$_SESSION['update']="<div class='success'>Admin Updated Successfully</div>";
		//redirect to manage page
		header('location:'.SITEURL.'admin/manage-admin.php');
	}else{
		//fail to update admin
		//query excute and admin data
		$_SESSION['update']="<div class='error'>Fail to delete Admin</div>";
		//redirect to manage page
		header('location:'.SITEURL.'admin/manage-admin.php');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
}
?>

<?php include('partials/footer.php'); ?>