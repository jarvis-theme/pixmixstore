 <section class="panel-title">
    <div class="container">
    <h2 class="panel-title-heading">Login</h2>
    <ul class="nav-breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><a href="/member">My Account</a></li>
        <li><a>Login</a></li>
    </ul>
    </div>
</section><!--/.panel-title-->

<section class="panel-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="panel-login-inner" data-mh="login">
                    <h2 class="panel-login-heading no-margin">login</h2>
                    <p class="panel-login-summary">if you have our account. Please  log in !</p>
                    <form method="post" action="{{ url('member/login') }}" class="login-form row space-top-15" >
                        <div class="panel-login-group">
                            <input name="email" value="{{ Input::old('email') }}" required="" type="text" data-original-title="Name is required" class="panel-login-control" placeholder="Email Address" name="cf_name" value="" data-toggle="tooltip" data-placement="bottom" title="">
                        </div>
                        <div class="panel-login-group">
                            <input name="password" required="" type="password" data-original-title="Email is required" class="panel-login-control" placeholder="Password" name="cf_email" value="" data-toggle="tooltip" data-placement="bottom" title="">
                        </div>
                        <div class="panel-login-group">
                            {{-- <label class="panel-login-check"><input type="checkbox"/> Remember me</label> --}}
                            <a class="panel-login-forget" href="{{URL::to('member/forget-password')}}">Forget your password ?</a>
                        </div>
                        <div class="panel-login-group">
                            <button type="submit" class="panel-login-button">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="panel-login-inner" data-mh="login">
                    <h2 class="panel-login-heading">Register</h2>
                    <p class="panel-register-summary">Registering for this site allows you to access your order status and history. Just fill in the fields below, and we’ll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.</p>
                    <div class="panel-register-action">
                    <a href="{{ url('register') }}" class="panel-register-go">REGISTER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/.panel-login-->