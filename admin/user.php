
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
              <form action="user.php?" method="post">                          
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">User Details</h4>                
                </div>                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Name</th>                          
                        <th>Email ID</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>Type of Property</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      <?php 
                        require "includes/connection.php";
                        if(isset($_GET['email']))
                          {
                              $email=$_GET['email'];
                              $str="delete from user_table where Email='$email'";
                              if(mysqli_query($con,$str))
                              {
                                  //echo "<script> location.href='user.php'; </script>";
                              }
                          }
                        $str="select * from user_table";
                        $res=mysqli_query($con,$str);
                        if(mysqli_num_rows($res)>0)
                        {
                            for($i=0;$i<mysqli_num_rows($res);$i++)
                            {
                              $row=mysqli_fetch_assoc($res);                          
                      ?>
                        <tr>
                          <td><?php echo $row['Name'];?></td>
                          <td> <?php echo $row['Email'];?></td>
                          <td> <?php echo $row['Mobile_Number'];?></td>
                          <td><?php echo $row['Adress'];?></td>
                          <td class="text-primary"><?php echo $row['property'];?></td>
                          <td><a href="user.php?email=<?php echo $row['Email'];?>"><i class="fa fa-trash text-danger" data-toggle='tooltip' data-placement='top' title='Delete'style="font-size:32px"></i></a></td>
                        </tr>
                        <?php }}?>                        
                      </tbody>
                    </table>
                  </div>
                </div>
                </form>
              </div>
            </div>            
          </div>
        </div>
      </div>
     <?php include('includes/footer.php');?>