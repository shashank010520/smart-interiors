<?php include('includes/header.php')?>
<?php include('includes/topbar.php')?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">All Designs</h2>
			</div>
		</div>
	</div>
	</section>
    <?php
	 	if(isset($_GET['type'])){
			$type=$_GET['type'];
			$str="select * from design_table where type='$type'";
		 }else{
			 $type="All Designs";
			$str="select * from design_table";
		 }	
	 ?>
     <div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="img/wall1.jpeg" alt="">  
                            <span class="card-title"><h3 class="aligncenter"><strong class="black-bold">Wall designs</span></h3></strong>
                        </div>
                        <div class="card-content">
                            <p>
                            The design of a wall can be an expression of your individuality. Choose your favorite colors, patterns and designs that match your personality and that positively affect your mood.
                            </p>
                            <p>
                                <a href="wall.php?type=Wall Designs" class="btn btn-primary waves-effect waves-dark readMore">Explore</a>
                            </p> 
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="img/outdoors.jpg" alt="">  
                             <span class="card-title"><h3 class="aligncenter"><strong class="black-bold">Outdoor Decors</span></h3></strong>
                        </div>
                        <div class="card-content">
                            <p>
                            Thoughtful landscape design is the key to creating an outdoor oasis, whether you have a tiny courtyard in an urban area or a sprawling estate in the country. To help you transform your own patios, yards, gardens, and more, we have outdoor designs that truly make the most of their natural surroundings.
                            </p>
                            <p>
                                 <a href="outdoor.php?type=Outdoor Designs"class="btn btn-primary waves-effect waves-dark readMore">Explore</a>
                            </p>
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="img/livingroom.png" alt="">  
                             <span class="card-title"><h3 class="aligncenter"><strong class="black-bold">Livingroom Decors</span></h3></strong>
                        </div>
                        <div class="card-content">
                            <p>
                            You spend a lot of time in your living room, so it not only needs to look great, but it also needs to be functional and comfortable. Mastering this trifecta can be a design challenge for sure, but we have the best living room designs to inspire your own decorating projects.
                            </p>
                            <p>
                               <a href="livingroom.php?type=Living Room Designs" class="btn btn-primary waves-effect waves-dark readMore">Explore</a>
                            </p>
                        </div>
                    </div>        
            </div> 
        </div>
        </div>
        <div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="img/kitchen1.jpg" alt="">  
                             <span class="card-title"><h3 class="aligncenter"><strong class="black-bold">Kitchen Designs</span></h3></strong>
                        </div>
                        <div class="card-content">
                            <p>
                            The kitchen is probably the most used room in your house, And aside from functioning appliances, a kitchen design you'll love for years to come is of utmost importance.Get your kitchen designed or renovated.
                            </p>
                            <p>
                                <a href="kitchen.php?type=Kitchen Designs" class="btn btn-primary waves-effect waves-dark readMore">Explore</a>
                            </p> 
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="img/room1.jpg" alt="">  
                             <span class="card-title"><h3 class="aligncenter"><strong class="black-bold">Room Designs</span></h3></strong>
                        </div>
                        <div class="card-content">
                            <p>
                            A simple way to ensure your bedroom design promotes a positive mood and feels like a place you can unwind in? Make sure it reflects your style; incorporates your favorite materials, colors, and patterns; shines the right light; and maximizes space.
                            </p>
                            <p>
                                 <a href="room.php?type=Room Decors" class="btn btn-primary waves-effect waves-dark readMore">Explore</a>
                            </p>
                        </div>
                    </div>        
            </div>
			   <div class="col-md-4 md-margin-bottom-40">
					<div class="card small">
                        <div class="card-image">
                             <img class="img-responsive" src="img/service6.jpg" alt="">  
                             <span class="card-title"><h3 class="aligncenter"><strong class="black-bold">Office Decors</span></h3></strong>
                        </div>
                        <div class="card-content">
                            <p>
                            Corporate identity is expressed through workspace design. Draw inspiration from the latest design trends and evolving ideas across the realm of office design. Attract the most eager millennials and accommodate the most seasoned experts into your team. Work it
                            </p>
                            <p>
                               <a href="office.php?type=Office Designs" class="btn btn-primary waves-effect waves-dark readMore">Explore</a>
                            </p>
                        </div>
                    </div>        
            </div> 
        </div>
		</div>
		</section>
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