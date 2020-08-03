<?php $__env->startSection('content'); ?>
<div class="card" style="width: 70%;margin-left: 5%; bottom: 3%;">
            <div class="card-body">
                
                <div class="row">
                    <div class="col-12">
                      
                                                <!-- BEGIN FORM-->
                        <form action="<?php echo e(url('/save_info')); ?>" method="POST" enctype="multipart/form-data" >
                            <?php echo e(csrf_field()); ?>

                            <div class="form-row">
    <div class="form-group col-md-6">

                                    <input class="form-control" type="hidden" name="id" value="<?php echo e(auth()->user()->id); ?>" require placeholder="Category Name" >
      <label for="inputEmail4">Nome De Site</label>
      <input type="text" class="form-control" name="name_agence" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Monnaie du site</label>
      <input type="text" class="form-control" name="monnaie_agence" placeholder="DH">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Description Site</label>
    <input type="text" class="form-control summernote" name="addresse_agence" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mobile</label>
      <input type="Mobile" class="form-control" name="number_mobile" placeholder="060000000">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email_agence" placeholder="name@gmail.com">
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" name="logo_agence">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="logo_agence"
      aria-describedby="logo_agence">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
  $('.summernote').summernote();
});
    function toggleSupport() {
        $('#support').fadeToggle();
    }
    function sendMail(e,form){
        e.preventDefault();
        $('#support').fadeOut();
        var data = $(form).serialize();
        data += '&url='+ location.href;
        // console.log(data);
        $.ajax({
            url:Routing.generate('contact'),
            data:data,
            method:'POST',
            success:function(data){
                data = JSON.parse(data);
                if(data.id != null){
                    alert('Votre message a été envoyé!','success',5000);
                }else{
                    alert(data.message,'warning');
                    $('#support').fadeIn();
                }
            },
            error:function(){
                $('#support').fadeIn();
                alert('Votre message a été refusé!');
            }
        });
    }
</script>
<style>
    .support-icon {
        position: fixed;
        right: 20px;
        bottom: 13px;
        z-index: 998;
        font-size: 40px;
        background-color: #0085ff;
        color: white;
        cursor: pointer;
        padding: 2px 12px 2px 10px;
        border-radius: 50%;
        box-shadow: 0 0 5px;
    }

    .support-form {
        position: fixed;
        z-index: 999;
        right: 10px;
        bottom: 10px;
        width: 400px;
        max-width: 95%;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 0 50px rgba(0, 0, 0, 0.17);
        background-color: white;
    }
    .support-form .icon{
        margin: 5px;
    }
    .support-form form {}

    .support-form form textarea {}

    .support-form form button {
        background-color: #007cfb;
        border-color: #2196f3;
    }

    .hide-support {
        position: absolute;
        right: 8px;
        padding: 5px;
        background-color: #eee;
        cursor: pointer;
    }
</style>                            </div>
     </div>
        <script type="text/javascript" src="/bundles/fosjsrouting/js/router.min.js"></script>
    <script type="text/javascript" src="/js/routing?callback=fos.Router.setData"></script>
    <!-- <script src="https://default.storeino.com/js/bootstrap.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.9.2/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/microplugin/0.0.3/microplugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
    <!--[if lt IE 9]><script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.0.8/es5-shim.min.js"></script><![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="//storeino.b-cdn.net/dev/admin/js/form-elements.js?v=1.4.1"></script>
    <script type="text/javascript" src="//storeino.b-cdn.net/dev/admin/js/app.min.js?v=1.4.1"></script>
    <script type="text/javascript" src="//storeino.b-cdn.net/dev/admin/js/main-admin-v1-2-0.js?v=1.4.1"></script>
    <script type="text/javascript">
        $('[data-toggle="tooltip"]').tooltip();
        $(".scrollable").niceScroll({cursorcolor:"#dddddd"});
        function alert(text,type = 'error',timeout = 5000) {
            if(text == "0"){
                text = "Vous ne pouvez pas faire cette action";
            }
            if ( !$("#snackbar").length ) {
                var textHtml = '<div id="snackbar" ></div>';
                $("body").prepend(textHtml);
            }
            $('#snackbar').empty();
            var textView = '<i class="fa fa-exclamation-triangle pr-2"></i>'+text; 
            if(type == 'success'){
                textView = '<i class="fa fa-check pr-2"></i>'+text;
            }
            $('#snackbar').prepend(textView);
            $('#snackbar').attr('class',type);
            $('#snackbar').attr('style',
                'visibility: visible;'+
                '-webkit-animation:fadein 0.5s, fadeout 0.5s '+ (timeout - 500) +'ms;'+
                'animation:fadein 0.5s, fadeout 0.5s '+ (timeout - 500) +'ms');
            setTimeout(function(){ 
                $('#snackbar').attr('class','');
                $('#snackbar').attr('style','');
            }, timeout);
        }
        window.onresize = function(){
            sideBarSize();
        }
        window.onclick = function(){
            sideBarSize();
            setTimeout(function(){
                window.dispatchEvent(new Event('resize'));
            },500);
        }
        function countUnread(){
            $.get(Routing.generate('count_unread'),function(json){
                json = JSON.parse(json);
                if(json.active == true){
                    $('#counter').html(json.count);
                    $('.notifications').fadeIn();
                    setTimeout(function(){
                        countUnread();
                    },15000);
                }else{
                    $('.notifications').hide();
                }
            });
        }
        countUnread();
        function sideBarSize(){
            var topHeight = $('.header.navbar').height() + $('.header.navbar').position().top;
            $('.side-nav').css('top',(topHeight) + 'px');
            $('.side-nav .side-nav-inner .side-nav-menu').css('height',(window.innerHeight - topHeight - 10) + 'px');
        }
        sideBarSize();
        $(document).ready(function(){
            sideBarSize();
        });

    </script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script>
    $('.html-editor').summernote();
</script>

<script type="text/javascript">
    $('.form-image').click(function() {
        $(this).siblings('.upload-file').click();
    });
    $('.upload-file').change(function() {
        console.log('will Upload File');
        var input = $(this).siblings('.file-input').eq(0);
        var filename = $(this).attr('data-filename');
        $(input.attr('data-img')).attr('src', 'https://storeino.b-cdn.net/assets/img/img_loading.gif');
        if (this.files && this.files[0]) {
            var formData = new FormData();
            for (var i = 0; i < this.files.length; i++) {
                formData.delete('inputImages');
                formData.append('inputImages', this.files[i]);
                formData.append('directly', 'true');
                formData.append('filename', filename);
                $.ajax({
                    method: 'POST',
                    url: Routing.generate('new-image'),
                    processData: false,
                    contentType: false,
                    data: formData
                }).done(function(data) {
                    input.val(data);
                    $(input.attr('data-img')).attr('src', data + '?v=' + Math.random());
                });
            }
        }
    });

    $('#bt').click(function() {
        if ($('#password').attr('type') == 'password') {
            $('#password').attr('type', 'text');
            $('#ic').attr('class', 'fa fa-eye');
        } else {
            $('#password').attr('type', 'password');
            $('#ic').attr('class', 'fa fa-eye-slash ');
        }
    });
</script>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('page.Admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>