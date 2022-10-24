<?php 
session_start();
                           

                           $con = mysqli_connect('localhost','root','','furniture');
include('includes/header1.php');?>
<div class="main">

<div class="container">
    <div class="booking-content">
        <div class="booking-image">
            <img class="booking-img" src="img/login2.jpg" alt="Booking Image">
        </div>
        <div class="booking-form">
        <form action="login.php" method="post">
                <h2>Welcome to Smart Interiors Happy to see you again!</h2>
                <div class="form-group form-input">
                    <input type="text" name="email" id="name" value="" required/>
                    <label for="name" class="form-label">Enter Your Email</label>
                </div>
                <div class="form-group form-input">
                    <input type="password" name="password" id="name" value="" required/>
                    <label for="name" class="form-label">Password</label>
                </div>
                <?php
                    if(isset($_POST['login']))
                    {

                    $email = $_POST['email']; 
                    
                    $pass = $_POST['password'];
                    

                    $s = "select * from user_table where email = '$email' && Password = '$pass'";

                    $result = mysqli_query($con, $s);

                    $num = mysqli_num_rows($result);

                    if($num == 1){
                        $_SESSION['email'] = $email;
                        $row=mysqli_fetch_assoc($result);
                        $_SESSION['Name'] = $row['Name'];
                        echo "<script>alert('login successful')</script>";
                        header('location:home.php');
                    }else{
                        echo "<script>alert('invalid credentials')</script>";
                                                
                    }
                    } 
?>
                <div class="form-submit">
                            <input type="submit" value="Log In" class="submit" id="submit" name="login" />
                            <a href="registration.php" class="vertify-booking">don't have an account? Register now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
                <?php include('includes/footer1.php');?>