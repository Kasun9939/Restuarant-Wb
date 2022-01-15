<?php  include('partials/menu.php'); ?>


<div class="main-content">
<div class="wrapper">
	<h1>Add Category</h1>
	
	<br><br>
	
	<?php
	
	if(isset($_SESSION['add']))
	{
		echo $_SESSION['add'];
		unset($_SESSION['add']);
	}
	
	?>
	
	
	<br><br>
	
	
	
	
	
	
	
	
	
	
	<!--------------add category----------------->
	<form action="" method="POST">
	<table class="tbl-30">
		<tr>
		<td>Title:</td>
		<td>
			
			<input type="text" name="title" placeholder="Category Title">
	    </td>
	    </tr>
		
		<tr>
		<td>Featured:</td>
		<td>
		<input type="radio" name="featured" value="Yes">Yes
			<input type="radio" name="featured" value="No">No
	    </td>
	    </tr>
		<tr>
		<td>Active:</td>
			<td>
			<input type="radio" name="active" value="Yes">Yes
			<input type="radio" name="active" value="No">No
			
			</td>
		</tr>
		
		<tr>
		<td colspan="2">
			
			
			<input type="submit" name="submit" value="Add Category" class="btn-secondary">
	    </td>
		</tr>
		</table>
	</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--------------add category end----------------->
	
	<?php         
	//check whether the submit button is click or not
	if(isset($_POST['submit']))
	{
		
		
		//echo "Clicked";
		//1. get the value 
		$title=$_POST['title'];
		
		//radio input type, we need to check whether the button is selected or not
		
		if(isset($_POST['featured']))
		{
			//get the values from form
			$featured=$_POST['featured'];
		}
		
		else
		{
			// default value
			$featured="No";
			
		}
		
		if(isset($_POST['active']))
		{
			$active=$_POST['active'];
		}
		
		else
		{
			$active="No";
		}
		
		//2. create sql query insert category into database
		$sql="INSERT INTO tbl_category SET
		      title='$title',
			  featured='$featured',
			  active='$active'
		
		";
		
		//3.execute the query and save database
		$res=mysqli_query($conn,$sql);
		
		
		//4. check whether  the query excuted or not data added or not
		
		if($res==TRUE)
		{
			//category added
			$_SESSION['add']="Category Added Successfully";
			//redirect manage category page
			header('location'.SITEURL.'admin/manage-category.php');
			
			
			
			
		}else
		{
			//failed to added
			$_SESSION['add']="Failed to Add Category";
			//redirect manage category page
			header('location'.SITEURL.'admin/add-category.php');
		}
			
		
		
	}
?>
</div>
</div>








<?php  include('partials/footer.php'); ?>