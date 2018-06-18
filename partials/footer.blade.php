<footer class="footer">
    <div class="panel-shipping">
        <div class="container">
            <div class="row">
            <div class="col-md-3 col-sm-6 col-ms-6 col-xs-12" data-mh="shipping">
                <div class="panel-shipping-item" data-mh="shipping">
                <h4>Free Shipping</h4>
                <p>For All Orders Over $220</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-ms-6 col-xs-12" data-mh="shipping">
                <div class="panel-shipping-item" data-mh="shipping">
                <h4>30 days Returns</h4>
                <p>Money Back Guarantee</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-ms-6 col-xs-12" data-mh="shipping">
                <div class="panel-shipping-item" data-mh="shipping">
                <h4>Online Support</h4>
                <p>Free support 24/7 Per Week</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-ms-6 col-xs-12" data-mh="shipping">
                <div class="panel-shipping-item" data-mh="shipping">
                <h4>Promotions</h4>
                <p>10% Member Discount</p>
                </div>
            </div>
            </div>
        </div>
    </div><!--/.panel-shipping-->
    <div class="footer-list">
        <div class="container">
            <div class="row">
            <div class="col-md-3 col-xs-12" data-mh="footer">
                <div class="footer-list-item">
                <h3>about our store</h3>
                <ul class="footer-list-info">
                    <li><i class="fa fa-phone"></i>{{$kontak->telepon}} <br>{{$kontak->hp}}</li>
                    <li><i class="fa fa-envelope-o"></i>{{$kontak->email}}</li>
                    <li><i class="fa fa-map-marker"></i>{{$kontak->alamat}}</li>
                </ul>
                <ul class="footer-social">
                    <li><a href="{{$kontak->fb}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$kontak->pt}}"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="{{$kontak->tw}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{$kontak->gp}}"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="{{$kontak->ig}}"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="row">
                    @foreach($tautan as $key=>$group)	
                        <div class="col-md-3 col-sm-6 col-ms-6 col-xs-12" data-mh="footer">
                            <div class="footer-list-item">
                            <h3>{{$group->nama}}</h3>
                            <ul class="menu-footer">
                                @foreach($group->link as $key=>$link)
                                <li><a href="{{ menu_url($link) }}"> {{ $link->nama }}</a></li>
                                @endforeach
                            </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </div>
    </div><!--/.footer-list-->

    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
            <div class="col-md-7 col-xs-12">
                <p><b>Subscrible</b> to our newsletter and be <span>the first</span> to know about <span>special offers</span></p>
            </div>
            <div class="col-md-5 col-xs-12">
                <form action="{{@$mailing->action}}" method="post" name="newsletter" target="_blank" novalidate>
                <div class="newsletter-form">
                    <input type="email" name="email" placeholder="Your e-mail address" type="email" required {{@$mailing->action==''?'disabled style="cursor:default"':''}}>
                    <button type="submit" {{ @$mailing->action==''?'disabled="disabled"':'' }}>SUBSCRIBLE</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div><!--/.footer-newsletter-->

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <p class="footer-copyright-info">Copyright &copy; {{date('Y')}} Created by <a href="#">{{ Theme::place('title') }}</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6">
                <p class="footer-copyright-payment"><img src="img/img/payments.png" width="232" height="20" alt=""></p>
            </div>
            </div>
        </div>
    </div><!--/.footer-copyright-->
</footer><!--/.footer-->

{{ pluginPowerup() }} 