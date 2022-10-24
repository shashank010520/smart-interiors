<?php include('includes/header.php');?>
<?php include('includes/topbar.php');?>
	<section class="wt-section" id="portfolio"> 
 <div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="order_details_table">
						<h2  align="center">Your Orders</h2><hr class="text-dark">
						<div class="order_box">
                            <div class="row">
                                <form action="my_orders.php?<?php echo $id;?>" method="post"> 
                                <table class="table table-data2">
                                            <thead>
                                                <tr>                                                    
                                                    <th>Order ID</th>
                                                    <th>Design Code</th>                                                    
                                                    <th>Date</th>
                                                    <th>Action</th>                                                                                                                                                            
                                                </tr>
                                            </thead>
                                            <tbody>                                                                           
                                            <?php 
                                                require "includes/connection.php";
                                                $email=$_SESSION['email'];
                                                $str="select * from order_table where email_id='$email'";
                                                $res=mysqli_query($con,$str);
                                                if(mysqli_num_rows($res)>0)
                                                {
                                                    for($i=0;$i<mysqli_num_rows($res);$i++){
                                                        $row1=mysqli_fetch_array($res);                                                        
                                                        echo "<tr class='tr-shadow'>                                                    
                                                        <td>".$row1['order_id']."</td>
                                                        <td>".$row1['code']."</td>                                                    
                                                        <td>".$row1['date']."</td> 
                                                        <td><a href='myorders.php?orderid=".$row1["order_id"]."'><i class='fa fa-eye text-warning' data-toggle='tooltip' data-placement='top' title='View' style='font-size:25px'></i></a>                            
                                                        </td>
                                                        </tr>
                                                        ";
                                                     }}else{
                                                echo "No Orders";
                                            } ?>  
                                            </tbody>
                                </table>                                                                                              
                                </form>                            				                                                
			                </div>
                        </div>
                    </div>
                </div>
                <?php                                      
                if(isset($_GET['orderid'])){
                    $orderid=$_GET['orderid'];
                    $str="select * from order_table where order_id='$orderid'";                                    
                    $res=mysqli_query($con,$str);
                    $row1=mysqli_fetch_assoc($res);
            ?>
            <div class="row">
            <div class="col-md-6">
                    <h2  align="center">Order Details</h2><hr>
                    <div class="about-text">
                    <ul class="withArrow">
                    	<li><span class="fa fa-angle-right"></span>Order ID     :<?php echo  $row1['order_id']; ?></li>
                        <br>
							<li><span class="fa fa-angle-right"></span>Design Code :<?php echo  $row1['code']; ?></li>
                            <br>
							<li><span class="fa fa-angle-right"></span>Email ID     :<?php echo  $row1['email_id']; ?></li>
                            <br>
							<li><span class="fa fa-angle-right"></span>Price        :<?php echo  "Rs.".$row1['price']; ?></li>
                            <br>
                            <li><span class="fa fa-angle-right"></span>Order Date   :<?php echo  $row1['date']; ?></li>
                            <br>
                            <li><span class="fa fa-angle-right"></span>Status   :<?php echo  $row1['status']; ?></li>
						</ul>                                                      
                    </div>
                </div>  
                </div>
                </div>
                <?php } ?>                  
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
	<!--================End Order Details Area =================-->
	
