<?php include('includes/header.php');?>
<?php include('includes/topbar.php');?>
<?php include('includes/connection.php');?> 

<section class="wt-section" id="portfolio"> 
 <div class="container">	 
        <div class="row justify-content-md-center text-center pb-lg-5">
            <div class="col-md-12">
                <h2 class="h1">Your Wishlist</h2>
                <p>Customize your home according to your needs...</p>
            </div>
        </div>         
         <div class="row">
         <?php       
            $email=$_SESSION['email'];
            $str="select * from cart_table where email_id='$email'";
            $res=mysqli_query($con,$str);              
            $n=mysqli_num_rows($res);
                        if(mysqli_num_rows($res)>0)
                        {                
                    echo '<div class="text-center col-md-12"><a href="checkout.php">
                          <button type="button" class="btn btn-primary waves-effect waves-dark readMore">Buy All</button>
                          </a></div><br>';                                                                     
                          for($i=0;$i<mysqli_num_rows($res);$i++)
                          {
                            $row1=mysqli_fetch_assoc($res);
                          $code=$row1['code'];
                          $str1="select * from design_table where code='$code'";
                          $res1=mysqli_query($con,$str1);
                          $row=mysqli_fetch_assoc($res1);
                                            
                      ?><br>
                       <div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="admin/uploads/<?php echo $row['image'];?>" alt=""> 
                        </div>
                            <p>
                                <a href="design_view.php?code=<?php echo $row1['code'];?>" class="btn btn-primary waves-effect waves-dark readMore">Details</a>
                            </p> 
                        </div>
                    </div>        
            </div>	                              
                            <?php }}else{
                            ?>
                            <div class="col-md-7 col-lg-12 ">                                                                                         
                                    <h4 style="color: black;">No Designs in the Cart</h4> <br>   
                                    <a href="designs.php">
                                      <button type="button" class="btn btn-warning">View Designs</button>
                                    </a>                                            
                            </div> 
                            <?php }?>    
         </div>
      </div>
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