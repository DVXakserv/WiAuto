    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Details Order</h4>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
               <?php echo e(csrf_field()); ?>

               <div class="box-body">
                   <div class="row">
                       <div class="col-xs-12">
                           <div class="box">
                               <div class="box-header">
                                   <h3 class="box-title">Hover Data Table</h3>

                                   <a href="" class="btn btn-primary btn-xs pull-right">Brand List</a>
                               </div>

                               <div class="box-body">
                                   <div class="form-group">
                                    <input class="form-control" type="hidden" name="id" value="" require placeholder="Category Name" >
                                       <label> Brand Name</label>
                                       <input class="form-control" type="text" name="brand_name" require placeholder="Category Name" v-model="category_name" value="<?php echo e($order_info->order_id); ?>">
                                   </div>
                               </div>

                               <div class="box-body">
                                   <div class="form-group">
                                       <label>Brand Description</label>
                                       <input class="form-control" type="text" name="brand_description" value="" require placeholder="Description" v-model="description">
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
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>