@extends('page.Admin.layouts.app')
@section('content')
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

           {{---------------}}

           <form action="{{ url('/update-slider',$slider_info->id_slider) }}" method="post" enctype="multipart/form-data">
               {{csrf_field() }}
               <div class="box-body">
                   <div class="row">
                       <div class="col-xs-12">
                           <div class="box">
                               <div class="box-header">
                                   <h3 class="box-title">Hover Data Table</h3>

                                   <a href="" class="btn btn-primary btn-xs pull-right">Slider List</a>
                               </div>

                               <div class="box-body">
                                   <div class="form-group">
                                    <input class="form-control" type="hidden" name="id" value="{{ auth()->user()->id }}" require placeholder="Category Name" >
                                       <label> Image Slider</label>
                                       <input class="form-control" type="file" type="file" name="slider_image"  value="{{ $slider_info->slider_image }}" require placeholder="Image">
                                   </div>
                                </div> 

                               <div class="box-body">
                                   <div class="form-group">
                                       <label>slider Description</label>
                                       <input class="form-control" type="text" name="slider_description" value="{{ $slider_info->slider_description }}" require placeholder="Description" v-model="description">
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
           {{---------------}}

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

@endsection