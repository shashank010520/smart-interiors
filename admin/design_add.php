


<?php include('includes/header.php');?>
  <div class="wrapper ">
  <?php include('includes/navbar.php');?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php 
    $code="CODE".rand(100,999);
    ?>
     <?php include('includes/top.php');?>      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">ADD Design</h4>                  
                </div>
                <div class="card-body">
                <form action="design_add.php" method="post" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Design Code</label>
                          <input type="text" class="form-control" name="code" value="<?php echo $code;?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="text" class="form-control" name="price">
                        </div>
                      </div>                                        
                    </div> 
                    <div class="row">
                      <div class="col-md-6">                        
                        <label class="bmd-label-floating">Image</label>                      
                    <input type="file" name="myfile" class="form-control">                        
                      </div> 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Type</label>
                          <select class="form-control" aria-label="Default select example" name="type">
                            <option selected>Select</option>
                            <option value="Wall Designs">Wall Designs</option>
                            <option value="Outdoor Designs">Outdoor Designs</option>
                            <option value="Living Room Designs">Living Room Designs</option>
                            <option value="Kitchen Designs">Kitchen Designs</option>
                            <option value="Room Decors">Room Decors</option>
                            <option value="Office Designs">Office Designs</option>
                        </select>
                        </div>
                      </div>                         
                    </div>   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control" name="desc">
                        </div>
                      </div>                      
                    </div>                       
                                     
                                      
                    <button type="submit" name="save" class="btn btn-primary pull-right">upload</button>
                    <div class="clearfix"></div>
                    <?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'furniture');

// Uploads files
if (isset($_POST['save'])) {   
  $price=$_POST['price'];
   $desc=$_POST['desc'];
  $type=$_POST['type']; // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
          $str="insert into design_table values('$code',$price,'$desc','$filename','$type')";
            if (mysqli_query($conn, $str)) {
              echo "<script> location.href='designs.php'; </script>";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}?>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>  
     <?php include('includes/footer.php');?>