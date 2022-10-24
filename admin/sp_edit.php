


<?php include('includes/header.php');?>
  <div class="wrapper ">
  <?php include('includes/navbar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php
      $conn = mysqli_connect('localhost', 'root', '', 'furniture');
      if(isset($_GET['id'])){
    $id=$_GET['id'];
    $str="select * from serviceprovider where sid='$id'";
    $res=mysqli_query($conn,$str);
    $row=mysqli_fetch_assoc($res);
      }
    ?>
     <?php include('includes/top.php');?>      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Service Provider</h4>                  
                </div>
                <div class="card-body">
                <form action="sp_edit.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">SP ID</label>
                          <input type="text" class="form-control" name="spid" value="<?php echo $id;?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                        </div>
                      </div>                                        
                    </div>   
                    <div class="row">                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number</label>
                          <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>">
                        </div>
                      </div> 
                      <div class="col-md-6"> 
                      <div class="form-group">                       
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="addr" value="<?php echo $row['address'];?>"> 
                      </div>                       
                      </div>                                        
                    </div>   
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Service</label>
                          <select class="form-control" aria-label="Default select example" name="service" value="<?php echo $row['service'];?>">                            
                          <option value="<?php echo $row['service'];?>" selected><?php echo $row['service'];?></option>
                            <option value="Painter">Painter</option>
                            <option value="Plumber">Plumber</option>
                            <option value="Carpenter">Carpenter</option>
                            <option value="Designer">Designer</option>
                        </select>
                        </div>
                      </div>                                                        
                    </div>                         
                                      
                    <button type="submit" name="save" class="btn btn-primary pull-right">Update</button>
                    <button type="submit" name="refresh" class="btn btn-primary pull-right">Refresh</button>
                    <div class="clearfix"></div>
                                    <?php
                // connect to the database
                $conn = mysqli_connect('localhost', 'root', '', 'furniture');
                if (isset($_POST['refresh'])) {
                  echo "<script>location.href='sp_edit.php?id=".$id."'</script>";

                }
                // Uploads files
                if (isset($_POST['save'])) {   
                
                $name=$_POST['name'];
                $mobile=$_POST['mobile'];            
                $addr=$_POST['addr'];
                $service=$_POST['service'];                
                if($name=="" or $mobile=="" or $addr=="" or $service==""){
                    echo '<scrip> alert("all the fields should be filled") </scrip>';
                }else{
                  $str="update serviceprovider set name='$name',mobile=$mobile,address='$addr',service='$service' where sid='$id'";
                        if (mysqli_query($conn, $str)) {
                        echo "<p class='text-center text-success'> Updated Successfully </p>";
                        }
                       else {
                        echo "Failed to update.";
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