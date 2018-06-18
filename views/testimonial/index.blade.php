<section class="panel-title">
    <div class="container">
    <h2 class="panel-title-heading">Testimonial</h2>
    <ul class="nav-breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><a href="#">Testimonial</a></li>
    </ul>
    </div>
</section><!--/.panel-title-->
<br>
<section class="panel-complete">
    <div class="container">
    {{-- <h2 class="panel-complete-notice panel-complete-success"><i class="fa fa-check"></i>Thank you. Your order has been received</h2> --}}
        <div class="row">
            <div class="col-sm-6 col-md-6 col-xs-12">
                <div class="panel-checkout-item" data-mh="checkout">
                    <h2 class="panel-checkout-heading">Your order</h2>
                    <div class="panel-checkout-table">
                        <form class="sidebar-search" action="{{URL::to('testimoni')}}" method="post">
                            <label>Nama</label><br><input type="text" name="nama" class="form-control" required><br><br>
                            <label>Testimonial</label><br><textarea name="testimonial" class="form-control" required></textarea><br><br>
                            <input type="submit" style="float:right" class="btn small-btn theme-btn-1" value="Submit">
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xs-12" data-mh="checkout">
                @foreach(list_testimonial() as $testi)
                    <div class="panel-checkout-item">
                        <img style="width: 100px;float: left;margin-right: 20px;margin-top: 12px;" class="img-responsive" alt="breadcrumb" src="{{generate_image_url().$testi->gambar}}">
                        <h2 class="panel-checkout-heading">{{ $testi->nama }}</h2>
                        <p class="panel-checkout-summary">
                            {{ trim($testi->isi) }}
                        </p>
                    </div>
                @endforeach
                <ul class="panel-paging">
                    {{ list_testimonial()->links() }}
                </ul>
            </div>
        </div>
    </div>
</section><!--/.panel-complete-->