<?php
//include constant.php SITEURL

include('../config/constant.php');


//session destroy
session_destroy();


//2.redirect to login page
header('location'.SITEURL.'admin/login.php');
?>