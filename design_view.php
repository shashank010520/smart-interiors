<?php include('includes/header.php')?>
<?php include('includes/topbar.php')?>
 <?php include('includes/connection.php')?>
 <section class="wt-section bg-light" id="about">
    <div class="container">
        <form action="" method="post">

        <?php 
            if(isset($_GET['code']))    
            {
                $code=$_GET['code'];                 
                $email=$_SESSION['email'];
                $str1="select * from cart_table where code='$code' and email_id='$email'";
                $res1=mysqli_query($con,$str1);   
                if(mysqli_num_rows($res1)>0)
                {
                    $temp=true;
                }else{
                    $temp=false;
                }
                $str="select * from design_table where code='$code'";
                $res=mysqli_query($con,$str);
                $row=mysqli_fetch_assoc($res); 
                if(isset($_POST['remove']))    
                {                                               
                    $email=$_SESSION['email'];
                    $code=$_GET['code'];
                    $str="delete from cart_table where code='$code' and email_id='$email'";      
                    if(mysqli_query($con,$str))
                        {   
                            $temp=false;
                        echo "<script>alert('".$code." removed successfully from cart')</script>";
                    }
                    
                                                                                     
  }                              
                if(isset($_POST['add']))    
                {                                                 
                    $email=$_SESSION['email'];
                    $code=$_GET['code'];
                    $str="select * from cart_table where code='$code' and email_id='$email'";
                    $res=mysqli_query($con,$str);
                    if(mysqli_num_rows($res)>0)
                    {   $temp=true;
                        echo "<script>alert('".$code." already added to cart')</script>";
                    }else{                        
                            $str="insert into cart_table values('$code','$email')";
                            if(mysqli_query($con,$str))
                            {
                                $temp=true;
                                echo "<script>alert('".$code." added to cart successfully')</script>";
                            }
                        }                    
                    }                                                                  
            }            
            
        ?>                  
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0">            
          </div>
		</div>
        <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
		    <div class="col-md-5">
                <img src="admin/uploads/<?php echo $row['image'];?>" width="90%" class="rounded-md" alt="">
            </div>
            <div class="col-md-7"> 
                <p class="text-muted"><?php echo $row['code'];?></p>
                <h3 class="mb-4 ">Rs.<?php echo $row['price'];?></h3>
                <p class="text-muted">Type: <?php echo $row['type'];?></p>                
                <p class="text-muted">Desc: <?php echo $row['description'];?></p>
                <?php 
                        if($temp==true) 
                        {                                          
                    ?>
                    <a href="design_view.php?code=<?php echo $row['code'];?>">
                        <button type="submit"   class="btn btn-primary waves-effect waves-dark readMore" name="remove">Remove from Cart</button>  
                    </a>  
                    <?php }else{?> 
                        <a href="design_view.php?code=<?php echo $row['code'];?>">
                            <button type="submit"   class="btn btn-primary waves-effect waves-dark readMore" name="add">Add to Cart</button>  
                        </a>
                        <?php }?>
                        </section>
    <section class="wt-section" id="portfolio"> 
    <footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong><i class="fa fa-map-marker"></i> Smart Interiors</strong>
					<br>Bangalore,India</address>
					<p>
						<i class="fa fa-phone"></i> +91 8197907034<br>
                        <i class="fa fa-phone"></i> +91 8867578865<br>
						<i class="fa fa-envelope"></i> Smartinteriors@gmail.com
					</p>
				</div>
            </div>
            <?php include('includes/footer.php')?>
            </section>
            </div>            
        </div>                                                                                                                                                                                       
        </form>                                        
        </div>                    
    </section> 