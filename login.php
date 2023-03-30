<?php include('header.php'); ?>

<!--Sign Up Page-->
<div class="sign padding-120 pt-5 pb-5">
    <div class="container pt-5 pb-5">
        <div class="row mt-5">
            <div class="col-lg-5 offset-lg-1 m-auto">

                <div class="sign-register-area1" style="background-image: url(assets/img/sign-in/01.png)">
                    <div class="sign-register-area-inner ">
                        <h4 class="title1">New User!</h4>
                        <b class="text-danger">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </b>
                        <div class="main-btn-wrap text-center">
                            <a href="http://localhost/car/registration.php" class="main-btn white uppercase">REGISTER</a>
                        </div>
                    </div>
                </div>
                <!--// Register Area-->
            </div>
            <div class="col-lg-5">
                <div class="sign-in-area">
                    <!--Form-->
                    <form action="#">
                        <!--// Border-->
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon flaticon-black-back-closed-envelope-shape"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="email" placeholder="Enter Your Email">
                        </div>
                        <!--// Email-->
                        <label for="password" class="padding-top-30">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon flaticon-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" id="password" placeholder="Enter Your Password">
                            <div class="input-group-prepend">
                                <span class="input-group-text btn-show-pass">
                                    <i class="show-hide-icon fa fa fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        <!--// Password-->
                        <div class="form-bottom-area padding-top-30">
                            <div class="remember-me">
                                <a href="#">Login With OTP</a>
                            </div>
                            <div class="forgot-password">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                        <div class="main-btn-wrap text-center padding-top-60">
                            <button class="text">
                                <a href="http://localhost/car/registration.php">
                                    Log In</i>
                                </a>
                            </button>
                        </div>
                    </form>
                    <!--// Form-->
                </div>
                <!--// Sign In Area-->
            </div>
        </div>
    </div>
</div>
<!--// Sign Up Page-->

<?php include('footer.php'); ?>