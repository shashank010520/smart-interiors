<?php include('includes/header.php');?>
  <div class="wrapper ">
  <?php include('includes/navbar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
     <?php include('includes/top.php');?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="row card-header card-header-primary">
                <div class="col-md-10">
                    <h4 class="card-title ">Service Provider Details</h4> 
                  </div>         
                  <div class="col-md-2">
                  <a href="sp_add.php" class="btn btn-primary bg-primary"><i class="fa fa-user-plus"></i></a>  
                  </div>              
                </div>                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>SP ID</th>                          
                        <th>Name</th>
                        <th>Service</th>
                        <th>Mobile Number</th>
                        <th>Address</th>                        
                        <th>Action</th>
                      </thead>
                      <tbody>
                      <?php 
                        require "includes/connection.php";
                        if(isset($_GET['id']))
                          {
                              $id=$_GET['id'];
                              $str="delete from serviceprovider where sid='$id'";
                              if(mysqli_query($con,$str))
                              {
                                  echo "<script> location.href='sp.php'; </script>";
                              }
                          }
                        $str="select * from serviceprovider";
                        $res=mysqli_query($con,$str);
                        if(mysqli_num_rows($res)>0)
                        {
                            for($i=0;$i<mysqli_num_rows($res);$i++)
                            {
                              $row=mysqli_fetch_assoc($res);                          
                      ?>
                        <tr>
                          <td><?php echo $row['sid'];?></td>
                          <td> <?php echo $row['name'];?></td>
                          <td> <?php echo $row['service'];?></td>
                          <td><?php echo $row['mobile'];?></td>
                          <td><?php echo $row['address'];?></td>                          
                          <td ><a href="sp.php?id=<?php echo $row['sid'];?>"><i class="fa fa-trash text-danger" data-toggle='tooltip' data-placement='top' title='Delete'style="font-size:25px"></i></a>
                            <a href="sp_edit.php?id=<?php echo $row['sid'];?>"><i class="fa fa-edit text-success" data-toggle='tooltip' data-placement='top' title='Edit'style="font-size:25px"></i></a>
                          </td>
                        </tr>
                        <?php }}?>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
     <?php include('includes/footer.php');?>