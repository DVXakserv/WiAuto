<?php $__env->startSection('content'); ?>


<section class="content">
  <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">List</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i>
            </button>
        </div>
    </div>
  </div>
    

    <div class="box-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Category Information</h3>
                        <a href="" class="btn btn-primary btn-sm pull-right">New Category</a>
                    </div>
                    <div class="box-body">
                       <table id="example2" class="table table-border table-hover"> 
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                          <input class="form-control" type="hidden" name="id" value="<?php echo e(auth()->user()->id); ?>" require placeholder="Category Name" >
                           
                            <?php $__currentLoopData = $all_slider_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($v_slider->id == auth()->user()->id ): ?>
                            
                            
              <tr>
                <td><?php echo e($v_slider->id_slider); ?></td>
                <td class="center"><img src="<?php echo e(URL::to($v_slider->slider_image)); ?>" width="120px"; height="60px"></td>
                <td class="center"><?php echo e($v_slider->slider_description); ?></td>
                <td class="center">
                  <?php if($v_slider->publication_status==1): ?>
                     <span class="label label-success"><!-- <?php echo e($v_slider->publication_status); ?> -->Active</span>
                  <?php else: ?>
                     <span class="label label-danger"><!-- <?php echo e($v_slider->publication_status); ?> -->Unactive</span>
                  <?php endif; ?>   
                </td>
                <td class="center">
                  <?php if($v_slider->publication_status==1): ?>
                  <a class="btn btn-success" href="<?php echo e(URL::to('/unactive_slider/'.$v_slider->id_slider)); ?>">
                    <i class="halflings-icon white thumbs-down"></i>  
                  </a>
                  <?php else: ?>
                  <a class="btn btn-danger" href="<?php echo e(URL::to('/active_slider/'.$v_slider->id_slider)); ?>">
                    <i class="halflings-icon white thumbs-up"></i>  
                  </a>
                  <?php endif; ?>
                  <a class="btn btn-info" href="<?php echo e(URL::to('/edit_slider/'.$v_slider->id_slider)); ?>">
                    <i class="halflings-icon white edit"></i>  
                  </a>
                  <a class="btn btn-danger" href="<?php echo e(URL::to('/delete_slider/'.$v_slider->id_slider)); ?>" id="delete">
                    <i class="halflings-icon white trash"></i> 
                  </a>
                </td>
              </tr>
              <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        
                        
                       </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>