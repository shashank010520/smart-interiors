<?php session_start();
?>
<div id="wrapper"> 
	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="home.php"><i class="icon-info-blocks material-icons">exit_to_app</i>Smart
					<div class="logoCaption">Interior Designs</div></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="home.php">Home</a></li> 
                        <li><a class="waves-effect waves-dark" href="about.php">About us</a></li>
					    <li><a class="waves-effect waves-dark" href="services.php">Services</a></li>
                        <li><a class="waves-effect waves-dark" href="contact.php">Contact us</a></li>
                        <li><a class="waves-effect waves-dark" href="designs.php">our designs</a></li>
                        <li><a class="waves-effect waves-dark" href="myorders.php">my orders</a></li>
                         <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark"><?php echo $_SESSION['Name'];?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="profile.php"><i class="fa fa-user"></i>  Edit Profile</a></li>
                            <li><a class="waves-effect waves-dark" href="index.php"><i class="fa fa-sign-out"></i>  logout</a></li>
                           </ul>
                           <li><a class="waves-effect waves-dark" href="cart.php"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </header><!-- end header -->
    