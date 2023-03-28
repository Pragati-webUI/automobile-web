<?php include('header.php'); ?>

<!--Sign Up Page-->
<div class="sign padding-120 pt-5 pb-5">
    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-lg-5 offset-lg-1 m-auto">
                <div class="sign-register-area " style="background-image: url(assets/img/sign-in/01.png)">
                    <div class="sign-register-area-inner justify-content-center">
                        <h4 class="title">Existing User</h4>
                        <b class="text-danger">Lorem Ipsum is simply dummy text of the printing and
                        </b>
                        <div class="main-btn-wrap text-center">
                            <a href="http://localhost/car/login.php" class="main-btn white uppercase">Log IN</a>
                        </div>
                    </div>
                </div>
                <!--// Register Area-->
            </div>
            <div class="col-lg-5 mt-5">
                <div class="sign-in-area">
                    <!--Form-->
                    <form action="#">

                        <label for="name">Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon flaticon-man-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                        </div>
                        <!--// Email-->

                        <label for="email" class="padding-top-30">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon flaticon-black-back-closed-envelope-shape"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                        </div>
                        <!--// Email-->

                        <label for="email" class="padding-top-30">Mobile Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">

                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Mobile Number">
                        </div>

                        <label for="email" class="padding-top-30">Mobile otp</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <!-- <i class="fa fa-phone" aria-hidden="true"></i> -->
                                    <i class="fa fa-mobile" aria-hidden="true"></i>

                                </span>
                            </div>
                            <input type="email" class="form-control" id="email" placeholder="Mobile OTP">
                        </div>

                        <label for="email" class="padding-top-30">Email otp</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <!-- <i class="icon flaticon-black-back-closed-envelope-shape"></i> -->
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" id="email" placeholder="Email OTP">
                        </div>

                        <label for="email" class="padding-top-30">Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">

                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" id="email" placeholder="Enter Your Address">
                        </div>

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

                        <label for="confirm_password" class="padding-top-30">Confirm Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon flaticon-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password">
                            <div class="input-group-prepend">
                                <span class="input-group-text btn-show-pass">
                                    <i class="show-hide-icon fa fa fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        <!--// Confirm Password-->

                        <div class="main-btn-wrap text-center padding-top-60">
                            <!-- <input type="submit" class="main-btn black uppercase">RREGISTRATION -->
                            <button class="reg-text ">
                                <a href="http://localhost/car/login.php">

                                    RREGISTRATION</i>
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