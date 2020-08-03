@extends('page.layout')
@section('content')






<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->

    
<section id="breadcrumbs__0" class="page-section breadcrumbs
text-center pb-module-section">

    <div class="container">
        <div class="page-header">
            <h1>CAR LISTING</h1>
        </div>
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}">Home </a></li>
            <li class="active">CAR LISTING</li>
        </ul>
    </div>
</section>


<!-- /BREADCRUMBS -->

    <!-- PAGE WITH SIDEBAR -->
            <section class="page-section with-sidebar sub-page">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                <div class="col-md-9 content car-listing" id="content">
                    



    		
<?php
                                $all_product=DB::table('product')
                                                ->where('publication_status',1)
                                                ->get();
                                    foreach($all_product as $v_product){?>

        <div class="thumbnail no-border no-padding thumbnail-car-card clearfix ">
            <div class="media">

                                    <a class="media-link" href="uploads/2019/01/08/2014_Volkswagen.jpg" data-gal="prettyPhoto">
                        <img src="{{$v_product->product_image}}" style=" width:200px; height:120px">
                    </a>

                            </div>
            <div class="caption">
                <div class="rating">
	                 <span class="star active"></span> <span class="star active"></span> <span class="star active"></span> <span class="star active"></span> <span class="star active"></span>
                </div>
                <h4 class="caption-title" name="product_name"><a
                            href="products/vw-polo-1-6-tdi-comfortline-new.html" name="product_name">{{$v_product->product_name}}</a>
                </h4>
                <h5 class="caption-title-sub">Start from $&nbsp;{{$v_product->price}} /per a day
                </h5>
                <div class="caption-text">
                    Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</div>


                <table class="table">
                    <tbody>
                    <tr>
						                                     <td><i class="fa fa-car"></i> {{$v_product->product_model}}</td>
						                                             <td><i class="fa fa-dashboard"></i> Diesel</td>
						                                             <td><i class="fa fa-cog"></i> Auto</td>
						                                             <td><i class="fa fa-road"></i> 25000</td>
						        
                        <td class="buttons"><a class="btn btn-theme"
                                               href="{{URL::to('/view_product/'.$v_product->product_id)}}">
                                Rent It

                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    <?php }?>



    		


        

    



<!-- /Blog posts -->
    <!-- Pagination -->
    
    <!-- /Pagination -->




                </div>
                <!-- /SIDEBAR -->

                <!-- CONTENT -->
                <div class="col-md-3 sidebar"  id="sidebar">
                        <!-- widget search  sidebar  -->
<div class="widget shadow widget-find-car">
    <h4 class="widget-title"></h4>
    <div class="widget-content">
        <!-- Search form -->
        <div class="form-search light">
            <form action="{{url('search')}}">
                
                <div class="form-group selectpicker-wrapper">
                    <label>Select Category</label>
                    <select
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" name="product_name" title="Select" >
                        <option value="0" name="product_name">Select Category </option>
                                                                                    <?php
                            $all_published_product=DB::table('product')
                                                    ->get();
                                foreach($all_published_product as $v_product){?>
                                                            <option name="product_name"  value="{{$v_product->product_id}}">{{$v_product->product_name}}</option>
                                                        <?php }?>
                                                                        </select>
                </div>

                <div class="form-group selectpicker-wrapper">
                    <label>Select Type</label>
                    <select
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="Select" name="group">
                        <option value="0">Select Type</option>
                                                                                    <option   value="luxury-cars">Luxury Cars</option>
                                                            <option   value="premium-cars">Premium Cars</option>
                                                            <option   value="cars-economic">Economic cars</option>
                                                            <option   value="business-cars">Business cars</option>
                                                                        </select>
                </div>

                <button type="submit" id="formSearchSubmit3" class="btn btn-submit btn-theme btn-theme-dark btn-block">
                    Find Car
                </button>

            </form>
        </div>
        <!-- /Search form -->
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

   

</div>
<!-- /CONTENT AREA -->

<!-- FOOTER -->


 


<!-- /FOOTER -->
@endsection