<?php 
session_start();
                           

                           $con = mysqli_connect('localhost','root','','furniture');
include('includes/header1.php');?>
<div class="main">

<div class="container">
    <div class="booking-content">
        <div class="booking-image">
            <img class="booking-img" src="images/admin.gif" alt="Booking Image">
        </div>
        <div class="booking-form">
        <form action="login.php" method="post">
                <h2>Lets get started admin!</h2>
                <div class="form-group form-input">
                    <input type="text" name="username" id="name" value="" required/>
                    <label for="name" class="form-label">Enter Your username</label>
                </div>
                <div class="form-group form-input">
                    <input type="password" name="password" id="name" value="" required/>
                    <label for="name" class="form-label">Password</label>
                </div>
                <?php
                    if(isset($_POST['login']))
                    {
                    require "includes/connection.php";
                    $name = $_POST['username']; 
                    
                    $apass = $_POST['password'];
                    

                    $s = "select * from admin_table where username = '$name' && password = '$apass'";

                    $result = mysqli_query($con, $s);

                    $num = mysqli_num_rows($result);

                    if($num == 1){
                        $_SESSION['username'] = $name;                           
                        echo "<script>alert('login successful');</script>";
                        header('location:dashboard.php');
                    }else{
                        echo "<script>alert('invalid credentials')</script>";
                                                
                    }
                    }  
                    ?>
               

                <div class="form-submit">
                            <input type="submit" value="Log In" class="submit" id="submit" name="login" />
                         </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
                <?php include('includes/footer1.php');?>