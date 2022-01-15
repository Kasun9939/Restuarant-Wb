<?php  





       //include constant.php fie here
       include('../config/constant.php');




      //1.get the ID of admin to be deleted
        $id = $_GET['id'];


       //2. create sql query
   $sql = "DELETE FROM tbl_admin WHERE id=$id";

   //execute query

   $res = mysqli_query($conn,$sql);

    //check expected successfully
  if($res==true){
	  //successfully added
	  //echo "Admin deleted";
	  //create session varible to display message
	  $_SESSION['delete'] ="<div class='success'>Admin Deleted Successfully.</div>";
	  //redirect to message admin page
	  header('location:'.SITEURL.'admin/manage-admin.php');
	  
	  
	  
  }else{
	  //failed to delete admin
	  //echo "Failed to Delete Admin";
	   $_SESSION['delete'] ="<div class='error'>Fail to delete Admin try again later</div>";
	   header('location:'.SITEURL.'admin/manage-admin.php');
  }



     //3.redirect to manage admin page with message(success/error)

























?>