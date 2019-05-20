  <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Home Banner  =-=-=-=-=-=-= -->
      <div id="banner">
         <div class="container">
            <div class="search-container">
               <!-- Form -->
                <p><img src="<?=base_url()?>template/theme2/images/tr_slogan.png"></p>
             </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Home Banner End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Advanced Search =-=-=-=-=-=-= -->
      <div class="advance-search">
         <div class="section-search search-style-2">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs">
                        <li class="nav-item active">
                           <a class="nav-link" data-toggle="tab" href="#tab1">Araç Ara </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab2" >Rezervasyon Ara</a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="tab-content clearfix">
                        <div class="tab-pane fade in active" id="tab1">
                           <form>
                              <div class="search-form pull-left">
                                 <div class="search-form-inner pull-left">
                                     <div class="col-md-4 no-padding">
                                       <div class="form-group">
                                          <label>Alış Ofisi</label>
                                          <select class=" form-control make">
                                             <option label="Any Make"></option>
                                             <option>BMW</option>
                                             <option>Honda </option>
                                             <option>Hyundai </option>
                                             <option>Nissan </option>
                                             <option>Mercedes Benz </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-2 no-padding">
                                       <div class="form-group">
                                          <label>Alış Tarihi</label>
                                         <input type="date" class="form-control search-year" style="    line-height: 20px;    padding: 14px 12px;">
                                        </div>
                                    </div>
                                        <div class="col-md-2 no-padding">
                                       <div class="form-group">
                                          <label>Alış Saati</label>
                                         <input type="time" class="form-control search-year" style="    line-height: 20px;    padding: 14px 12px;">
                                        </div>
                                    </div>
                                    <div class="col-md-2 no-padding">
                                       <div class="form-group">
                                          <label>Veriş tarihi</label>
                                          <input type="date" class="form-control search-year" style="    line-height: 20px;    padding: 14px 12px;">
                                        </div>
                                    </div>
                                    <div class="col-md-2 no-padding">
                                       <div class="form-group">
                                          <label>Veriş Saati</label>
                                         <input type="time" class="form-control search-year" style="    line-height: 20px;    padding: 14px 12px;">
                                        </div>
                                    </div>
                                 </div>
                                 <div class="form-group pull-right">
                                    <button type="submit" value="submit" class="btn btn-lg btn-theme" >ARA</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane fade" id="tab2" >
                       <form>
                              <div class="search-form pull-left">
                                 <div class="search-form-inner pull-left">
                                    <div class="col-md-3 no-padding">
                                       <div class="form-group">
                                          <label>PNR</label>
                                          <input type="text" class="form-control" placeholder="Eg PNRW3 " />
                                       </div>
                                    </div>
                                    <div class="col-md-3 no-padding">
                                       <div class="form-group">
                                          <label>Soyisim</label>
                                          <input type="text" class="form-control" placeholder="Eg YILMAZ" />
                                       </div>
                                    </div>
                               
                                 <div class="form-group pull-right">
                                    <button type="submit" value="submit" class="btn btn-lg btn-theme" >ARA</button>
                                 </div>
                              </div>
                           </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Advanced Search End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
         <section class="custom-padding gray" style="    padding: 10px 0 60px 0;">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Araç <span class="heading-color"> Filomuz</span></h1>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="row grid-style-2 ">
                     <div class="col-md-12 col-xs-12 col-sm-12">
                        <!-- Ads Archive -->
                       <?php foreach($car as $val){ ?>
                        <div class="col-md-4 col-xs-12 col-sm-6">
                           <div class="category-grid-box-1">
                              <div class="featured-ribbon">
                                 <span>Featured</span>
                              </div>
                              <div class="image">
                                 <img alt="Carspot" src="<?=base_url()?>images/car/<?=$val->file?>" class="img-responsive">
                                 <div class="ribbon popular"></div>
                                 <div class="price-tag">
                                    <div class="price"><span>$920,000</span></div>
                                 </div>
                              </div>
                              <div class="short-description-1 clearfix">
                                 <div class="category-title"> <span><a href="#"><?=$this->Car_model->get_category_single($val->category)?></a></span> </div>
                                 <h3><a title="" href="single-page-listing.html"><?=$this->Car_model->get_make_single($val->make)?> <?=$this->Car_model->get_model_single($val->model)?> / <?=$val->carage?> </a></h3>
                                 <p class="location">
                                   <span style="    color: #089ed7;"><i class="fa fa-id-badge"></i>Ehliyet Yaşı <?=$val->driverlicanceage?></span>
                                   
                                   <span style="    color: #00579a; font-weight: 800; margin: 0 25px;"><i class="fa fa-credit-card"></i>Kredi Kartı Geçerlidir</span>
                                </p>
                                 <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i><?=$this->Car_model->get_fuel_single($val->fuel)?></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-gearshift transmission"></i><?=$this->Car_model->get_gear_single($val->gear)?></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i><?=$val->engine?> cc</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i><?=$this->Car_model->get_class_single($val->class)?></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                                   <li><a href="javascript:void(0)"><i class="fa fa-user"></i> Yaş <?=$val->age?></a></li>
                                 </ul>
                              </div>
                              <div class="ad-info-1">
                                 <button class="btn btn-primary" style="    border-radius: 0;  height: 50px; width: 73.333333333333333%;"> HEMEN KİRALA </button>
                                 <ul class="pull-right">
                                    <li> <a href="#"><i class="flaticon-like-1"></i></a> </li>
                                    <li> <a href="#"><i class="flaticon-message"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                        </div>
                       <?php } ?>
                      
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->
         
         <!-- =-=-=-=-=-=-= Services Section  =-=-=-=-=-=-= -->
         <section class="section-padding services-center">
            <div class="container">
               
               <div class="row clearfix">
                   <form>
                              <div class="search-form">
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Convertible" src="<?=base_url()?>template/theme2/images/bodytype/1.png">
                                        <h4>Convertible</h4>
                                        </a> 
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Coupe" src="<?=base_url()?>template/theme2/images/bodytype/2.png">
                                        <h4>Coupe</h4>
                                        </a> 
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Sedan" src="<?=base_url()?>template/theme2/images/bodytype/3.png">
                                        <h4>Sedan</h4>
                                        </a> 
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Van/Minivan" src="<?=base_url()?>template/theme2/images/bodytype/4.png">
                                        <h4>Van/Minivan</h4>
                                        </a> 
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Truck" src="<?=base_url()?>template/theme2/images/bodytype/5.png">
                                        <h4>Truck</h4>
                                        </a> 
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Hybrid" src="<?=base_url()?>template/theme2/images/bodytype/6.png">
                                        <h4>Hybrid</h4>
                                        </a> 
                                    </div>
                                </div>
                              </div>
                           </form>
               </div>

            </div>

         </section>
         <!-- =-=-=-=-=-=-=  Services Section End =-=-=-=-=-=-= -->
         
         
 
         <!-- =-=-=-=-=-=-= Expert Reviews Section =-=-=-=-=-=-= -->
         <section class="news section-padding">
            <div class="container">
               <div class="row">
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Artı  <span class="heading-color"> Blog</span></h1>
                        <!-- Short Description -->
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-12">
                     <div class="mainimage">
                        <a>
                           <img alt="" class="img-responsive" src="<?=base_url()?>template/theme2/images/blog/1.jpg">
                           <div class="overlay">
                              <h2>Eight Things You Should Know About The Mercedes-Benz E-Class LWB</h2>
                           </div>
                        </a>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="col-md-5 col-sm-12 col-xs-12">
                     <div class="newslist">
                        <ul>
                           <li>
                              <div class="imghold"> <a><img src="<?=base_url()?>template/theme2/images/blog/s1.jpg" alt=""></a> </div>
                              <div class="texthold">
                                 <h4><a>2017 Honda City: Which Variant Suits You? </a></h4>
                                 <p>With the 2017 facelifted avatar, the Honda City has significantly upped its game...&nbsp;</p>
                              </div>
                              <div class="clear"></div>
                           </li>
                           <li>
                              <div class="imghold"> <a><img src="<?=base_url()?>template/theme2/images/blog/s2.jpg" alt=""></a> </div>
                              <div class="texthold">
                                 <h4><a>Honda City Facelift &ndash; Expected Prices </a></h4>
                                 <p>Honda will launch the City facelift in India on Feb 14, 2017 and it promises to...&nbsp;</p>
                              </div>
                              <div class="clear"></div>
                           </li>
                           <li>
                              <div class="imghold"> <a><img src="<?=base_url()?>template/theme2/images/blog/s3.jpg" alt=""></a> </div>
                              <div class="texthold">
                                 <h4><a>Audi A4 Diesel Launched In India At Rs 40.20 Lakh </a></h4>
                                 <p>Audi India has launched a powerful diesel variant of its A4 sedan at Rs 40.20 la...&nbsp;</p>
                              </div>
                              <div class="clear"></div>
                           </li>
                           <li>
                              <div class="imghold"> <a><img src="<?=base_url()?>template/theme2/images/blog/s4.jpg" alt=""></a> </div>
                              <div class="texthold">
                                 <h4><a>Audi A4 Diesel Launched In India At Rs 40.20 Lakh </a></h4>
                                 <p>Audi India has launched a powerful diesel variant of its A4 sedan at Rs 40.20 la...&nbsp;</p>
                              </div>
                              <div class="clear"></div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </section>
         <!-- =-=-=-=-=-=-= Expert Reviews End =-=-=-=-=-=-= -->
 
         <!-- =-=-=-=-=-=-= Car Inspection =-=-=-=-=-=-= -->
         <section class="car-inspection section-padding gray">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12 nopadding hidden-sm">
                     <div class="call-to-action-img-section-right">
                        <img src="<?=base_url()?>template/theme2/images/car-in-red.png" class="wow slideInLeft img-responsive" data-wow-delay="0ms" data-wow-duration="3000ms" alt="">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
                     <div class="call-to-action-detail-section">
                        <div class="heading-2">
                           <h3> Want To Sale Your Car ?</h3>
                           <h2>Car Inspection</h2>
                        </div>
                        <p> Our CarSure experts inspect the car on over 200 checkpoints so you get complete satisfaction and peace of mind before buying. </p>
                        <div class="row">
                           <ul>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Transmission</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Steering</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Engine</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Tires</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Lighting</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Interior</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Suspension</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Exterior</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Brakes</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Air Conditioning</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Engine Diagnostics</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Wheel Alignment</li>
                           </ul>
                        </div>
                        <a href="#" class="btn-theme btn-lg btn">Schedule Inspection <i class="fa fa-angle-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- =-=-=-=-=-=-= Car Inspection End =-=-=-=-=-=-= -->
           <!-- =-=-=-=-=-=-= Buy Or Sale =-=-=-=-=-=-= -->
         <section class="sell-box padding-top-70">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                     <div class="sell-box-grid">
                        <div class="short-info">
                        <h3> Want To Sale Your Car ?</h3>
                           <h2><a href="#">Are you looking for a car?</a></h2>
                           <p>Search your car in our Inventory and request a quote on the vehicle of your choosing. </p>
                        </div>
                        <div class="text-center">
                           <img class="img-responsive wow slideInLeft center-block" data-wow-delay="0ms" data-wow-duration="2000ms" src="<?=base_url()?>template/theme2/images/sell.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                     <div class="sell-box-grid">
                        <div class="short-info">
                        <h3> Want To Sale Your Car ?</h3>
                           <h2> <a href="#">Do you want to sell your car?</a></h2>
                           <p>Request search your car in our Inventory and a quote on the vehicle of your choosing. </p>
                        </div>
                        <div class="text-center">
                           <img class="img-responsive wow slideInRight center-block" data-wow-delay="0ms" data-wow-duration="2000ms" src="<?=base_url()?>template/theme2/images/sell-1.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
          <!-- =-=-=-=-=-=-= Buy Or Sale End =-=-=-=-=-=-= -->