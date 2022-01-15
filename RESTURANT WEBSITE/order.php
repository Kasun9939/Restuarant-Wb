 <?php include('partials-front/menu.php'); ?>






















    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="food-menu-img">
                        <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
                    
    
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                        <p class="food-price">$2.3</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Kasun Buddhila" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. kasunbuddhila@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>
			
			
			
			<?php       
			
			if(isset($_POST['submit']))
			{
				$order_date=date("Y-m-d h:i:sa");
				$status="ordered";
				$customer_name="full-name";
				$customer_contact="contact";
				$customer_email="email";
				$customer_address="address";
				
				
				
				
				//save data database
				$sql2="insert into tbl_order set order_date='$order_date', status='$status', customer_name='$customer_name', customer_contact='$customer_contact', customer_email='$customer_email', customer_address='$customer_address'";
				
				
				
				//echo $sql2; die();
				
				
				//execute query
				$res2=mysqli_query($conn,$sql2);
				
				if($res2==true)
				{
					$_SESSION['order']="query Successfully";
					header('location:'.SITEURL);
				}
				else
				{
					$_SESSION['order']="query not Successfully";
					header('location:'.SITEURL);
				}
				
				
				
				
				
				
				
				
				
				
				
			}
			
			
			
			
			
			
			?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>