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
                    <h4 class="card-title ">Design Details</h4> 
                  </div>         
                  <div class="col-md-2">
                  <a href="design_add.php" class="btn btn-primary bg-primary">New  <i class="fa fa-plus"></i></a>  
                  </div>         
                               
                </div>                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th></th>
                        <th>Design Code</th>                          
                        <th>Price</th>
                        <th>Type</th>
                        <th>Description</th>                                              
                        <th>Action</th>
                      </thead>
                      <tbody>                       
                      <?php 
                        require "includes/connection.php";
                        if(isset($_GET['id']))
                          {
                              $id=$_GET['id'];
                              $str="delete from design_table where code='$id'";
                              if(mysqli_query($con,$str))
                              {
                                  echo "<script> location.href='designs.php'; </script>";
                              }
                          }
                        $str="select * from design_table";
                        $res=mysqli_query($con,$str);
                        if(mysqli_num_rows($res)>0)
                        {
                            for($i=0;$i<mysqli_num_rows($res);$i++)
                            {
                              $row=mysqli_fetch_assoc($res);                          
                      ?>
                        <tr>
                        <td><img src="uploads/<?php echo $row['image'];?>" alt="" width="100rem" height="100rem"></td>                          
                          <td> <?php echo $row['code'];?></td>
                          <td><?php echo $row['price'];?></td>
                          <td><?php echo $row['type'];?></td>
                          <td><?php echo $row['description'];?></td>                          
                          <td ><a href="designs.php?id=<?php echo $row['code']?>"><i class="fa fa-trash text-danger" data-toggle='tooltip' data-placement='top' title='Delete'style="font-size:32px"></i></a>
                            <a href="design_edit.php?id=<?php echo $row['code']?>"><i class="fa fa-edit text-success" data-toggle='tooltip' data-placement='top' title='Edit'style="font-size:32px"></i></a>
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