<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
	 <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!--------------navbar section---------------->
	<section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="contactUs.php">Contact</a>
                    </li>
					 <li>
                        <a href="AboutUs.php">About Us</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
	
	
	
	
	
	
	

 <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">
                <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Join us to accept food order</p>
  </div>
  <div class="row">
    
                  

                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname " required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname " required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email</label>
                                        <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email " required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message </label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me " rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                              
                            </div>
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Contact Added')</script>";
                }
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

	<!-------------SOCIAL MEDIA SECTION---------------->
	<section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">W.K.K.B.WEERASINGHE</a></p>
        </div>
    </section>
	
	
	
	
	
	
	
</body>
</html>

