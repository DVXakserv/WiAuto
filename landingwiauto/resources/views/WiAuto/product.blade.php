@include('Wiauto.head')
@include('Wiauto.header')
<div class="container-fuild px-md-4 px-3 py-4" dir="rtl" style="margin-top: 5%;">

      <div class="row appendDelAjax">

        <div class="col-md-12">

          <div class="card shadow mb-4">

            <div class="card-body">
                
                 <h1 class="mb-4 h3" style="text-align: center;">البحث  عن السيارات</h1>

              <div>

                <form accept-charset="UTF-8" role="form" action="{{url('/wiauto/alwakalat/search')}}" method="get">
                   
                  <div class="form-row">

                    <div class="form-group col-md-3 focused">
                      <label for="Sortby">المدينة</label>
                      <div class="input-group input-group-alternative">
                        <select id="Sortby" class="form-control" name="addresse_agence">
                          <?php
                                $all_product=DB::table('product')
                                                ->get();
                                    foreach($all_product as $v_product){?>
                          <option  selected name="product_name">{{$v_product->product_name}}</option>
                          <?php }?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group col-md-3 focused">
                      <label for="Sortby">المدينة</label>
                      <div class="input-group input-group-alternative">
                        <select id="Sortby" class="form-control" name="addresse_agence">
                          <?php
                                $all_brand=DB::table('brand')
                                                ->get();
                                    foreach($all_brand as $v_product){?>
                          <option  selected name="brand_name">{{$v_product->brand_name}}</option>
                          <?php }?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-3" style="margin-top: 33px">
                      <button class="btn btn-md btn-primary btn-block" type="submit">
                        <i class="fa fa-search fa-fw mx-1"></i> أبحث 
                      </button>
                    </div>
                     </div>

                </form>

              </div>

            </div>

          </div>

        </div>
      </div>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <br>
    <br>
    <div class="row" id="ads">
    <!-- Category Card -->
    <?php
        $all_product=DB::table('product')
                        ->get();
            foreach($all_product as $v_product){?>
    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">Low KMS</span>
                <span class="card-notify-year">{{$v_product->product_model}}</span>
                <img class="img-fluid" src="{{URL::to($v_product->product_image)}}" alt="Alternate Text" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Used</span>
                <span class="card-detail-badge">{{$v_product->price}} DH</span>
                <span class="card-detail-badge">13000 Kms</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>{{$v_product->product_name}}</h5>
                </div>
                <a class="ad-btn" href="{{URL::to('/view_product/'.$v_product->product_id)}}">View</a>
            </div>
        </div>
    </div>
<?php }?>
    

</div>
</div>
</div>

@include('Wiauto.footer')

<style >
    #ads {
    margin: 30px 0 30px 0;
   
}

#ads .card-notify-badge {
        position: absolute;
        left: -10px;
        top: -20px;
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px; 
        color: #000;
        padding: 5px 10px;
        font-size: 14px;

    }

#ads .card-notify-year {
        position: absolute;
        right: -10px;
        top: -20px;
        background: #ff4444;
        border-radius: 50%;
        text-align: center;
        color: #fff;      
        font-size: 14px;      
        width: 50px;
        height: 50px;    
        padding: 15px 0 0 0;
}


#ads .card-detail-badge {      
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;        
    }

   

#ads .card:hover {
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

#ads .card-image-overlay {
        font-size: 20px;
        
    }


#ads .card-image-overlay span {
            display: inline-block;              
        }


#ads .ad-btn {
        text-transform: uppercase;
        width: 150px;
        height: 40px;
        border-radius: 80px;
        font-size: 16px;
        line-height: 35px;
        text-align: center;
        border: 3px solid #e6de08;
        display: block;
        text-decoration: none;
        margin: 20px auto 1px auto;
        color: #000;
        overflow: hidden;        
        position: relative;
        background-color: #e6de08;
    }

#ads .ad-btn:hover {
            background-color: #e6de08;
            color: #1e1717;
            border: 2px solid #e6de08;
            background: transparent;
            transition: all 0.3s ease;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        }

#ads .ad-title h5 {
        text-transform: uppercase;
        font-size: 18px;
    }
</style>