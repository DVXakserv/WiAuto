<?php $__env->startSection('content'); ?>
<?php echo $__env->make('slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


     <section class="page-section">
    <div class="container">

        <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="100ms">
            <small>What a Kind of Car You Want</small>
            <span>Great Rental Offers for You</span>

        </h2>

        <div class="tabs wow fadeInUp" data-wow-offset="70" data-wow-delay="300ms">
            <ul id="tabs" class="nav">
                <?php
                                $all_product=DB::table('category')
                                                ->where('publication_status',1)
                                                ->get();
                                    foreach($all_product as $v_product){?>
                <li class="active">
                    <a href="#tab-best-offers" data-toggle="tab">AutoMatque</a>
                </li>
                <li class="">
                    <a href="#tab-economic-cars" data-toggle="tab">All</a>
                </li>
                <li>
                    <a href="#tab-popular-cars" data-toggle="tab">mécanique</a>
                </li>
            <?php } ?>
            </ul>
        </div>
        <section class="inventory py-5" id="inventory">
           <div class="container">
            <!-- cars -->
            <div class="row">
                <!-- single car -->
                <?php
                                $all_product=DB::table('product')
                                                ->where('publication_status',1)
                                                ->get();
                                    foreach($$product_by_category as $v_product){?>
                <div data-aos="fade-up"  data-aos-anchor-placement="center-bottom" class="col-10 mx-auto my-3 col-md-6 col-lg-4" >
                    <div class="thumbnail no-border no-padding thumbnail-car-card">
                     <div class="media">
                       <a class="media-link" data-gal="prettyPhoto"href="uploads/2018/09/10/Kaptur-packshot_1536x864.jpg.ximg.l_full_m.smart.jpg">
                        <img src="<?php echo e($v_product->product_image); ?>" alt="" style="height: 180px;" />
                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                       </a>
                                                        
                     </div>
                     <div class="caption text-center">
                     <h4 class="caption-title"><a href="#"><?php echo e($v_product->product_name); ?></a>
                     </h4>
                     <div class="caption-text">Start from $ <?php echo e($v_product->price); ?>/per a day
                     </div>
                     <div class="buttons">
                     <a class="btn btn-theme ripple-effect" href="<?php echo e(URL::to('/view_product/'.$v_product->product_id)); ?>">  Rent It</a>
                     </div>
                     <table class="table">
                         <tr>
                             <td><i class="fa fa-car"></i><?php echo e($v_product->product_model); ?></td>
                             <td><i class="fa fa-dashboard"></i> Diesel</td>
                             <td><i class="fa fa-cog"></i> Auto</td>
                             <td><i class="fa fa-road"></i> 25000</td>                                                
                         </tr>
                     </table>
                     </div>
                </div>
                </div>
               <?php }?>
                <!-- end of single car -->

               
            </div>
        </div>
    </section>
    </div>
</section>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>