<section class="panel-title">
    <div class="container">
    <h2 class="panel-title-heading">Register</h2>
    <ul class="nav-breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><a href="/member">My Account</a></li>
        <li><a >Register</a></li>
    </ul>
    </div>
</section><!--/.panel-title-->

<section class="panel-login">
    <div class="container">
    <div class="row">
        <div class="col-sm-8 col-xs-12">
        <div class="panel-login-inner" data-mh="login">
            <h2 class="panel-login-heading">Create An New Account</h2>
            <form method="post" action="{{ url('member') }}" class="register-form row  space-top-15" novalidate>
                <div class="panel-login-group col-md-6">
                    <input name="nama" value="{{ Input::old('nama') }}" required="" type="text" data-original-title="Login" class="panel-login-control" placeholder="Name" name="cf_name" value="" data-toggle="tooltip" data-placement="bottom" title="Your Name">
                </div>
                <div class="panel-login-group col-md-6">
                    {{ Form::select('negara', array('' => '-- Select Country --') + $negara, Input::old("negara"), array('required', "id"=>"negara", "data-rel"=>"chosen", "class"=>"panel-login-control")) }}
                </div>
                <div class="panel-login-group col-md-6">
                    <input name="email" value="{{ Input::old('email') }}" required="" type="email" data-original-title="Email is required" class="panel-login-control" placeholder="Email Address" name="cf_email" value="" data-toggle="tooltip" data-placement="bottom" title="Your Email Address">
                </div>  
                <div class="panel-login-group col-md-6">
                    {{ Form::select('provinsi', array('' => '-- Select Province --') + $provinsi, Input::old("provinsi"), array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"panel-login-control")) }}
                </div>  
                <div class="panel-login-group col-md-6">
                    <input name="telp" value="{{ Input::old('telp') }}" type="text" class="panel-login-control" placeholder="Phone" name="cf_website" value="" data-toggle="tooltip" data-placement="bottom" title="Your Phone">
                </div>  
                <div class="panel-login-group col-md-6">
                    {{ Form::select('kota', array('' => '-- Select City --') + $kota, Input::old("kota"), array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"panel-login-control")) }}
                </div> 
                <div class="panel-login-group col-md-6">
                    <input name="password" required="" type="password" class="panel-login-control" placeholder="Password" name="cf_website" value="" data-toggle="tooltip" data-placement="bottom" title="Password">
                </div>
                <div class="panel-login-group col-md-6">
                    <input name="kodepos" value="{{ Input::old('kodepos') }}" required="" type="text" class="panel-login-control" placeholder="Poscode" name="cf_website" value="" data-toggle="tooltip" data-placement="bottom" title="Poscode">
                </div>  
                <div class="panel-login-group col-md-6">
                    <input name="password_confirmation" required="" type="password" class="panel-login-control" placeholder="Re - Password" name="cf_website" value="" data-toggle="tooltip" data-placement="bottom" title="Password">
                </div>  
                <div class="panel-login-group col-md-6">
                    <textarea title="Your Address" style="height:130px" class="panel-login-control" rows="7" name="alamat" required placeholder="Address">{{ Input::old("alamat") }}</textarea>
                </div> 
                <div class="panel-login-group col-md-12">
                    <div class="input-group-addon" style="position: absolute;right: 0;padding: 10px 30px">
                        {{ HTML::image(Captcha::img(), 'Captcha image') }}
                    </div>
                    <input type="text" name="captcha" class="panel-login-control" placeholder="Captcha" required>
                </div> 
                <div class="panel-login-group col-md-12">
                    <label class="panel-login-check"><input <input name="readme" value="1" type="checkbox" checked/> I have read and agree to the <a href="{{ url('service') }}" target="_blank">Privacy Policy</a></label>
                </div>
                <div class="panel-login-group col-md-12">
                    <button type="submit" class="panel-login-button">REGISTER</button>
                </div>
            </form>
        </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel-login-inner" data-mh="login">
                <h2 class="panel-login-heading">Login</h2>
                <p class="panel-register-summary">Registering for this site allows you to access your order status and history. Just fill in the fields below, and we’ll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.</p>
                <div class="panel-register-action">
                    <a href="{{ url('member') }}" class="panel-register-go">Login</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section><!--/.panel-login-->