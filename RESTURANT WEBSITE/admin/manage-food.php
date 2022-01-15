<?php include('partials/menu.php');  ?>


<div class="main-content">
<div class="wrapper"><h1>Manage Food</h1>
	<br/><br/>
	
	<?php
	
	if(isset($_SESSION['add']))
	{
		echo $_SESSION['add'];
		unset($_SESSION['add']);
	}
	
	
	
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	
	<!---------------add category button--------------->
	
		<a href="<?php  echo SITEURL;  ?>admin/add-food.php" class="btn-primary">Add Food</a>
	<br/><br/><br/>
			
			<table class="tbl-full">
			<tr>
				<th>S.N</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>Action</th>
		    </tr>
				<tr>
				<td>1.</td>
				<td>Kasun Buddhila</td>
				<td>kasunbuddhila</td>
				<td>
					<a href="#" class="btn-secondary">Upadate Admin</a>
					<a href="#" class="btn-danger">Delete Admin</a>
				</td>	
			    </tr>
					<tr>
				<td>2.</td>
				<td>Kasun Buddhila</td>
				<td>kasunbuddhila</td>
				<td>
					<a href="#" class="btn-secondary">Upadate Admin</a>
					<a href="#" class="btn-danger">Delete Admin</a>
				</td>	
			    </tr>
					<tr>
				<td>3.</td>
				<td>Kasun Buddhila</td>
				<td>kasunbuddhila</td>
				<td>
					<a href="#" class="btn-secondary">Upadate Admin</a>
					<a href="#" class="btn-danger">Delete Admin</a>
				</td>	
			    </tr>
				</table>
	
	
	
	
	
	
	</div>


</div>







<?php include('partials/footer.php');  ?>