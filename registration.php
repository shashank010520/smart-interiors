<?php session_start();?>
<?php include('includes/header1.php');?>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="img/login2.jpg" alt="Booking Image">
                </div>
                <div class="booking-form">
                <form action="registration.php" method="post">
                        <h2>Register to dive in to the world of smart interiors!</h2>
                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" value="" required/>
                            <label for="name" class="form-label">Your name</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="number" name="mobile" id="phone" value="" required />
                            <label for="phone" class="form-label">Your phone number</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="email" id="name" value="" required/>
                            <label for="name" class="form-label">Your E-mail</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="addr" id="name" value="" required/>
                            <label for="name" class="form-label">Your Address</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="password" name="password" id="name" value="" required/>
                            <label for="name" class="form-label">Password</label>
                        </div>
                       <div class="form-group form-input">
                            <input type="text" name="prop" id="name" value="" required/>
                            <label for="name" class="form-label">Type of property</label>
                        </div> 
                        <div class="form-submit">
                            <input type="submit" value="Register" class="submit" id="submit" name="register" />
                            <a href="login.php" class="vertify-booking">already a member?</a>
                        </div>
                        <?php
                           if(isset($_POST['register']))
                            {
                                require "includes/connection.php";
                                $name = $_POST['name']; 
                                $mobile = $_POST['mobile']; 
                                $email = $_POST['email']; 
                                $addr = $_POST['addr']; 
                                $pass = $_POST['password'];
                                $prop = $_POST['prop']; 
                                
                                if($name=="" or $mobile=="" or $email=="" or $addr=="" or $pass=="" or $prop==""){
                                    echo "<script>alert('All the fields should be filled')</script>";
                                }else{
                                    $str = "select * from user_table where Email = '$email'";
                                    $result = mysqli_query($con, $str);                                        
                                    if(mysqli_num_rows($result) == 0){
                                        $str = "insert into user_table values('$name',$mobile,'$email','$addr','$pass','$prop')";
                                        if(mysqli_query($con,$str)){
                                            $_SESSION['email'] = $email;                                                                           
                                            echo "<script>alert('Account Created successfully');</script>";
                                            header('location:index.php');
                                        } else{
                                            echo "<script>alert('Error in creating an account');</script>";
                                        }                                
                                    }else{
                                        echo "<script>alert('user with email ".$email." already exist');</script>";
                                    }
                                }
                            }  
                            ?>   
                    </form>
                </div>
            </div>
        </div>

    </div>

   <?php include('includes/footer1.php');?>