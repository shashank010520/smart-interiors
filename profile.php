<?php
 include('includes/header.php');?>
<?php include('includes/topbar.php');?>

<?php 
   require "connection.php";
    $email=$_SESSION['email'];
    $str="select * from user_table where Email='$email'";
    $res=mysqli_query($con,$str);
    $row=mysqli_fetch_assoc($res);
?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Edit Profile</h2>
			</div>
		</div>
	</div>
	</section>
    <div class="row">
	<div class="col-md-9 mx-auto">
    <form action="profile.php" method="post"> 
		 <div class="input-field"> 
         <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $row['Name'];?>"/>
                </div> 	
         </div>
                <div class="input-field"> 
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="phone_no" name="mobile" value="<?php echo $row['Mobile_Number'];?>"/>
                </div>
			 </div> 	
             <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row['Email'];?>" readonly/>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Address" name="addr" value="<?php echo $row['Adress'];?>"/>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Type of property" name="prop" value="<?php echo $row['property'];?>"/>
                </div>
              </div>
              <?php
            if(isset($_POST['refresh'])){
                echo "<script>location.href='profile.php';</script>";                                                
            }
                                if(isset($_POST['update']))
                                {
                                    require "includes/connection.php";
                                    $name = $_POST['name']; 
                                    $mobile = $_POST['mobile']; 
                                    $email = $_POST['email']; 
                                    $addr = $_POST['addr']; 
                                    $prop = $_POST['prop'];                                                                         
                                    
                                    if($name=="" or $mobile=="" or $email=="" or $addr=="" or $prop==""){
                                        echo "<script>alert('All the fields should be filled')</script>";
                                    }else{                                        
                                            $str = "Update user_table set Name='$name',Mobile_Number=$mobile,Adress='$addr',property='$prop' where Email='$email'";
                                            if(mysqli_query($con,$str)){                                                                                                                          
                                                echo "<script>alert('Account Updated successfully');</script>";                                                
                                            } else{
                                                echo "<script>alert('Error in Updating an account');</script>";
                                            }                                                                        
                                    }
                                }
                                 
                                ?>
	    <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right" name="update">Update</button>
	    <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right" name="refresh">Refresh</button>
          </form>
								</div>
								
							</div>
	</div>