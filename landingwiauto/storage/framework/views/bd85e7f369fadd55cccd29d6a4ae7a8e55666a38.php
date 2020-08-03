<?php $__env->startSection('content'); ?>
<section>
    <div class="box">
        <div class="box-header with-border">

           <h3>List</h3>
           <div class="box-tools pull-right">
               <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                   <i class="fa fa-minus"></i>
               </button>
               <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                   <i class="fa fa-times"></i>
               </button>
           </div>

           

           <form action="<?php echo e(url('/update-product',$product_info->product_id)); ?>" method="post" enctype="multipart/form-data">
               <?php echo e(csrf_field()); ?>

               <div class="box-body">
                   <div class="row">
                       <div class="col-xs-12">
                           <div class="box">
                               <div class="box-header">
                                   <h3 class="box-title">Hover Data Table</h3>

                                   <a href="" class="btn btn-primary btn-xs pull-right">Product List</a>
                               </div>

                               <div class="box-body">
                                   <div class="form-group">
                                   	<input class="form-control" type="hidden" name="id" value="<?php echo e(auth()->user()->id); ?>" require placeholder="Category Name" >
                                       <label> Product Name</label>
                                       <input class="form-control" type="text" name="product_name" value="<?php echo e($product_info->product_name); ?>" require placeholder="Category Name" v-model="category_name">
                                   </div>
                               </div>
                               <div class="form-group">
                                       <label> Brand Name</label>
                                       <select class="form-control" id="brand_id" name="brand_id">
                                         <option value="">----------Select brand----------------</option>
                                         <?php
                            $all_published_brand=DB::table('brand')
                                                    ->get();
                                foreach($all_published_brand as $v_brand){?>
                  <option value="<?php echo e($v_brand->brand_id); ?>"><?php echo e($v_brand->brand_name); ?></option>
                  <?php } ?>
                                       </select>
                                   </div>
                                   <div class="form-group">
                                       <label> Category Name</label>
                                       <select class="form-control" id="category_id" name="category_id">
                                         <option value="">----------Select Category----------------</option>
                                         <?php
                            $all_published_category=DB::table('category')
                                                    ->get();
                                foreach($all_published_category as $v_category)
                                  if($v_category->id == auth()->user()->id){?>
                  <option value="<?php echo e($v_category->category_id); ?>"><?php echo e($v_category->category_name); ?></option>
                  <?php } ?>
                                       </select>
                                   </div>

                               <div class="box-body">
                                   <div class="form-group">
                                       <label>Product short Description</label>
                                       <input class="form-control" type="text" name="product_short_description" value="<?php echo e($product_info->product_short_description); ?>" require placeholder="Description" v-model="description">
                                   </div>
                               </div>

                               <div class="box-body">
                                   <div class="form-group">
                                       <label>Product long Description</label>
                                       <input class="form-control" type="text" name="product_long_description" value="<?php echo e($product_info->product_long_description); ?>" require placeholder="Description" v-model="description">
                                   </div>
                               </div>

                               <div class="box-body">
                                   <div class="form-group">
                                       <label> Product Model</label>
                                       <input class="form-control" type="text" name="product_model" value="<?php echo e($product_info->product_model); ?>" require placeholder="Category Name" v-model="category_name">
                                   </div>
                               </div>

                               <div class="box-body">
                                   <div class="form-group">
                                       <label> Product Price</label>
                                       <input class="form-control" type="text" name="price" value="<?php echo e($product_info->price); ?>" require placeholder="Category Name" v-model="category_name">
                                   </div>
                               </div>

                               <div class="box-body">
                                   <div class="form-group">
                                       <label> Image</label>
                                       <input class="form-control" type="file" type="file" name="product_image"  value="<?php echo e(old('image')); ?>" require placeholder="Image">
                                   </div>
                                </div>  

                               <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>
                           </div>
                           <div class="box-footer">
                               <button class="btn btn-primary btn-md" @click="handelsubmite"> save</button>
                           </div>
                       </div>


               </div>
           </from>
           

          <div>
    </div>
</section>
<!--
<script>
  export default {
    data(){
      return{
        category_name:"",
        description:"",
        image:""
      }
    },
    handelsubmite(e){
      e.preventDefault()
      if(this.category_name !==)
    }
  }
</script>-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('page.Admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>