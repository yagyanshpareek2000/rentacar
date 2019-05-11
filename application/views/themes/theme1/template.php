<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="Ahmet DALDEMİR">
      <title><?=$site[0]->title?></title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="<?=base_url()?>template/theme2/images/favicon.ico" type="image/x-icon" />
      <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="<?=base_url()?>template/theme2/css/bootstrap.css">
      <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="<?=base_url()?>template/theme2/css/style.css">
      <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="<?=base_url()?>template/theme2/css/font-awesome.css" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link href="<?=base_url()?>template/theme2/css/flaticon.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="<?=base_url()?>template/theme2/css/et-line-fonts.css" type="text/css">
      <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="<?=base_url()?>template/theme2/css/carspot-menu.css" type="text/css">
      <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="<?=base_url()?>template/theme2/css/animate.min.css" type="text/css">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="<?=base_url()?>template/theme2/css/select2.min.css" rel="stylesheet" />
      <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
      <link href="<?=base_url()?>template/theme2/css/nouislider.min.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
      <link href="<?=base_url()?>template/theme2/css/slider.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/theme2/css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>template/theme2/css/owl.theme.css">
      <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
      <link href="skins/minimal/minimal.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= PrettyPhoto =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="<?=base_url()?>template/theme2/css/jquery.fancybox.min.css" type="text/css" media="screen"/>
      <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
      <link href="<?=base_url()?>template/theme2/css/responsive-media.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="color" href="<?=base_url()?>template/theme2/css/colors/defualt.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CSource+Sans+Pro:400,400i,600" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="<?=base_url()?>template/theme2/js/modernizr.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      <div class="preloader"></div>
      <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
      <div class="color-switcher" id="choose_color">
         <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
         <h5>STYLE SWITCHER</h5>
         <div class="theme-colours">
            <p> Choose Colour style </p>
            <ul>
               <li>
                  <a href="#." class="defualt" id="defualt"></a>
               </li>
               <li>
                  <a href="#." class="green" id="green"></a>
               </li>
               <li>
                  <a href="#." class="purple" id="purple"></a>
               </li>
            </ul>
         </div>
         <div class="clearfix"> </div>
      </div>
      <!-- =-=-=-=-=-=-= Main Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
         <div class="header-top dark">
            <div class="container">
               <div class="row">
                  <!-- Header Top Left -->
                  <div class="header-top-left col-md-6 col-sm-6 col-xs-12 hidden-xs">
                     <ul class="listnone">
                        <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> Kurumsal</a></li>
                        <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Sıkça Sorulan Sorular</a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> Dil <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">English</a></li>
                              <li><a href="#">Swedish</a></li>
                              <li><a href="#">Arabic</a></li>
                              <li><a href="#">Russian</a></li>
                              <li><a href="#">chinese</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <!-- Header Top Right Social -->
                  <div class="header-right col-md-6 col-sm-6 col-xs-12 ">
                     <div class="pull-right">
                        <ul class="listnone">
                           <li><a href="<?=base_url()?>giris-yap"><i class="fa fa-sign-in"></i> Giriş Yap</a></li>
                           <li class="hidden-xs hidden-sm"><a href="<?=base_url()?>uye-ol"><i class="fa fa-unlock" aria-hidden="true"></i> Üye Ol</a></li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle resize" alt="" src="<?=base_url()?>template/theme2/images/users/3.jpg"> <span class="myname hidden-xs"> Umair </span> <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="profile.html">User Profile</a></li>
                                 <li><a href="archives.html">Archives</a></li>
                                 <li><a href="active-ads.html">Active Ads</a></li>
                                 <li><a href="favourite.html">Favourite Ads</a></li>
                                 <li><a href="messages.html">Message Panel</a></li>
                                 <li><a href="deactive.html">Account Deactivation</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="post-ad-1.html" class="btn btn-theme">Sell Your Car</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
         <div class="clearfix"></div>
         <!-- menu start -->
         <nav id="menu-1" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <!-- menu logo -->
                        <ul class="menu-logo" style="border-right: 1px solid #ccc;">
                           <li>
                              <a href="<?=base_url()?>"><img style="width: 190px;" src="<?=base_url()?>images/site/<?=$site[0]->logo?>" alt="<?=$site[0]->title?>"> </a>
                           </li>
                        </ul>
                       <div class="header-left-wrapper">
                         <a href="tel:+908503605360" class="header-left-wrapper-phone-number">
                           <div class="header-call-center">
                             <i class="flaticon-customer-service headset_mic "></i>
                             <div class="text"><p>YARDIM İSTER MİSİNİZ?</p><p><?=$site[0]->phone?>
                               <img style="float: right;" src="<?=base_url()?>template/theme2/images/car-icon.svg"></p></div></div></a>
                       </div>
                       <div class="header-right-wrapper nav-item dropdown new-user-li">
                         <a style="padding: 0px 22px 4px 8px !important;" href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                           <i class="fa fa-user-plus" style=" color: #ffa900;
    font-size: 24px;
    margin-right: 7.2px;
    position: relative;
    top: 6px;"></i> <span class="menu-title" style="    font-family: 'Poppins'
    font-size: 16px;
    color: #ffa900;
    font-weight: 600;
    position: relative;
    top: 6px;">Üye Ol</span></a>
                         <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user" style="color: #2169aa;
    font-size: 24px;
    margin-right: 8.4px;
    position: relative;
    top: 3px;"></i> <span class="menu-title" style="
    font-size: 16px;
    color: #2169aa;
    font-weight: 600;
    position: relative;
    top: 5px;">Giriş Yap</span></a>
                         <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="position: relative;
    top: 6px;
    left: 12px;
    border-left: 1px solid #ccc;
    padding: 0 10px;
">
                           <i class="fa fa-search" style="    color: #9b9b9b;
    font-size: 22px;
    margin-right: 4px;"></i> <span style="
    font-size: 14px;
    color: #9b9b9b;
    font-weight: 600;
    display: inline-block;">Rezervasyon Ara</span></a>
                       </div>
                        
 <style>
   .nav-item.new-user-li .icon {
    color: #ffa900;
    font-size: 24px;
    margin-right: 7.2px;
    position: relative;
    top: 6px;
}
   .header-right-wrapper {
       display: flex;
    align-items: center;
    flex-grow: 1;
    float: right;
    width: 55%;
    margin: 15px 0px 0 0px;
    position: absolute;
    right: 0;
}
.header-left-wrapper {
    display: flex;
    align-items: center;
    flex-grow: 1;
    width: 25%;
    margin: 21px 0px 0 250px;
    position: absolute;
}
.header-left-wrapper .header-left-wrapper-phone-number {
    text-decoration: none;
}
   .header-call-center {
    display: flex;
    align-items: center;
    justify-content: center;
}
   .header-call-center .headset_mic {
    float: left;
    font-size: 35px;
    color: #ffa900;
    margin-top: -6px;
}
   .header-call-center .text {
    height: 31px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    float: right;
    margin-top: 2px;
}
   .header-call-center .text p:first-child {
    font-family: "Poppins";
    color: #2169aa;
    font-size: 14px;
}
   .header-call-center .text p {
    font-weight: 700;
    margin-bottom: 0;
    line-height: 1;
}
   .header-call-center .text p:last-child {
    font-family: "Open Sans";
    color: #ffa900;
    font-size: 16px;
}
                       </style>
                       
                     </div>
                  </div>
               </div>
            </section>
         </nav>
         <!-- menu end -->
      </div>
    <?=$contents?>
         
         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <footer class="footer-bg">
            <!-- Footer Content -->
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Info Widget -->
                        <div class="widget">
                           <div class="logo"> <img alt="" src="<?=base_url()?>template/theme2/images/logo.png"> </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat fringilla port.</p>
                           <ul class="apps-donwloads">
                              <li><img src="<?=base_url()?>template/theme2/images/googleplay.png" alt=""></li>
                              <li><img src="<?=base_url()?>template/theme2/images/appstore.png" alt=""></li>
                           </ul>
                        </div>
                        <!-- Info Widget Exit -->
                     </div>
                     <div class="col-md-2 col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget socail-icons">
                           <h5>Follow Us</h5>
                           <ul>
                              <li><a class="Facebook" ><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                              <li><a class="Twitter" href="#"><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
                              <li><a class="Linkedin" href="#"><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                              <li><a class="Google" href="#"><i class="fa fa-google-plus"></i></a><span>Google+</span></li>
                           </ul>
                        </div>
                        <!-- Follow Us End -->
                     </div>
                     <div class="col-md-2  col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget my-quicklinks">
                           <h5>Quick Links</h5>
                           <ul >
                              <li><a href="#">About Us</a></li>
                             <li><a href="#">Faqs</a></li>
                             <li><a href="#">Packages</a></li>
                             <li><a href="#">Contact Us</a></li>
                           </ul>
                        </div>
                        <!-- Follow Us End -->
                     </div>
                     <div class="col-md-5  col-sm-6 col-xs-12">
                        <!-- Newslatter -->
                        <div class="widget widget-newsletter">
                           <h5>Singup for Weekly Newsletter</h5>
                           <div class="fieldset">
                              <p>We may send you information about related events, webinars, products and services which we believe.</p>
                              <form>
                                 <input class="" value="Enter your email address" type="text">
                                 <input class="submit-btn" name="submit" value="Submit" type="submit"> 
                              </form>
                           </div>
                        </div>
                        <div class="copyright">
                           <p>© 2017 Carspot All rights reserved. Design by <a href="#" target="_blank">Ahmet DALDEMİR</a> </p>
                        </div>   
                        <!-- Newslatter -->
                     </div>
                  </div>
               </div>
            </div>
           
         </footer>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End --> 
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="<?=base_url()?>template/theme2/js/jquery.min.js"></script>
      <!-- Bootstrap Core Css  -->
      <script src="<?=base_url()?>template/theme2/js/bootstrap.min.js"></script>
      <!-- Jquery Easing -->
      <script src="<?=base_url()?>template/theme2/js/easing.js"></script>
      <!-- Menu Hover  -->
      <script src="<?=base_url()?>template/theme2/js/carspot-menu.js"></script>
      <!-- Jquery Appear Plugin -->
      <script src="<?=base_url()?>template/theme2/js/jquery.appear.min.js"></script>
      <!-- Numbers Animation   -->
      <script src="<?=base_url()?>template/theme2/js/jquery.countTo.js"></script>
      <!-- Jquery Select Options  -->
      <script src="<?=base_url()?>template/theme2/js/select2.min.js"></script>
      <!-- noUiSlider -->
      <script src="<?=base_url()?>template/theme2/js/nouislider.all.min.js"></script>
      <!-- Carousel Slider  -->
      <script src="<?=base_url()?>template/theme2/js/carousel.min.js"></script>
      <script src="<?=base_url()?>template/theme2/js/slide.js"></script>
      <!-- Image Loaded  -->
      <script src="<?=base_url()?>template/theme2/js/imagesloaded.js"></script>
      <script src="<?=base_url()?>template/theme2/js/isotope.min.js"></script>
      <!-- CheckBoxes  -->
      <script src="<?=base_url()?>template/theme2/js/icheck.min.js"></script>
      <!-- Jquery Migration  -->
      <script src="<?=base_url()?>template/theme2/js/jquery-migrate.min.js"></script>
      <!-- Style Switcher -->
      <script src="<?=base_url()?>template/theme2/js/color-switcher.js"></script>
      <!-- PrettyPhoto -->
      <script src="<?=base_url()?>template/theme2/js/jquery.fancybox.min.js"></script>
      <!-- Wow Animation -->
      <script src="<?=base_url()?>template/theme2/js/wow.js"></script>
      <!-- Template Core JS -->
      <script src="<?=base_url()?>template/theme2/js/custom.js"></script>
   </body>

<!-- Mirrored from templates.scriptsbundle.com/carspot/demos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 May 2019 11:26:50 GMT -->
</html>

