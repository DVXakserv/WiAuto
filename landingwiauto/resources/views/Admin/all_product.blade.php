
@extends('page.Admin.layouts.app')
@section('content')


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
                        <h3 class="box-title">Product Information</h3>
                        <a href="" class="btn btn-primary btn-sm pull-right">New Product</a>
                    </div>
                    <div class="box-body">
                       <table id="example2" class="table table-border table-hover"> 
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name Product</th>
                                <th>Name Brand</th>
                                <th>Name Category</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Image</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                          <input class="form-control" type="hidden" name="id" value="{{ auth()->user()->id }}" require placeholder="Category Name" >
                           
                            @foreach( $all_product_info as $v_product)
                           @if($v_product->id == auth()->user()->id )
                            
                            
              <tr>
                <td>{{$v_product->product_id}}</td>
                <td class="center">{{$v_product->product_name}}</td>
                <td class="center">{{$v_product->brand_name}}</td>
                <td class="center">{{$v_product->category_name}}</td>
                <td class="center">{{$v_product->product_short_description}}</td>
                <td class="center">{{$v_product->product_long_description}}</td>
                <td class="center"><img src="{{URL::to($v_product->product_image)}}" width="120px"; height="60px"></td>
                <td class="center">
                  @if($v_product->publication_status == 1)
                     <span class="label label-success">Active</span>
                  @else 
                     <span class="label label-danger">Unactive</span>
                  @endif   
                </td>
                <td class="center">
                  @if($v_product->publication_status==1)
                  <a class="btn btn-success" href="{{URL::to('/unactive_product/'.$v_product->product_id)}}">
                    <i class="halflings-icon white thumbs-down">Down</i>  
                  </a>
                  @else
                  <a class="btn btn-danger" href="{{URL::to('/active_product/'.$v_product->product_id)}}">
                    <i class="halflings-icon white thumbs-up">Up</i>  
                  </a>
                  @endif
                  <a class="btn btn-info" href="{{URL::to('/edit_product/'.$v_product->product_id)}}">
                    <i class="halflings-icon white edit">Edit</i>  
                  </a>
                  <a class="btn btn-danger" href="{{URL::to('/delete_product/'.$v_product->product_id)}}" id="delete">
                    <i class="halflings-icon white trash">Delete</i> 
                  </a>
                </td>
              </tr>
              @endif
              @endforeach
                        </tbody>
                        
                        
                       </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
