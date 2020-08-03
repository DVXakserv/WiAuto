@include('Wiauto.head')
@include('Wiauto.header')
<!--Carousel Wrapper-->
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{asset('image/1b2UXTl0rP4JIptlIbrc.jpg')}}"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption" style="text-align: center;  padding-bottom: 30%;">
        <h3 class="h3-responsive" style="font-size: 7rem; top: -2%; color: white;">Audi A7</h3>
        <p>Model 2019</p>
        <button type="button" class="btn btn-light btn-lg btn-radius" style="width: 30%; border-radius: 1rem;">Booking Now</button>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{asset('image/bVzX7l0WihL52AEq6wNl.jpg')}}"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption" style="text-align: center;  padding-bottom: 30%;">
        <h3 class="h3-responsive" style="font-size: 7rem; top: -2%; color: white;">Mercides</h3>
        <p>Model 2019</p>
        <button type="button" class="btn btn-light btn-lg btn-radius" style="width: 30%; border-radius: 1rem;">Booking Now</button>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<h2 style="text-align: center; margin-top: 2%;">الوكالات الاكثر تقيما </h2>
<!--================Home Banner Area =================-->
@include('WiAuto.agence')

<!--================End Home Banner Area =================-->
                        <h2 style="text-align: center; margin-top: 2%;">نبدة عن وي اطو</h2>


    <section class="section mt-4 card bg-gradient-info shadow ">
  <div class="container">
    <div class="row">
      <div class="col-md-6" style="margin-left: -9%;" >
        <div class="er_div_right " style="width: 110%; height: 100%;">
                <img  src="{{asset('image/ak.jpg')}}">
              </div>
      </div>
      <div class="col-md-6 col-lg-5 ml-auto d-flex align-items-center mt-4 mt-md-0">
       <div class="text-right">
                  <h1 class="mb-3 text-center text-white" style="line-height: 45px;font-size: 1.2rem;">
                    عندك وكالة تاجير السيارات 

                  </h1>

                  <h1 class="mb-3 text-center text-white text-center" style="line-height: 45px;font-size: 1.2rem;">
                    بغيتي تانتا تواكب التطور  او تزيد من عدد الزبناء
                  </h1>

                  <h1 class="mb-3 text-center text-white text-center" style="line-height: 45px;font-size: 1.2rem;">
                    ساهلة ماهلة مع wiauto
                  </h1>

                  <ul class="list-unstyled mt-0 px-0">
                    

                    <li class="py-2">
                      <div class="d-flex align-items-center">
                        <div>
                          <h3 class="mb-0 text-white text-center"> حدد الثمن و الوقت لي بغيتي تخدت فيه و المدينة ديالك</h3>
                        </div>
                        <div>
                          <div class="badge badge-circle bg-gradient-white text-primary ml-3">
                            <i class="fas fa-file-signature fa-fw badgeSize"></i>
                          </div>
                        </div>
                      </div>
                    </li>

                    <!-- <li class="py-2">
                      <div class="d-flex align-items-center">
                        <div>
                          <h3 class="mb-0 text-white text-center" style="line-height: 35px;">???? ?????? ??????? ?? ??? ????? ??????? .?? ?????? ?? ???? ?? ??? ???? ???</h3>
                        </div>
                        <div>
                          <div class="badge badge-circle bg-gradient-white text-primary ml-3">
                            <i class="fas fa-box-open fa-fw badgeSize"></i>
                          </div>
                        </div>
                      </div>
                    </li> -->
                    <li class="py- text-center">
                      <div class="d-flex align-items-center">
                        <div>
                          <h3 class="mb-0 text-white text-center">قبل الطلبات  ديال الزبناء  ديالك و تخلص في خدمتك</h3>
                        </div>
                        <div>
                          <div class="badge badge-circle bg-gradient-white text-primary ml-3">
                            <i class="fas fa-dollar-sign fa-fw badgeSize"></i>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <div class="mt-4">

                    <div class="row">
                      <div class="col-md-12">
                        <a href="" class="banner_btn ml-2 w-100">تسجل دابا ف وي اطو</a>
                      </div>
                    </div>
                  </div>
                </div>
      </div>
    </div>
  </div>
</section>



 <!--================Work Area =================-->
<section class="pb-0 pt-3 mt-3">
      <div class="container-fuild px-md-4 px-3 text-center">
        <h1 class="text-center mb-5" style="text-align: center; margin-top: 2%;"> لماذا وي اطو</h1>

        <div class="row justify-content-center py-3">
         
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow border-0">
              <div class="card-body">
                <div class="text-center">
                  <img src="https://liv.ma/assets/Images/money.svg" width="80" alt="">
                  <h4 class="py-2" style="color: #ffc107;">خدمة سريعة</h4>
                </div>
                <p style="text-align: center; font-style: inherit;">تمكنك منصة وي اطو من  سهولة اختبار الوكالة الانسب الك و اختيار  سيارة حسب  دوقكم و قدراتكم المادية عن طريق  حجزها لدى الوكالة التي اخترتها </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow border-0">
              <div class="card-body">
                <div class="text-center">
                  <img src="https://track.liv.ma/img/icon/notification.svg" width="80" alt="">
                  <h4 class="py-2" style="color: #ffc107;">تصاميم احترافية و عالية الدقة</h4>
                </div>
                <p style="text-align: center; font-style: inherit;">تصميم المتجر و مطهره هو اول  انطباع  يكون لدى لو العميل لدى وفرنل لكم تشكيلة من التصاميم عالية  الاحترافية و الدقة تناسب دوقكم مع امكانية تغير التصاميم </p>
              </div>
            </div>
          </div>    
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow border-0">
              <div class="card-body">
                <div class="text-center">
                  <img src="https://track.liv.ma/img/icon/shield.svg" width="80" alt="">
                  <h4 class="py-2" style="color: #ffc107;">سهولة و امان</h4>
                </div>
                <p style="text-align: center; font-style: inherit;">اعتمدنا في تصميم امنصة في الاساس على حل المشاكل  التي يتعرض لها الزبناء .بحيث عملنا جاههيدين ىعلى توفير اكبر عدد من الوكالات التي تعمل بشكل قانوني مع امان اكبر.</p>
              </div>
            </div>
          </div>     
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow border-0">
              <div class="card-body">
                <div class="text-center">
                  <img src="https://liv.ma/assets/Images/checkmark.svg" width="80" alt="">
                  <h4 class="py-2" style="color: #ffc107;">وكالات موثوقة</h4>
                </div>
                <p style="text-align: center; font-style: inherit;">تمكنك منصة وي اطو  من العثور على العديد من الوكالات في مختلف مناطق المغرب  مع  توفير الامان .</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow border-0">
              <div class="card-body">
                <div class="text-center">
                  <img src="{{asset('image/car_rental-512.png')}}" width="80" alt="">
                  <h4 class="py-2" style="color: #ffc107;">وكالات في كافة انحاء المغرب</h4>
                </div>
                <p style="text-align: center; font-style: inherit;">????? ???? ????? ??? ??????? ?? ?????? ??? ???? ???????? ???????? ????? ?? 30 ????? ? </p>
              </div>
            </div>
          </div>    
           <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card shadow border-0" >
              <div class="card-body">
                <div class="text-center">
                  <img src="https://track.liv.ma/img/icon/map.svg" width="80" alt="">
                  <h4 class="py-2" style="font-family: cursive; color: #ffc107;">تقريب الخدمة</h4>
                </div>
                <p style="text-align: center; font-style: inherit;">تمكنك المنصة من  اختيار الوكالة الاقراب لمنزلك او مكان تواجدك مع سهولة استلام السيارة  مع  اختيار  السباراة الانسب اليك</p>
              </div>
            </div> 
          </div>
                                            
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->

          <h1 class="py-2 mb-3"style="text-align: center; font-style: inherit;">اراء العملاء حول  منصة  Wiauto </h1>
<section class="testimonials" style="background-color: #EDF6FF;">

      <h2 class="pb-5" style="text-align: center;padding-top: 3%;">نحن نقدر جميع التعليقات  التي نقدمها - ايجابية  و بناء - ونستمتع بسماع  ارائكم</h2>
  <div class="container">

      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <div class="float-left">
                    <div class="star1" style="font-size: 15px;margin-left: 50%;width: 100%;">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div></br><br>
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">LARA ATKINSON</div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <div class="float-left">
                    <div class="star1" style="font-size: 15px;margin-left: 50%;width: 100%;">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div></br><br>
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">LARA ATKINSON</div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <div class="float-left">
                    <div class="star1" style="font-size: 15px;margin-left: 50%;width: 100%;">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div></br><br>
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">LARA ATKINSON</div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <div class="float-left">
                    <div class="star1" style="font-size: 15px;margin-left: 50%;width: 100%;">
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star" style="color: yellow"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div></br><br>
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">LARA ATKINSON</div>
            </div>
            <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->

          



@include('Wiauto.footer')


<style>

  .shadow-effect {
        background: #fff;
        padding: 20px;
        border-radius: 4px;
        text-align: center;
  border:1px solid #ECECEC;
        box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
    }
    #customers-testimonials .shadow-effect p {
        font-family: inherit;
        font-size: 17px;
        line-height: 1.5;
        margin: 0 0 17px 0;
        font-weight: 300;
    }
    .testimonial-name {
        margin: -17px auto 0;
        display: table;
        width: auto;
        background: #3190E7;
        padding: 9px 35px;
        border-radius: 12px;
        text-align: center;
        color: #fff;
        box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
    }
    #customers-testimonials .item {
        text-align: center;
        padding: 50px;
        margin-bottom:80px;
        opacity: .2;
        -webkit-transform: scale3d(0.8, 0.8, 1);
        transform: scale3d(0.8, 0.8, 1);
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
    #customers-testimonials .owl-item.active.center .item {
        opacity: 1;
        -webkit-transform: scale3d(1.0, 1.0, 1);
        transform: scale3d(1.0, 1.0, 1);
    }
    .owl-carousel .owl-item img {
        transform-style: preserve-3d;
        max-width: 90px;
        margin: 0 auto 17px;
    }
    #customers-testimonials.owl-carousel .owl-dots .owl-dot.active span,
#customers-testimonials.owl-carousel .owl-dots .owl-dot:hover span {
        background: #3190E7;
        transform: translate3d(0px, -50%, 0px) scale(0.7);
    }
#customers-testimonials.owl-carousel .owl-dots{
  display: inline-block;
  width: 100%;
  text-align: center;
}
#customers-testimonials.owl-carousel .owl-dots .owl-dot{
  display: inline-block;
}
    #customers-testimonials.owl-carousel .owl-dots .owl-dot span {
        background: #3190E7;
        display: inline-block;
        height: 20px;
        margin: 0 2px 5px;
        transform: translate3d(0px, -50%, 0px) scale(0.3);
        transform-origin: 50% 50% 0;
        transition: all 250ms ease-out 0s;
        width: 20px;
    }
  .owl-carousel .owl-item img {
        width: 60px !important;
        height:60px !important;
      }

      .testi_item {
    padding: 30px 0;
}
.owl-carousel .owl-stage-outer {

    position: relative;
    overflow: hidden;
    -webkit-transform: translate3d(0,0,0);

}

.testi_item .media {

    border-radius: 10px;
    padding: 40px;
    background: 

    #fff;
    transition: all .3s linear 0s;

}

.media {

    display: flex;
    align-items: flex-start;

}



.owl-carousel .owl-item {

    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-touch-callout: none;

}



.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel-item{
  height: 100%;
    text-align: center;
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.bs-example{
  margin: 20px;
}

.pb-2, .py-2 {
    padding-bottom: .5rem !important;
}
.mt-3, .my-3 {
    margin-top: 1rem !important;
}
.bg-gradient-info {
    background: linear-gradient(87deg,#13bbda,#563d7c) !important;
}

.shadow {
    box-shadow: 0 0 2rem 0 rgba(136,152,170,.15) !important;
}
.border-0 {
    border: 0 !important;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.05);
    border-radius: .375rem;
}

.pl-0, .px-0 {
    padding-left: 0 !important;
}

.pb-0, .py-0 {
    padding-bottom: 0 !important;
}

.pr-0, .px-0 {
    padding-right: 0 !important;
}
.pt-0, .py-0 {
    padding-top: 0 !important;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.5rem;
}
.card {
    word-wrap: break-word;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.er_div_right {
    float: left;
    width: 50%;
}
.card {
    word-wrap: break-word;
}

.er_div_right img {
    height: 100% !important;
    object-fit: cover;
    width: 100%;
}
img, svg {
    vertical-align: middle;
}

.er_div_left {
    float: right;
    width: 50%;
    padding: 20px 50px;
}
.text-right {
    text-align: right !important;
}
.mb-3, .my-3 {
    margin-bottom: 0.9rem !important;
}

.text-white {
    color: #fff !important;
}

.text-center {
    text-align: center !important;
}

h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 600;
    line-height: 1.5;
    color: #32325d;
}

.pl-0, .px-0 {
    padding-left: 0 !important;
    padding-right: 0 !important;
}

.mt-0, .my-0 {
    margin-top: 0 !important;
}

.list-inline, .list-unstyled {
    padding-left: 0;
    list-style: none;
}

.pb-2, .py-2 {
    padding-bottom: .5rem !important;
    padding-top: .5rem !important;
}

.list-unstyled {
    list-style: none;
}

.align-items-center {
    align-items: center !important;
}
.d-flex {
    display: flex !important;
}
.list-unstyled {
    list-style: none;
}

.text-primary {
    color: #5e72e4 !important;
}

.badge-circle {
    width: 4.5rem !important;
    height: 4.5rem !important;
}

.badge-circle {
    text-align: center;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    width: 8rem;
    height: 2rem;
    font-size: .875rem;
}

.badge {
    text-transform: uppercase;
}

.bg-gradient-neutral, .bg-gradient-white {
    background: linear-gradient(87deg,#fff,#fff) !important;
}

.ml-3, .mx-3 {
    margin-left: 1rem !important;
}

.badge {
    display: inline-block;
    padding: .35rem .375rem;
    font-size: 66%;
    font-weight: 600;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .375rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;    
}

.badge-circle {
    font-size: .875rem;
    display: inline-flex;
    width: 4rem;
    height: 4rem;
    text-align: center;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
}
</style>

<script>
  jQuery(document).ready(function($) {
            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 0,
                autoplay: true,
                dots:true,
                autoplayTimeout: 8500,
                smartSpeed: 450,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 2
                  },
                  1170: {
                    items: 3
                  }
                }
            });
          });
</script>
       