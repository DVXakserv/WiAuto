
<div class="back">
<div class="item slide3 ver3" style="margin-left: 50%; ">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <div class="caption-content">
                                        <!-- Search form -->
                                        <div class="form-search light">
                                            <form action="{{ url('/save-order') }}" method="POST">
                                                {{csrf_field() }}

                                                <div class="form-title">
                                                    <i class="fa fa-globe"></i>
                                                    <h2>Search for Cheap Rental Cars Wherever Your Are</h2>
                                                </div>

                                                <div class="row row-inputs">
                                                    <div class="container-fluid">
                                                        <div class="col-sm-12">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchUpLocation3">Select Your Car</label>
                                                                <select name="product_id"
                                                                        class="selectpicker input-price"
                                                                        data-live-search="true" data-width="100%"
                                                                        data-toggle="tooltip"
                                                                        id="formSearchUpLocation3">
                                                                              <?php
                                                                $all_published_product=DB::table('product')
                                                                                        ->get();
                                                                    foreach($all_published_product as $v_product){?>
                                                                             <option value="{{$v_product->product_id}}">{{$v_product->product_name}}</option>

                                                                <?php }?>            
                                                                    <span  class="form-control-icon"><i
                                                                            class="fa fa-map-marker"></i></span>
                                                                        </select>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row row-inputs">
                                                    <div class="container-fluid">
                                                        <div class="col-sm-12">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchUpLocation3">Pick UP</label>
                                                                <div class="form-group">
                                                                   <input name="pick_up" id="fd-email" title="Email is required" data-toggle="tooltip" class="form-control alt" type="text" value="" placeholder="pick_up:*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <div class="row row-inputs">
                                                    <div class="container-fluid">
                                                        <div class="col-sm-7">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchUpDate3">Picking Up Date</label>
                                                                <input autocomplete="off"
                                                                       name="date_pick_up"
                                                                       type="text"
                                                                       class="PickingUpDate form-control datepicker"
                                                                       id="formSearchUpDate3" placeholder="dd/mm/yyyy"
                                                                       value=""
                                                                >
                                                                <span class="form-control-icon"><i
                                                                            class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-group has-icon has-label selectpicker-wrapper">
                                                                <label>Picking Up Hour</label>
                                                                <select
                                                                        name="time_pick_up"
                                                                        class="selectpicker input-price"
                                                                        data-live-search="true" data-width="100%"
                                                                        data-toggle="tooltip" title="Select">

                                                                                                                                                                                                                                                                                            <option
                                                                                 value="9:00 AM">9:00 AM</option>
                                                                                                                                                    <option
                                                                                 value="10:00 AM">10:00 AM</option>
                                                                                                                                                    <option
                                                                                 value="10:30 AM">10:30 AM</option>
                                                                                                                                                    <option
                                                                                 value="4:00 PM">4:00 PM</option>
                                                                                                                                                    <option
                                                                                 value="4:15 PM">4:15 PM</option>
                                                                                                                                                    <option
                                                                                 value="4:30 PM">4:30 PM</option>
                                                                                                                                                    <option
                                                                                 value="4:45 PM">4:45 PM</option>
                                                                                                                                                    <option
                                                                                 value="5:00 PM">5:00 PM</option>
                                                                                                                                            
                                                                </select>

                                                                <span class="form-control-icon"><i
                                                                            class="fa fa-clock-o"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-inputs">
                                                    <div class="container-fluid">
                                                        <div class="col-sm-7">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchOffDate3">Dropping Off Date</label>
                                                                <input type="text" name="date_drop_off" 
                                                                       class="form-control datepicker DroppingOffDate"
                                                                       id="formSearchOffDate3" placeholder="dd/mm/yyyy">
                                                                <span class="form-control-icon"><i
                                                                            class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-group has-icon has-label selectpicker-wrapper">
                                                                <label>Dropping Off Hour</label>
                                                                <select name="time_drop_off"
                                                                        class="selectpicker input-price"
                                                                        data-live-search="true" data-width="100%"
                                                                        data-toggle="tooltip" title="Select">
                                                                                                                                                                                                                        <option
                                                                                 value="9:00 AM">9:00 AM</option>
                                                                                                                                                    <option
                                                                                 value="10:00 AM">10:00 AM</option>
                                                                                                                                                    <option
                                                                                 value="10:30 AM">10:30 AM</option>
                                                                                                                                                    <option
                                                                                 value="4:00 PM">4:00 PM</option>
                                                                                                                                                    <option
                                                                                 value="4:15 PM">4:15 PM</option>
                                                                                                                                                    <option
                                                                                 value="4:30 PM">4:30 PM</option>
                                                                                                                                                    <option
                                                                                 value="4:45 PM">4:45 PM</option>
                                                                                                                                                    <option
                                                                                 value="5:00 PM">5:00 PM</option>
                                                                                                                                            
                                                                </select>
                                                                <span class="form-control-icon"><i
                                                                            class="fa fa-clock-o"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                

                                                <div class="row row-inputs">
                                                    <div class="container-fluid">
                                                        
                                                        <div class="col-sm-12">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchOffLocation3">Name</label>
                                                                <div class="form-group">
                                                                   <input name="name" id="fd-email" title="Email is required" data-toggle="tooltip" class="form-control alt" type="text" value="" placeholder="Your Name:*">
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchOffLocation3">Email</label>
                                                                <div class="form-group">
                                                                   <input name="email" id="fd-email" title="Email is required" data-toggle="tooltip" class="form-control alt" type="text" value="" placeholder="Your Email Address:*">
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchOffLocation3">Mobile</label>
                                                                <div class="form-group">
                    <input name="telephone" id="fd-email" title="Email is required" data-toggle="tooltip" class="form-control alt" type="text" value="" placeholder="Your Number Phone:*">
                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-inputs">
                                                    <div class="container-fluid">
                                                        
                                                        <div class="col-sm-12">
                                                            <div class="form-group has-icon has-label">
                                                                <label for="formSearchOffLocation3">Age</label>
                                                                <div class="form-group">
                    <input name="age" id="fd-email" title="Email is required" data-toggle="tooltip" class="form-control alt" type="text" value="" placeholder="Your Age:*">
                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row row-submit">
                                                    <div class="container-fluid">
                                                        <div class="inner">
                                                            <i class="fa fa-plus-circle"></i> 
                                                            <button type="submit" id="formSearchSubmit3"
                                                                    class="btn btn-submit ripple-effect btn-theme pull-right">Book Your Car</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /Search form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<style type="text/css">
    .back{
        background-image: url("image/bVzX7l0WihL52AEq6wNl.jpg");
        background-size: cover;
    }
</style>