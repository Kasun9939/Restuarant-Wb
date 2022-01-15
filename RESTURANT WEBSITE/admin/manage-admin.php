<?php include('partials/menu.php'); ?>
		
		<!---------main content section start--------->
		<div class="main-content">
		<div class="wrapper"><h1>Manage Admin</h1>
			<br/><br/>
			
			
			<?php
			if(isset($_SESSION['add']))
			{
				echo $_SESSION['add'];//display session message
				unset($_SESSION['add']);//removing session message
			}
			
			if(isset($_SESSION['delete']))
			{
			
	            echo $_SESSION['delete'];
				unset($_SESSION['delete']);
			}
			if(isset($_SESSION['update']))
			{
				echo $_SESSION['update'];
				unset($_SESSION['update']);
			}
			if(isset($_SESSION['user-not-found']))
			{
				echo $_SESSION['user-not-found'];
				unset($_SESSION['user-not-found']);
			}
			if(isset($_SESSION['pwd-not-match']))
			{
				echo $_SESSION['pwd-not-match'];
				unset($_SESSION['pwd-not-match']);
			}
			if(isset($_SESSION['change-pwd'])){
				echo $_SESSION['change-pwd'];
				unset($_SESSION['change-pwd']);
			}
			
			
			?>
			<br/><br/><br/>
			
		
			
			
			<!-----------manage admin button---------->
			<a href="add-admin.php" class="btn-primary">Add Admin</a>
			
			<br/><br/><br/>
			
			<table class="tbl-full">
			<tr>
				<th>S.N</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>Action</th>
		    </tr>
				
				<?php
				
				//query to get all admin
				$sql = "SELECT * FROM tbl_admin";
				//execute the query
				$res = mysqli_query($conn,$sql);
				
				//check whether the query excute of not
				if($res==TRUE){
					//COUNT ROW TO CHECK
					$count=mysqli_num_rows($res);//function to get all  the row in database
					
					
					
					$sn=1;//create a varible assign vaue
					
					//check the num of rows
					if($count>0)
					{
						//we have data in database
						while($rows=mysqli_fetch_assoc($res))
						{
							//using while loop get all data from database.
							//and while loop will run as long as we have in database.
							//get individual data
							$id=$rows['id'];
							$full_name=$rows['full_name'];
							$username=$rows['username'];
							
							
							//dislay value in our table
							?>
				<tr>
				<td><?php echo $sn++;  ?></td>
				<td><?php  echo $full_name;  ?></td>
				<td><?php  echo $username;    ?></td>
				<td>
					
					<a href="<?php echo SITEURL;  ?>admin/update-password.php?id=<?php echo $id;  ?>" class="btn-primary">Change Password</a>
					
					
					
					<a href="<?php echo SITEURL;  ?>admin/update-admin.php?id=<?php echo $id;  ?>" class="btn-secondary">Upadate Admin</a>
					<a href="<?php  echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
				</td>	
			    </tr>
				
				<?php
							
							}
					        }else{
						//we do not have data in database
					             }
				}
				
				
				?>
			
				</table>
		    </div>
		</div>
		<!---------main content section end--------->
		
		<?php include('partials/footer.php'); ?>