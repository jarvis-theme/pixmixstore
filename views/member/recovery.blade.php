@if(Session::has('errorrecovery'))
<div class="error" id='message' style='display:none'>
    <p>Maaf, email anda tidak ditemukan.</p>
</div>
@endif
@if(Session::has('forget'))
<div class="success" id='message' style='display:none'>
    <p>Cek email untuk me-reset password anda!</p>
</div>  
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    <p>{{Session::get('error')}}</p>
</div>  
@endif

 <article class="page-body">

    <!--Breadcrumb Section Start-->
    <section class="breadcrumb-bg-2">                
        <div class="container">
            <div class="site-breadcumb">                        
                <h1 class="title-1">update password  </h1> 
                <ol class="breadcrumb breadcrumb-menubar">
                    <li> <a href="#"> Home </a> forgot password  </li>                             
                </ol>
            </div>  
        </div>
    </section>
    <!--Breadcrumb Section End-->

    <section class="wrapper sec-space login-register">                  
        <div class="container">
            <!-- Login Starts -->
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="login-wrap">
                        <h2 class="section-title no-margin size-18"> forgot your password </h2>
                        <p class="space-30 gray-color">Enter your email registered account to get new password.</p>
                        {{ Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'login-form row space-top-15')) }}
                            <div class="form-group col-md-12">
                                <input name="password" value="{{ Input::old('password') }}" required="" type="password" data-original-title="password is required" class="form-control name input-your-name" placeholder="New Password" name="cf_name" value="" data-toggle="tooltip" data-placement="bottom" title="password">
                            </div>
                            <div class="form-group col-md-12">
                                <input name="password_confirmation" value="{{ Input::old('password_confirmation') }}" required="" type="password" data-original-title="password is required" class="form-control name input-your-name" placeholder="Confirmation New Password" name="cf_name" value="" data-toggle="tooltip" data-placement="bottom" title="password">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="theme-btn btn submit-btn"> <b> Recovery Password </b> </button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>

            </div>
            <!-- / Login Ends -->                       
        </div>

    </section>

</article>