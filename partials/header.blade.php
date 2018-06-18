<header class="header header-v2" id="header">
    <div class="header-notify" id="header-notify">
        <span class="header-notify-content">Free shipping for all order over $200. anywhere in the world.</span>
        <a href="#header-notify" id="header-notify-close" class="header-notify-close">Close <i class="fa fa-times"></i></a>
    </div><!--/.header-notify-->

    <div class="header-top" id="header-top">
        <div class="container">
            <div class="row">
            <div class="col-xs-12 col-md-4">
                <nav class="nav-left pull-left">
                <ul class="nav-top">
                    <li><a href="#"><i class="fa fa-gift"></i>Gift Voucher</a></li>
                    <li><a href="#"><i class="fa fa-support"></i>Help & Advice</a></li>
                </ul>
                </nav><!--/.nav-left-->
            </div>
            <div class="col-xs-12 col-md-8">
                <nav class="nav-right pull-right">
                <ul class="nav-top">
                    {{-- <li>
                        <a href="#"><i class="fa fa-flag-usa"></i>English <i class="fa fa-caret-down"></i></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-flag-usa"></i>English</a></li>
                            <li><a href="#"><i class="fa fa-flag-fra"></i>France</a></li>
                            <li><a href="#"><i class="fa fa-flag-ger"></i>Germany</a></li>
                            <li><a href="#"><i class="fa fa-flag-rus"></i>Russia</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li>
                        <a href="#"><i class="fa fa-usd"></i>USD <i class="fa fa-caret-down"></i></a>
                        <ul>
                            <li><a href="#">IDR - Indonesian Rupiah</a></li>
                            <li><a href="#">USD - US Dollar</a></li>
                        </ul>
                    </li> --}}
                    @if(is_login())
                        <li><a href="{{ url('member/profile/edit') }}"><i class="fa fa-user"></i>My Account</a></li>
                        <li><a href="{{ url('member') }}">My Order</a></li>
                        <li>{{HTML::link('logout', 'Logout')}}</li>
                    @else
                        <li><a href="{{ url('register') }}"><i class="fa fa-pencil-square-o"></i>Create an Account</a></li>
                        <li><a href="{{ url('member') }}"><i class="fa fa-lock"></i>Sign In</a></li>
                    @endif
                </ul>
                </nav><!--/.nav-right-->
            </div>
            </div>
        </div>
    </div><!--/.header-top-->

    <div class="header-middle" id="header-middle">
        <div class="container">
            <div class="row">
            <div class="col-md-3 col-xs-12">
                <a href="{{url('/')}}" class="logo">
                    {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'img-responsive',  'srcset'=>logo_image_url())) }}                
                </a>
            </div>
            <div class="col-md-3 col-xs-12 pull-right">
                <div class="hotline clearfix">
                <div class="hotline-content">
                    <a class="hotline-link" href="tel:{{$kontak->hp}}">{{$kontak->hp}}</a>
                    <a class="hotline-link" href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
                </div>
                <a href="tel:{{$kontak->hp}}" class="hotline-icon">
                    <i class="fa fa-phone"></i>
                </a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="header-search">
                <form action="{{URL::to('search')}}" method="post" class="search-form">
                    <input class="header-search-control" name="search" type="search" placeholder="Search product">
                    <button class="header-search-button" type="submit"><i class="fa fa-search"></i></button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div><!--/.header-middle-->

    <div class="header-bottom" id="header-bottom">
        <div class="container">
            <div class="header-mobile">
            <a href="#nav-main" id="btn-menu" class="btn-menu">
                <span class="btn-menu-inner"></span>
            </a>
            <a href="{{url('/')}}" class="logo-mobile">
                {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'img-responsive', 'srcset'=>logo_image_url())) }}
            <a href="#header-top" class="btn-language" id="btn-language"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
            </div><!--/.header-mobile-->
            <div class="row">
               
                <nav class="col-md-9 col-xs-12 main-menu">
                    <ul class="nav-main clearfix" id="nav-main">
                        @foreach(main_menu()->link as $key=>$link)
                            <li class="{{$key==1?'is-megamenu':''}}">
                                <a href="{{menu_url($link)}}"><span>{{$link->nama}}</span></a>
                                @if($key==1)
                                <div class="menu-sub megamenu">
                                    <div class="container">
                                        <div class="megamenu-content">
                                            <div class="row">
                                                @foreach(list_category() as $cat=>$menu)
                                                    @if($menu->parent=='0')
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        {{-- <a href="#"><img class="megamenu-image" src="img/megamenu/1.jpg" width="255" height="120" alt=""></a> --}}
                                                        <h3 class="megamenu-title"><a href="{{ category_url($menu) }}">{{ ucwords($menu->nama) }}</a></h3>
                                                        <ul>
                                                            @foreach($menu->anak as $sub => $submenu)
                                                            <li>
                                                                <a href="{{ category_url($submenu) }}"><span>{{ ucwords($submenu->nama) }}</span></a>
                                                            </li>
                                                            @endforeach
                                                            {{-- <li><a href="#">New Arrivals<span class="is-new">New</span></a></li>
                                                            <li><a href="#"><span>Sale Off<span class="is-hot">Hot</span></span></a></li> --}}
                                                        </ul>
                                                    </div>
                                                    @endif
                                            @if(($cat+1)%4==0)
                                            </div>
                                            <div class="row" key="{{$cat}}">
                                            @endif
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    
                </nav><!--/.main-menu-->

                <nav class="col-md-3 cart-wishlist shoppingcartplace">
                    {{ shopping_cart() }}
                </nav><!--/.cart-wishlist-->

            </div>
        </div>
        <a href="index.html" class="logo-scroll">
            {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'img-responsive', 'srcset'=>logo_image_url())) }}
        </a>
    </div><!--/.header-bottom-->

</header><!--/.header-->