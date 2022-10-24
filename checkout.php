<?php include('includes/header.php');?>
<?php include('includes/topbar.php');?>
   
    <!-- End Banner Area -->       
    <!--================Checkout Area =================-->
    <section class="wt-section" id="portfolio"> 
 <div class="container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="checkout.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- DATA TABLE -->
                                    <h3 class="title-5 m-b-35 text-center">Product Details</h3>                                   
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>                                                    
                                                    <th>Design Code</th>
                                                    <th>Type</th>                                                    
                                                    <th>Price</th>                                                                                                                                                            
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php require "includes/connection.php";                                                                                                                          
                                                $email=$_SESSION['email'];
                                                $str="select * from cart_table where email_id='$email'";                                                
                                                $res=mysqli_query($con,$str);                                                                             
                                                $ordid=$_SESSION['ORDER_ID']="ORDS" . rand(100,999);
                                                $n=mysqli_num_rows($res);
                                                $tot=0;
                                                $prname="";
                                                if($n > 0)
                                                { 
                                                    for($i=0;$i<$n;$i++)
                                                    {
                                                        $row2=mysqli_fetch_assoc($res);
                                                        $code=$row2['code'];
                                                        $prname=$prname." ".$code;                                                                                                                
                                                        $str1="select * from design_table where code='$code'";
                                                        $res1=mysqli_query($con,$str1);
                                                        $row1=mysqli_fetch_assoc($res1);
                                                        $tot+=($row1['price']);
                                                    echo "<tr class='tr-shadow'>                                                    
                                                    <td>".$row1['code']."</td>
                                                    <td>".$row1['type']."</td>                                                    
                                                    <td>".$row1['price']."</td>                                                                                                                                                                                                       
                                                    </tr>
                                                    ";
                                                }                                                                                                      
                                                    }                                                    
                                                if(isset($_POST['order'])){
                                                    $addr=$_POST['addr'];
                                                    $dat=date('Y-m-d');
                                                    $st="Pending";
                                                    $str="insert into order_table values('$ordid','$email','$prname',$tot,'$dat','$st')";
                                                    if(mysqli_query($con,$str))
                                                    {
                                                        echo "<script>alert('Your order is successful')</script>";
                                                        echo "<script> location.href='designs.php'; </script>";
                                                    }
                                                }
                                            ?>                                            
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="row form-group text-center col-md-6">
                                                    <div class="col col-md-6">
                                                        <label for="id-input" class=" form-control-label">Total Designs</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" id="id-input" name="name"  class="form-control" value="<?php echo $n;?>" readonly/>
                                                    </div>                                                
                                        </div>  
                                        <div class="row form-group text-center col-md-6">
                                                    <div class="col col-md-5">
                                                        <label for="id-input" class=" form-control-label">Total Price</label>
                                                    </div>
                                                    <div class="col-12 col-md-7">
                                                        <input type="text" id="id-input" name="name"  class="form-control" value="<?php echo $tot;?>" readonly/>
                                                    </div>                                                
                                        </div>
                                    </div>                                      
                                    <hr>
                                    <!-- END DATA TABLE -->
                                </div>
                         
                                <?php 
                                    require "connection.php";
                                        $email=$_SESSION['email'];
                                        $str="select * from user_table where Email='$email'";
                                        $res=mysqli_query($con,$str);
                                        $row=mysqli_fetch_assoc($res);
                                    ?>
                                <div class="col-md-6">
                                    <!-- DATA TABLE -->
                                    <h3 class="title-5 m-b-35 text-center">Billing Details</h3>                                   
                                    <hr>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="name" class=" form-control-label">Name</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" id="name" name="name"  class="form-control" value="<?php echo $row['Name']?>" readonly>
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email" class=" form-control-label">Email-Id</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" id="email" name="email"  class="form-control" value="<?php echo $row['Email']?>" readonly>
                                        </div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="mobile" class=" form-control-label">Mobile Number</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" id="mobile" name="mobile"  class="form-control" value="<?php echo $row['Mobile_Number']?>" readonly>
                                        </div>
                                    </div>  
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="addr" class=" form-control-label">Address</label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <textarea name="addr" id="addr" class="form-control" cols="50" rows="2"><?php echo $row['Adress']?></textarea>
                                        </div>
                                    </div>  
                                    <hr>  
                                    <!-- END DATA TABLE -->
                                </div>                                
                            </div>
                            <div class="text-center">
                                <button type="submit" name="order" class="btn btn-warning text-center">Order</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>  
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
    <!--================End Checkout Area =================-->