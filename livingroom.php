<?php include('includes/header.php')?>
<?php include('includes/topbar.php')?>
<?php include('includes/connection.php')?>
<section id="inner-headline">
	<div class="container">
		
     <?php
	 	if(isset($_GET['type'])){
			$type=$_GET['type'];
			$str="select * from design_table where type='$type'";
		 }else{
			 $type="Living Room Designs";
			$str="select * from design_table";
		 }	
	 ?>
     <div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Livingroom Decors</h2>
			</div>
		</div>
	</div>
	</section>
	<section class="dishes">
		<div class="container">
	 	<div class="row">
			<div class="col-md-12">
				<br/>
			</div>
		</div>
			 <?php			 				 
				 $res=mysqli_query($con,$str);
				 for($i=0;$i<mysqli_num_rows($res);$i++){
					$row1=mysqli_fetch_assoc($res);
			 ?>
			 	<div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="admin/uploads/<?php echo $row1['image'];?>" alt="">  
                        </div>
                        <div class="card-content">
						<br/>
                            <p>
							<a href="admin/uploads/<?php echo $row1['image'];?>" class="fancylight popup-btn info btn btn-secondary" data-fancybox-group="light"><i>Preview</i></a>
							<a href="design_view.php?code=<?php echo $row1['code'];?>" class="btn btn-warning" ><i>Details</i></a>	
                            </p>
                        </div>
                    </div>        
            </div>
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
			

         	