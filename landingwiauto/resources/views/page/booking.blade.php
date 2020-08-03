
<form action="{{ url('/save-order') }}" method="POST" class="form-booking_a_car" enctype="multipart/form-data">
	{{csrf_field() }}

        <h3 class="block-title alt"><i class="fa fa-angle-down"></i>
        Extras &amp; Frees
    </h3>
    <div role="form" class="form-extras">

        <div class="row">


            				            
        </div>

    </div>


    <div class="row row-inputs">
        <div class="">
			            <div class="col-sm-6">
                <div class="form-group has-icon has-label">
                    <input class="form-control" type="hidden" name="product_id" value="{{$product_by_details->product_id}}" require placeholder="Category Name" >
                    <label for="formSearchUpLocation">Picking Up Location</label>
                    <select name="pick_up"class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="Select">
                                                            <option value="larnaca">Larnaca</option>
                                                            <option value="limassol">Limassol</option>
                                                            <option value="famagusta">Famagusta</option>
                     </select>
                    <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group has-icon has-label">
                    <label for="formSearchUpDate">Picking Up Date</label>
                    <input autocomplete="off" type="text" class="form-control PickingUpDate" id="formSearchUpDate3"
                           value=""  placeholder="MM/DD/YYYY"  name="date_pick_up" >
                    <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group has-icon has-label selectpicker-wrapper">
                    <label>Picking Up Hour</label>
                    <select
                            name="time_pick_up"
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="Select">

						     <option value="9:00 AM">9:00 AM</option>
                             <option value="10:00 AM">10:00 AM</option>
                             <option value="10:30 AM">10:30 AM</option>
                             <option value="4:00 PM">4:00 PM</option>
                             <option value="4:15 PM">4:15 PM</option>
                             <option value="4:30 PM">4:30 PM</option>
                             <option value="4:45 PM">4:45 PM</option>
                             <option value="5:00 PM">5:00 PM</option>
                                                    
                    </select>
                    <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-inputs">
        <div class="">
            
            <div class="col-sm-3">
                <div class="form-group has-icon has-label">
                    <label for="formSearchOffDate">Dropping Off Date</label>
                    <input autocomplete="off"  value="" name="date_drop_off" type="text" class="DroppingOffDate form-control "
                           id="formSearchOffDate3"
                           placeholder="MM/DD/YYYY">
                    <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group has-icon has-label selectpicker-wrapper">
                    <label>Dropping Off Hour</label>
                    <select name="time_drop_off" class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="Select">
                             <option value="9:00 AM">9:00 AM</option>
                             <option value="10:00 AM">10:00 AM</option>
                             <option value="10:30 AM">10:30 AM</option>
                             <option value="4:00 PM">4:00 PM</option>
                             <option value="4:15 PM">4:15 PM</option>
                             <option value="4:30 PM">4:30 PM</option>
                             <option value="4:45 PM">4:45 PM</option>
                             <option value="5:00 PM">5:00 PM</option>
                                                    
                    </select>
                    <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                </div>
            </div>
        </div>
    </div>

    
    

    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>Customer Information</h3>
    <div class="form-delivery">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input name="name"
                           id="fd-name" title="Name is required" data-toggle="tooltip"
                           class="form-control alt" type="text" placeholder="Name and Surname:*">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input name="email" id="fd-email" title="Email is required" data-toggle="tooltip" class="form-control alt" type="text" value="" placeholder="Your Email Address:*">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control alt"  name="telephone" type="number" value=""  placeholder="Phone Number:">
                </div>
            </div>

        </div>
    </div>


    

    <div class="overflowed reservation-now">
        <div class="checkbox pull-left">
            <input id="accept" type="checkbox" name="fd-name" title="Please accept" data-toggle="tooltip">
            <label for="accept">I accept all information and Payments etc</label>
        </div>
                <button class="btn btn-theme pull-right btn-reservation-now">Reservation Now</button>
        <a class="btn btn-theme pull-right btn-cancel btn-theme-dark" >Cancel</a>
    </div>


</form>