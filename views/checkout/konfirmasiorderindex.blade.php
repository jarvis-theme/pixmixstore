<section class="panel-title">
    <div class="container">
        <h2 class="panel-title-heading">Order Complete</h2>
        <ul class="nav-breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="#">Order Confirmation</a></li>
        </ul>
    </div>
</section><!--/.panel-title-->

<section class="panel-complete">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-xs-12 col-md-offset-2">
                                
                <div class="pageContact">
                    <!-- <h1 class="bingoContactTitle">Order Confirmation</h1> -->
                    <div class="pageContent">
                        <div class="formContactUs">
                            {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'contact-form'))}}
                            <!-- <form method="post" action="http://example.jstore.dev/konfirmasiorder" id="contact_form" class="contact-form" accept-charset="UTF-8"> -->
                                <div class="formContent">
                                    <div class="form-group">
                                        <label for="ContactFormName" class="hidden-label">Order ID</label>
                                        <input type="text" id="ContactFormName" class="form-control" name="kodeorder" placeholder="Enter your Order ID" value="{{ Input::old('kodeorder') }}" required autofocus>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit" class="btn small-btn theme-btn-1"> Find Order </button>  
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / My Account Ends -->
    </div>

</section>