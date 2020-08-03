@extends('Admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
    <section class="content" style="margin-top: 5%;">

      

      <!-- =========================================================== -->

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

      
        
    </section>


        
    </div>
</div>
<div class="box-body">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                       <table id="example2" class="table table-border table-hover"> 
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name Product</th>
                                <th>Pick Up</th>
                                <th>Date Pick Up</th>
                                <th>Time Pick Up</th>
                                <th>Date Drop Off</th>
                                <th>Time Drop off</th>
                                <th>Image</th>
                                <th>Etat confirmation</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                          <input class="form-control" type="hidden" name="id" value="{{ auth()->user()->id }}" require placeholder="Category Name" >
                           
                            @foreach( $all_order_info as $v_order)
                           @if($v_order->id == auth()->user()->id )
                            
                            
              <tr>
                <td>{{$v_order->order_id}}</td>
                <td class="center">{{$v_order->product_name}}</td>
                <td class="center">{{$v_order->pick_up}}</td>
                <td class="center">{{$v_order->date_pick_up}}</td>
                <td class="center">{{$v_order->time_pick_up}}</td>
                <td class="center">{{$v_order->date_drop_off}}</td>
                <td class="center">{{$v_order->time_drop_off}}</td>
                <td class="center"><img src="{{URL::to($v_order->product_image)}}" width="120px"; height="60px"></td>
               <td class="center">
                  @if($v_order->etat_conf == 1)
                     <span class="label label-success"><!-- {{$v_order->etat_conf}} -->Confirme</span>
                  @else
                     <span class="label label-danger"><!-- {{$v_order->etat_conf}} -->en attente</span>
                  @endif   
               </td>
               <td class="center">
                  @if($v_order->etat_conf==0)
                  <a class="btn btn-success" href="">
                    <i class="halflings-icon white thumbs-down">Confirme</i>  
                  </a>
                  @else
                  <a class="btn btn-danger" href="">
                    <i class="halflings-icon white thumbs-up">pas Conefirme</i>  
                  </a>
                  @endif
                  <a class="btn btn-primary" data-toggle="modal" data-target="#myModal_{{$v_order->order_id}}" href="" id="delete">
                    <i class="halflings-icon white trash">Details</i> 
                  </a>
                  <a class="btn btn-danger" href="{{URL::to('/delete_order/'.$v_order->order_id)}}" id="delete">
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

    
<script type="text/javascript">

  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection
