<?php include('header.php'); ?>

<!--Breadcrumb Start-->
<div class="breadcrumb-area" style="background-image: url('assets/img/contact/01.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h1 class="page-title">Contact Us</h1>
                    <ul class="page-list">
                        <li><a href="#">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb End-->

<!--Cantact-->
<div class="contact-page padding-top-80 padding-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="left-content">
                    <div class="section-title">
                        <h2 class="heading-02 padding-bottom-20">Expert Call</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <form action="http://zwin.io/html/coche/contact.html" class="contact-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="message">Address</label>
                                <textarea class="form-control" cols="10" rows="2" id="message"></textarea>
                            </div>


                        </div>




                        <div class=" d-flex w-100 justify-content-around">
                            <div>
                                <button class="center"><i class="fa fa-inr" aria-hidden="true"></i> ₹ 00 </button>
                            </div>
                            <div>
                                <button onclick="myFunction()" class="center"><a href="javascript:void(0)" class="bg-gray">Pay
                                        now</a></button>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <!-- <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" cols="30" rows="10" id="message"></textarea>
                            </div> -->


                            <div class="main-btn-wrap d-flex justify-content-center">
                                <input class="main-btn black mt-1 " type="submit" value="Call">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--// Cantact-->

<div class="d-flex justify-content-center mb-5">
    <div class="widget widget_nav_menu blog-bg radio-button w-50" id="myDIV">
        <h5 class="widget-title border-bottom m-0">Blog Categories</h5>
        <ul>
            <li><a href="#">UPI </a></li>
            <li><a href="#">Debit Card </a></li>
            <li><a href="#">Credit Card </a></li>
            <li><a href="#">CoD </a></li>
        </ul>
        <div class="text-center mt-3">
            <button class="center"><a href="javascript:void(0)" class="bg-gray">Pay
                    now</a></button>
        </div>
    </div>

</div>


<!--Google Map -->
<div class="google-map-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 px-0">
                <div id="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.1899657893728!2d90.42380431666383!3d23.779746865573756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7499f257eab%3A0xe6b4b9eacea70f4a!2sManama+Tower!5e0!3m2!1sen!2sbd!4v1561542597668!5m2!1sen!2sbd" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Google Map End-->

<?php include('footer.php'); ?>

<script>
    document.getElementById("myDIV").style.display = "none";

    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>