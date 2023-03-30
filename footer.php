 <!-- footer area start -->

 <div class="expert">
     <a href="http://localhost/car/rateandreview.php" class="float2" target="_blank">
         <h1 class="blank1">Rate & Review</h1>
     </a>
 </div>

 <div class="expert">
     <a href="http://localhost/car/expertcall.php" class="float" target="_blank">
         <i class="fa fa-phone" aria-hidden="true"></i>
         <h1 class="blank">Expert <br>Call</h1>
     </a>
 </div>

 <footer class="footer-area style-02" style="background-image: url('assets/img/bg/footer-bg.png')">
     <div class="footer-top ">
         <div class="container">
             <div class="row padding-top-100 padding-bottom-65 justify-content-center">
                 <div class="col-lg-4 col-md-6 px-lg-0 mr-5 ">
                     <div class="footer-widget widget">
                         <div class="about_us_widget">
                             <a href="#" class="footer-logo"> <img src="assets/img/logo.png" alt="footer logo"></a>
                             <p>We believe brand interaction is key in commu- nication. Real innovations and a
                                 positive customer
                                 experience are the heart of successful communication.</p>
                             <div class="footer-social-icon padding-top-10">
                                 <div class="banner__header__follow_us flex-column">
                                     <div class="text ml-0 mt-0">FOLLOW US</div>
                                     <div class="banner__header__icon">
                                         <ul>
                                             <li><a class="icon" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                             <li><a class="icon" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                             <li><a class="icon" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                             <li><a class="icon" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-2  col-md-6 px-lg-0">
                     <div class="footer-widget widget widget_nav_menu">
                         <h5 class="widget-title">Company</h5>
                         <ul>
                             <li><a href="#">Home</a></li>
                             <li><a href="#">About</a></li>
                             <li><a href="#">Page</a></li>
                             <li><a href="#">Blog</a></li>
                             <li><a href="#">Services</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-2 col-md-6 px-lg-0">
                     <div class="footer-widget widget widget_nav_menu">
                         <h5 class="widget-title">Services</h5>
                         <ul>
                             <li><a href="#">Latest Cars</a></li>
                             <li><a href="#">Featured Car</a></li>
                             <li><a href="#">Sell Your Car</a></li>
                             <li><a href="#">Buy a Car</a></li>
                             <li><a href="#">Strategy</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 px-lg-0">
                     <div class="footer-widget widget">
                         <h5 class="widget-title">Contact us</h5>
                         <div class="contact-area">
                             <ul>
                                 <li><i class="icon flaticon-pin"></i><a href="#">Lavaca Street, Suite 2000 Austin, TX
                                         24141</a></li>
                                 <li><i class="icon flaticon-email"></i><a href="#">autoshop@gmail.com</a></li>
                                 <li><i class="icon flaticon-call-answer"></i><a href="#">(+88) 0172 570051</a></li>
                                 <li><i class="icon flaticon-global"></i><a href="#">www.autoshop.com</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="copyright-area">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="copyright-area-inner">
                         &copy; Coche All rights reserved. Powered with <span class="coypright-icon"><i class="fas fa-heart"></i></span> by
                         <a href="http://zwin.io/" target="_blank">Zwin</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- footer area end -->

 <!-- jquery -->
 <script src="assets/js/jquery-3.4.1.min.js"></script>
 <!--migrate-->
 <script src="assets/js/jquery-migrate.min.js"></script>
 <!-- bootstrap -->
 <script src="assets/js/bootstrap.min.js"></script>
 <!-- waypoint -->
 <script src="assets/js/waypoints.min.js"></script>
 <!-- wow -->
 <script src="assets/js/wow.min.js"></script>
 <!--Slick Js-->
 <script src="assets/js/slick.min.js"></script>
 <!-- counterup -->
 <script src="assets/js/jQuery.rcounter.js"></script>
 <!--Nice Select-->
 <script src="assets/js/jquery.nice-select.min.js"></script>
 <!-- imageloaded -->
 <script src="assets/js/imagesloaded.pkgd.min.js"></script>
 <!-- main js -->
 <script src="assets/js/main.js"></script>
 <script src="assets/js/rateandreview.js"></script>

 </body>

 <!-- Mirrored from zwin.io/html/coche/footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 08:23:14 GMT -->

 </html>

 <script>
     $('#side-bar-menu li a').on('click', function() {
         console.log($(this).closest('li').find('ul.sub-menu'));
         $(this).closest('li').find('ul.sub-menu').toggleClass('mean-clicked');

         // $('#side-bar-menu li ul.sub-menu').addClass('mean-clicked').parent().siblings().find('ul').removeClass(
         //     'mean-clicked');
         //  $(this).addClass('mean-clicked');
     });
 </script>