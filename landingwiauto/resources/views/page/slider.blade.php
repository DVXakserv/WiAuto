<section class="page-section no-padding slider">
    <div class="container full-width">

        <div class="main-slider">
            <div class="owl-carousel" id="main-slider">
                <!-- Slide 2 -->
                
                <!-- /Slide 2 -->
                <!-- Slide 1 -->
                <?php
                                $all_product=DB::table('product')
                                                ->where('publication_status',1)
                                                ->get();
                                    foreach($all_product as $v_product){?>
                <div class="item slide1 ver1" style="background-image: url({{$v_product->product_image}});">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <div class="caption-content">
                                        <h2 class="caption-title">All Discounts Just For You</h2>
                                        <h3 class="caption-subtitle">Find Best Rental Car</h3>
                                        <!-- Search form -->
                                        <div class="row">
                                            <div class="col-sm-12 col-md-10 col-md-offset-1">

                                                <div class="form-search dark">
                                                    <form action="https://lararent.alfafox.site/products" method="get">
                                                        <div class="form-title">
                                                            <i class="fa fa-globe"></i>
                                                            <h2>Search for Cheap Rental Cars Wherever Your Are</h2>
                                                        </div>

                                                        <div class="row row-inputs">
                                                            <div class="container-fluid">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group has-icon has-label">
                                                                        <label for="formSearchUpLocation">Picking Up Location</label>
                                                                        <select name="PickingUpLocation" class="selectpicker input-price"  data-live-search="true" data-width="100%" data-toggle="tooltip"
                                                                          id="formSearchUpLocation">
                                                                          <?php
                                $all_product=DB::table('product')
                                                ->where('publication_status',1)
                                                ->get();
                                    foreach($all_product as $v_product){?>
                                                                                    <option>{{$v_product->product_name}}</option>
                                                                                
<?php }?>
                                                                                

                                                                                                                                                                                                                                    </select>
                                                                        <span class="form-control-icon"><i
                                                                                    class="fa fa-map-marker"></i></span>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>


                                                        <div class="row row-submit">
                                                            <div class="container-fluid">
                                                                <div class="inner">
                                                                    <i class="fa fa-plus-circle"></i> 
                                                                    <button type="submit" id="formSearchSubmit"
                                                                            class="btn btn-submit btn-theme pull-right">Find Car</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /Search form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
                <!-- /Slide 1 -->



                <!-- Slide 3 -->
                
                <!-- /Slide 3 -->

                <!-- Slide 4 -->
               
                <!-- /Slide 4 -->

            </div>
        </div>

    </div>
</section>