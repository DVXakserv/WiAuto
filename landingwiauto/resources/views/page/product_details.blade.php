@extends('page.layout')
@section('content')
<body id="home" class="wide ">

    <!-- PRELOADER -->
    



<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->

    <section class="page-section breadcrumbs">
      <div class="container text-right">
        <div class="page-header">
            <h1>CAR LISTING</h1>
        </div>
     </div>
    </section>


<!-- /BREADCRUMBS -->

    <!-- PAGE WITH SIDEBAR -->
<section class="page-section with-sidebar sub-page">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
              <div class="col-md-9 content car-listing" id="content">
                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Car Information</h3>
                <div class="car-big-card alt">
                 <div class="row">
                   <div class="col-md-8">
                     <div class="owl-carousel img-carousel">
                       <div class="item">
                        <a class="btn btn-zoom" href="{{URL::to($product_by_details->product_image)}}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                        <a href="../uploads/2018/09/10/Screenshot_12.png" data-gal="prettyPhoto">
                        <img class="img-responsive" src="{{URL::to($product_by_details->product_image)}}"alt=""/></a>
                       </div>
                    </div>
                    
                  </div>
                  <div class="col-md-4">
                      <div class="car-details">
                          <div class="list">
                              <ul>
                                  <li class="title">
                                      <h2> {{$product_by_details->product_name}} <span>{{$product_by_details->brand_name}}</span></h2>
                                      <li>{{$product_by_details->product_model}}</li>
                                      <li>Fuel Diesel / 1600 cm3 Engine</li>
                                      <li>Fuel Diesel / 1600 cm3 Engine</li>
                                      <li>Fuel Diesel / 1600 cm3 Engine</li>
                                  </li>
                        							                        

                              </ul>
                          </div>
                          
                          <div class="price">
                            <strong>$&nbsp;{{$product_by_details->price}}</strong> <span>/for 1 day(s)</span> <i class="fa fa-info-circle"></i>
                          </div>
                      </div>
                 </div>
             </div>
           </div>
<hr class="page-divider half transparent"/>

<p><p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in</p></p>

@include('page.booking')




                </div>
                <!-- /SIDEBAR -->

                <!-- CONTENT -->
                <div class="col-md-3 sidebar"  id="sidebar">
                        <!-- widget search  sidebar  -->

        <div class="widget shadow widget-details-reservation">
            <h4 class="widget-title"></h4>
            <div class="widget-content">

            </div>
        </div>


		

        <div class="widget shadow">
            <div class="widget-title"></div>
            <div class="testimonials-carousel">
                <div class="owl-carousel" id="testimonials">
                                    </div>
            </div>
        </div>
		

        <div class="widget shadow widget-helping-center">
            <h4 class="widget-title"></h4>
            <div class="widget-content">
                <p></p>
                <h5 class="widget-title-sub"></h5>
                <p><a href="mailto:"></a></p>
				            </div>
        </div>
		


                </div>
                <!-- /CONTENT -->

            </div>
        </div>
    </section>

    <section class="page-section contact dark">
        <div class="container">

            <!-- Get in touch -->

            <h2 class="section-title">
                <small>Feel Free to Say Hello!</small>
                <span>Get in Touch With Us</span>
            </h2>

            <div class="row">
                <div class="col-md-6">
                    <!-- Contact form -->
                    <form name="contact-form" method="post" action="#" class="contact-form alt" id="contact-form">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="outer required">
                                    <div class="form-group af-inner has-icon">
                                        <label class="sr-only" for="name">Name</label>
                                        <input type="text" name="name" id="name" placeholder="Name" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Name is required">
                                        <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="outer required">
                                    <div class="form-group af-inner has-icon">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="text" name="email" id="email" placeholder="Email" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Email is required">
                                        <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group af-inner has-icon">
                            <label class="sr-only" for="input-message">Message</label>
                            <textarea name="message" id="input-message" placeholder="Message" rows="4" cols="50" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Message is required"></textarea>
                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <input type="submit"
                                       name="submit" class="form-button form-button-submit btn btn-block btn-theme"
                                       id="submit_btn" value="Send message">
                            </div>
                        </div>

                    </form>
                    <!-- /Contact form -->
                </div>
                <div class="col-md-6">

                    <p>This is Photoshop&#039;s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>

                    <ul class="media-list contact-list">
                        <li class="media">
                            <div class="media-left"><i class="fa fa-home"></i></div>
                            <div class="media-body">Adress: 1600 Pennsylvania Ave NW, Washington, D.C.</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa"></i></div>
                            <div class="media-body">DC 20500, ABD</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-phone"></i></div>
                            <div class="media-body">Support Phone: 01865 339665</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-envelope"></i></div>
                            <div class="media-body">E mails: info@example.com</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-clock-o"></i></div>
                            <div class="media-body">Working Hours: 09:30-21:00 except on Sundays</div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-map-marker"></i></div>
                            <div class="media-body">View on The Map</div>
                        </li>
                    </ul>

                </div>
            </div>

            <!-- /Get in touch -->

        </div>
    </section>

</div>
<!-- /CONTENT AREA -->

<!-- FOOTER -->


    


<!-- /FOOTER -->

<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /WRAPPER -->

  <script src="../rentit/assets/js/all-js.min.js"></script>
  <script src="../cubic/plugins/components/icheck/icheck.min.js"></script>
  <script src="../cubic/plugins/components/icheck/icheck.init.js"></script>
  <script src="../rentit/assets/js/theme.js"></script>
<script>var rentit_obj = {"news_letter_widget":"https:\/\/lararent.alfafox.site\/ajax\/news_letter_widget","PreviewReservation":"https:\/\/lararent.alfafox.site\/ajax\/PreviewReservation","date_format":"MM\/DD\/YYYY","lang":"","last_cat":"popular-cars","global_map_styles":"","lat":"34.800155","longu":"33.030800","zum":"10","theme_url":"https:\/\/lararent.alfafox.site\/rentit","currency":"$","currency_pos":"left","coupon":"https:\/\/lararent.alfafox.site\/checkout\/coupon","reserved_date":["07\/20\/2019 09:07","08\/29\/2019 16:08","08\/30\/2019 16:08","10\/29\/2019 09:10","10\/30\/2019 09:10","10\/31\/2019 09:10","11\/01\/2019 09:11","11\/02\/2019 09:11","11\/03\/2019 09:11","11\/04\/2019 09:11","11\/05\/2019 09:11","11\/06\/2019 09:11","11\/14\/2019 09:11","11\/15\/2019 09:11","11\/16\/2019 09:11","11\/17\/2019 09:11","11\/18\/2019 09:11","11\/19\/2019 09:11","11\/20\/2019 09:11","11\/21\/2019 09:11","11\/22\/2019 09:11","11\/23\/2019 09:11","11\/24\/2019 09:11","11\/25\/2019 09:11","11\/26\/2019 09:11","12\/07\/2019 09:12","12\/08\/2019 09:12","12\/09\/2019 09:12","12\/10\/2019 09:12","12\/11\/2019 09:12","12\/12\/2019 09:12","12\/13\/2019 09:12","12\/14\/2019 09:12","12\/15\/2019 09:12","12\/16\/2019 09:12","12\/17\/2019 09:12","12\/18\/2019 09:12","12\/19\/2019 09:12","12\/20\/2019 09:12","12\/21\/2019 09:12","12\/22\/2019 09:12","12\/23\/2019 09:12","12\/24\/2019 09:12","12\/25\/2019 09:12","12\/26\/2019 09:12","12\/27\/2019 09:12","12\/28\/2019 09:12","12\/29\/2019 09:12","12\/30\/2019 09:12","12\/31\/2019 09:12","01\/01\/2020 09:01","02\/07\/2020 09:02","02\/08\/2020 09:02","02\/09\/2020 09:02","02\/10\/2020 09:02","02\/11\/2020 09:02","02\/19\/2020 09:02"]};</script>
  <script src="../rentit/assets/js/main.js"></script>
  <script src="../js/lang.js"></script>
  <script src="../rentit/assets/js/map_init.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwVuYiM-83l2IdjpT9uC0lg4jBm8-w4j8&amp;&amp;libraries=places&amp;callback=initialize_map&amp;ver=3"></script>

@endsection