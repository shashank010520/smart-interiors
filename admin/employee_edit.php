


<?php include('includes/header.php');?>
  <div class="wrapper ">
  <?php include('includes/navbar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php
      $conn = mysqli_connect('localhost', 'root', '', 'furniture');
      if(isset($_GET['id'])){
    $id=$_GET['id'];
    $str="select * from employee_table where empid='$id'";
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
                  <h4 class="card-title">Edit Employee</h4>                  
                </div>
                <div class="card-body">
                <form action="employee_edit.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Employee ID</label>
                          <input type="text" class="form-control" name="empid" value="<?php echo $id;?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name"  value="<?php echo $row['name'];?>">
                        </div>
                      </div>                                        
                    </div>   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number</label>
                          <input type="text" class="form-control" name="mobile"  value="<?php echo $row['mobile'];?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email ID</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>">
                        </div>
                      </div>                                        
                    </div>   
                    <div class="row">
                      <div class="col-md-6">                        
                          <label class="bmd-label-floating">DOB</label>
                          <input type="date" class="form-control" name="dob" value="<?php echo $row['dob'];?>">                        
                      </div>
                      <div class="col-md-6">                        
                          <label class="bmd-label-floating">DOJ</label>
                          <input type="date" class="form-control" name="doj" value="<?php echo $row['doj'];?>" readonly> 
                      </div>                                        
                    </div>  <br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Designation</label>
                          <input type="text" class="form-control" name="desig" value="<?php echo $row['designation'];?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department</label>
                          <input type="text" class="form-control" name="dept" value="<?php echo $row['department'];?>">
                        </div>
                      </div>                                        
                    </div>  
                    <div class="row">                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Salary</label>
                          <input type="text" class="form-control" name="salary" value="<?php echo $row['salary'];?>">
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
                  echo '<scrip>location.href="employee_edit.php?id='.$row['empid'].'"</script>';

                }
                // Uploads files
                if (isset($_POST['save'])) {   
                $empid=$_POST['empid'];
                $name=$_POST['name'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
                $dob=$_POST['dob'];
                $doj=$_POST['doj'];
                $desig=$_POST['desig'];
                $dept=$_POST['dept'];
                $salary=$_POST['salary']; 
                if($name=="" or $mobile=="" or $email=="" or $dob=="" or $doj=="" or $desig=="" or $dept=="" or $salary==""){
                    echo '<scrip> alert("all the fields should be filled") </script>';
                }else{
                    $str="update employee_table set name='$name',mobile=$mobile,designation='$desig',email='$email',dob='$dob',doj='$doj',department='$dept',salary=$salary where empid='$empid'";
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