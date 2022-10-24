


<?php include('includes/header.php');?>
  <div class="wrapper ">
  <?php include('includes/navbar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php 
    $code="EMP".rand(100,999);
    ?>
     <?php include('includes/top.php');?>      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">ADD Employee</h4>                  
                </div>
                <div class="card-body">
                <form action="emp_add.php" method="post" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Employee ID</label>
                          <input type="text" class="form-control" name="empid" value="<?php echo $code;?>" readonly>
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
                          <label class="bmd-label-floating">Email ID</label>
                          <input type="email" class="form-control" name="email">
                        </div>
                      </div>                                        
                    </div>   
                    <div class="row">
                      <div class="col-md-6">                        
                          <label class="bmd-label-floating">DOB</label>
                          <input type="date" class="form-control" name="dob">                        
                      </div>
                      <div class="col-md-6">                        
                          <label class="bmd-label-floating">DOJ</label>
                          <input type="date" class="form-control" name="doj">
                      </div>                                        
                    </div>  <br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Designation</label>
                          <input type="text" class="form-control" name="desig">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department</label>
                          <input type="text" class="form-control" name="dept">
                        </div>
                      </div>                                        
                    </div>  
                    <div class="row">                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Salary</label>
                          <input type="text" class="form-control" name="salary">
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
                    echo '<script> alert("all the fields should be filled") </script>';
                }else{
                    $str="insert into employee_table values('$empid','$name',$mobile,'$desig','$email','$dob','$doj','$dept',$salary)";
                        if (mysqli_query($conn, $str)) {
                        echo "<script> location.href='employees.php'; </script>";
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