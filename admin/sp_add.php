


<?php include('includes/header.php');?>
  <div class="wrapper ">
  <?php include('includes/navbar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php 
    $spid="SP".rand(100,999);
    ?>
     <?php include('includes/top.php');?>      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">ADD Service Provider</h4>                  
                </div>
                <div class="card-body">
                <form action="sp_add.php" method="post" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">SP ID</label>
                          <input type="text" class="form-control" name="spid" value="<?php echo $spid;?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>                                        
                    </div>   
                    <div class="row">                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number</label>
                          <input type="text" class="form-control" name="mobile">
                        </div>
                      </div> 
                      <div class="col-md-6"> 
                      <div class="form-group">                       
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="addr"> 
                      </div>                       
                      </div>                                        
                    </div>   
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Service</label>
                          <select class="form-control" aria-label="Default select example" name="service">
                            <option selected>Select</option>
                            <option value="Painter">Painter</option>
                            <option value="Plumber">Plumber</option>
                            <option value="Carpenter">Carpenter</option>
                            <option value="Designer">Designer</option>
                        </select>
                        </div>
                      </div>                                                        
                    </div>                         
                                      
                    <button type="submit" name="save" class="btn btn-primary pull-right">Add</button>
                    <div class="clearfix"></div>
                                    <?php
                // connect to the database
                $conn = mysqli_connect('localhost', 'root', '', 'furniture');

                // Uploads files
                if (isset($_POST['save'])) {   
                
                $name=$_POST['name'];
                $mobile=$_POST['mobile'];            
                $addr=$_POST['addr'];
                $service=$_POST['service'];                
                if($name=="" or $mobile=="" or $addr=="" or $service==""){
                    echo '<script> alert("all the fields should be filled") </script>';
                }else{
                    $str="insert into serviceprovider values('$spid','$name','$service',$mobile,'$addr')";
                        if (mysqli_query($conn, $str)) {
                        echo "<script> location.href='sp.php'; </script>";
                        }
                       else {
                        echo "Failed to add employee.";
                        }
                }
            }   
        
    ?>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>  
     <?php include('includes/footer.php');?>