


<?php include('includes/header.php');?>
  <div class="wrapper ">
  <?php include('includes/navbar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php
      $conn = mysqli_connect('localhost', 'root', '', 'furniture');
      if(isset($_GET['id'])){
    $code=$_GET['id'];
    $str="select * from design_table where code='$code'";
    $res=mysqli_query($conn,$str);
    $row=mysqli_fetch_assoc($res);
      }
    ?>
     <?php include('includes/top.php');?>      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Design</h4>                  
                </div>
                <div class="card-body">
                <form action="design_edit.php?id=<?php echo $code;?>" method="post" enctype="multipart/form-data" >
                <div class="row">
                <div class="col-md-4">
                  <img src="uploads/<?php echo $row['image'];?>" alt="" width="300rem">
                </div>
                <div class="col-md-8">
                <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Design Code</label>
                          <input type="text" class="form-control" name="code" value="<?php echo $row['code'];?>" readonly>
                        </div>
                      </div>                                                             
                    </div> 
                    <div class="row">   
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="text" class="form-control" name="price" value="<?php echo $row['price'];?>">
                        </div>
                      </div>                   
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Type</label>
                          <input type="text" class="form-control" name="type" value="<?php echo $row['type'];?>" readonly>
                        </div>
                      </div>                       
                    </div>   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control" name="desc" value="<?php echo $row['description'];?>">
                        </div>
                      </div>                      
                    </div>                       
                                     
                     <div class="form-group text-center">
                     <button type="submit" name="save" class="btn btn-primary pull-center">update</button>
                     <button type="submit" name="refresh" class="btn btn-primary pull-center">Refresh</button>
                     </div> 
                     <?php
                     require "includes/connection.php";
                     if(isset($_POST['refresh'])){
                      echo "<script >Location.href='design_edit.php?id=".$code."'</script>";
                     }
                        if (isset($_POST['save'])) { 
                          $code=$_POST['code'];  
                          $price=$_POST['price'];
                          $desc=$_POST['desc'];
                            // name of the uploaded file
                            $str="update design_table set price=$price,description='$desc' where code='$code'";
                          if(mysqli_query($con, $str))
                          {                            
                              echo "<p class='text-center text-success'>Updated Successfully</p>";
                          }else{
                            echo "<p class='text-center text-danger'>Error in updating</p>";
                          }
                                     
                              }
                    ?>                                                        
                </div>                
                  
                </div>                                                       
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>  
     <?php include('includes/footer.php');?>