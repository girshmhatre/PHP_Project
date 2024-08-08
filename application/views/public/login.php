<?php include('login_header.php'); ?>

<!-- Start Header Section -->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="header_list text-md-left text-center">
                        <li><a href="tel:+ 00 123 456 789"><i class="fa fa-phone"></i>+ 00 123 456 789</a></li>
                        <li><a href="mailto:info@gmail.com"><i class="fa fa-envelope-o"></i>info@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="header_list text-md-right text-center">
                        <li><a href="#test-popup1" class="open-popup-link">Login</a>
                            <div id="test-popup1" class="white-popup lr-popup mfp-hide text-center">
                                <h4>Login</h4>
                                <form class="subscribe-popup-form" method="post" action="#">
                                    <input name="email" required type="email" placeholder="Enter Your Email">
                                    <input name="password" required type="password" placeholder="Enter Your Password">
                                    <div class="form-check text-left">
                                        <label>Remember me
                                            <input class="defult-check" type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <a href="#" class="forgot-password float-right">Forgot Password ?</a>
                                    </div>
                                    <button class="btn btn-primary" title="Login" type="button">Login</button>
                                </form>
                                <h6>Don't have an account?</h6>
                                <a href="#test-popup2" class="sign-up open-popup-link">Click here to Sign up</a>
                            </div>  
                            <div id="test-popup2" class="white-popup lr-popup mfp-hide">
                                <h4>Registration</h4>
                                <form class="subscribe-popup-form" method="post" action="#">
                                    <input name="input" required type="input" placeholder="Enter Your name">
                                    <input name="email" required type="email" placeholder="Enter Your Email">
                                    <input name="password" required type="password" placeholder="Enter Your Password">
                                    <input name="password" required type="password" placeholder="Confirmation Password">
                                    <div class="form-check">
                                        <label>I accept the terms and conditions
                                            <input class="defult-check" type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button class="btn btn-primary" title="Subscribe" type="button">Register</button>
                                </form>
                            </div>
                        </li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Start My Account Section -->
<section class="pt_large pb_large">
	<div class="container">
    	<div class="row">
        	<div class="col-md-6 mb-4 mb-md-0">
            	<div class="title">
                	<h4>Login</h4>
                </div>
            	<form method="post" class="login_form ">
                    <div class="form-group">
                        <label>Username or email <span class="required">*</span></label>
                        <input type="text" required="" class="form-control" name="username" value="">
                    </div>
                    <div class="form-group">
                        <label>Password <span class="required">*</span></label>
                        <input class="form-control" required="" type="password" name="password">
                    </div>
                    <div class="form-group form-check p-0">
                        <label>Remember me
                            <input class="defult-check" type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <a href="#" class="forgot-password float-right">Forgot Password ?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="login" value="Log in">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End My Account Section -->
<?php include('public_footer.php');?>