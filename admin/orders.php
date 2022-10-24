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
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Order Details</h4>                
                </div>                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Order ID</th>                          
                        <th>User Email ID</th>
                        <th>Design Code</th>
                        <th>Design Price</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      <?php 
                        require "includes/connection.php";
                        if(isset($_GET['id']))
                          {
                              $id=$_GET['id'];
                              $str="delete from order_table where order_id='$id'";
                              if(mysqli_query($con,$str))
                              {
                                  echo "<script> location.href='orders.php'; </script>";
                              }
                          }
                          if(isset($_GET['uid']))
                          {
                              $id=$_GET['uid'];
                              $str="update order_table set status='Complete' where order_id='$id'";
                              if(mysqli_query($con,$str))
                              {
                                  echo "<script> location.href='orders.php'; </script>";
                              }
                          }
                        $str="select * from order_table";
                        $res=mysqli_query($con,$str);
                        if(mysqli_num_rows($res)>0)
                        {
                            for($i=0;$i<mysqli_num_rows($res);$i++)
                            {
                              $row=mysqli_fetch_assoc($res);                          
                      ?>
                        <tr>
                          <td><?php echo $row['order_id'];?></td>
                          <td> <?php echo $row['email_id'];?></td>
                          <td> <?php echo $row['code'];?></td>
                          <td><?php echo $row['price'];?></td>
                          <td><?php echo $row['date'];?></td>
                          <td><?php echo $row['status'];?></td>
                          <td><?php
                          if($row['status']=="Pending"){
                            echo '<a href="orders.php?uid='.$row["order_id"].'"><i class="fa fa-check text-success" data-toggle="tooltip" data-placement="top" title="Complete"style="font-size:32px"></i></a>';
                          } 
                          ?>                                                      
                          <a href="orders.php?id=<?php echo $row['order_id'];?>"><i class="fa fa-trash text-danger" data-toggle='tooltip' data-placement='top' title='Delete'style="font-size:32px"></i></a>                            
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