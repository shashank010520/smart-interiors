
<?php include('includes/header.php');?>
  <div class="wrapper ">
  <?php include('includes/navbar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
     <?php include('includes/top.php');
     
     require "includes/connection.php";
     ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          <?php
                    $str="select * from admin_table";
                    $res=mysqli_query($con,$str);
                    $ad=mysqli_num_rows($res);
                    $str="select * from user_table";
                    $res=mysqli_query($con,$str);
                    $us=mysqli_num_rows($res);
                    $str="select * from employee_table";
                    $res=mysqli_query($con,$str);
                    $et=mysqli_num_rows($res);
                    $str="select * from serviceprovider";
                    $res=mysqli_query($con,$str);
                    $sp=mysqli_num_rows($res); 
                    ?>                   
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <p class="card-category">Admins</p>
                  <h3 class="card-title"><?php echo $ad;?>                   
                  </h3>
                </div>                
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <p class="card-category">Users</p>
                  <h3 class="card-title"><?php echo $us;?></h3>
                </div>                
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <p class="card-category">Employees</p>
                  <h3 class="card-title"><?php echo $et;?></h3>
                </div>                
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <p class="card-category">Service Provider</p>
                  <h3 class="card-title"><?php echo $sp;?></h3>
                </div>                
              </div>
            </div>
          </div>          
          <div class="row">            
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Employees Stats</h4>
                  <?php 
                    $str="select * from employee_table";
                    $res=mysqli_query($con,$str);                    
                  ?>                  
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Mobile Number</th>
                      <th>Salary</th>
                    </thead>
                    <tbody>
                    <?php 
                    for($i=0;$i<mysqli_num_rows($res);$i++){  
                      $row=mysqli_fetch_assoc($res);                                    
                  ?>  
                      <tr>
                        <td><?php echo $row['empid']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['mobile']?></td>
                        <td><?php echo $row['salary']?></td>
                      </tr> 
                      <?php }?>                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Service Provider Stats</h4>                  
                </div>
                <?php 
                    $str="select * from serviceprovider";
                    $res=mysqli_query($con,$str);                    
                  ?> 
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Mobile Number</th>
                      <th>Service</th>
                    </thead>
                    <tbody>
                    <?php 
                    for($i=0;$i<mysqli_num_rows($res);$i++){  
                      $row=mysqli_fetch_assoc($res);                                    
                  ?>  
                      <tr>
                        <td><?php echo $row['sid']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['mobile']?></td>
                        <td><?php echo $row['service']?></td>
                      </tr> 
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php include('includes/footer.php');?>