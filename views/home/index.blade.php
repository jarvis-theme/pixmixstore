<div class="panel-grid">
    <div class="container">
    <div class="row">
        <div class="col-sm-4">
            @foreach(vertical_banner() as $key=>$main_banner)
                @if($key==0)
                <article class="panel-grid-item size-3x4">
                    <div class="panel-grid-overlay">
                    <div class="panel-grid-media panel-grid-media1" style="background-image: url({{url(banner_image_url($main_banner->gambar))}})"></div>
                    
                    <a class="panel-link-cover" href="{{$main_banner->url}}">shop now</a>
                    </div>
                </article>
                @endif
            @endforeach
        </div>
        <div class="col-sm-8">
            @foreach(horizontal_banner() as $key=>$main_banner)
            <div class="row">
                <article class="panel-grid-item size-3x1">
                    <div class="panel-grid-overlay">
                    <div class="panel-grid-media panel-grid-media4" style="background-image: url({{url(banner_image_url($main_banner->gambar))}})"></div>
                    
                    <a class="panel-link-cover" href="{{$main_banner->url}}">shop now</a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</div><!--/.panel-grid-->

<section class="panel-special">
    <div class="container">
    <div class="panel-special-heading">
        <p class="panel-special-summary">SEASON DISCOUNT</p>
        <h2 class="panel-heading">Special Deals</h2>
    </div>
    <div class="row">
        <div class="col-md-3 col-xs-12">
            <div class="panel-offer owl-carousel" data-mh="special" data-carousel='{"items": 1, "loop": true, "center": false, "margin": 30, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 5000, "nav": false, "dots": true, "responsive": {"0" : {"items": 1, "margin": 0, "loop": true}, "479" : {"items": 2, "margin": 15, "loop": true}, "768" : {"items": 2, "loop": true}, "992" : {"items": 1, "margin": 0, "loop": true}}}'>
                @foreach(list_product(3) as $mdeal)
                <div class="product-item">
                    <div class="product-item-thumbnail">
                        <span class="product-item-label product-item-green">Offer</span>
                        <img src="{{url(product_image_url($mdeal->gambar1,'medium' ))}}" width="270" height="340" alt="Masta Kids Fashion"/>
                        <a class="product-item-view" href="{{product_url($mdeal)}}" data-toggle="modal" 'data-target'="#quickview-modal">Quick View</a>
                    </div>
                    <h4 class="product-item-category"><a href="single-product-add-infomartion.html">KID FASHION</a></h4>
                    <h3 class="product-item-name"><a href="{{product_url($mdeal)}}">{{$mdeal->nama}}</a></h3>
                    {{-- <div class="product-item-review" data-rating='{"score" : 3.2, "readOnly": true}'></div> --}}
                    <p class="product-item-price">{{price($mdeal)}} <span>{{$mdeal->hargaCoret==0?'':price($mdeal->hargaCoret,null,1)}}</span></p>
                    <div class="product-item-control">
                        <div class="product-item-action">
                            <a class="product-item-cart" href="{{product_url($mdeal)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!--/.panel-offer-->
        </div>
        <div class="col-md-9 col-xs-12">
            <div class="panel-discount owl-carousel" data-mh="special" data-carousel='{"items": 1, "loop": true, "center": false, "margin": 0, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 5000, "nav": true, "dots": false}'>
                @foreach(list_product(3) as $deal)
                <article class="panel-discount-item">
                    <div class="row">
                        <div class=" col-xs-12 col-ms-6 col-sm-6">
                        <div class="panel-discount-thumbnail">
                            <span class="sale-off">{{discountPercent($deal->hargaJual,$deal->hargaCoret)}}</span>
                            <img src="{{url(product_image_url($deal->gambar1,'medium' ))}}" width="370" height="466" alt="Masta Kids Fashion"/>
                        </div>
                        </div>
                        <div class=" col-xs-12 col-ms-6 col-sm-6">
                        <div class="panel-discount-content">
                            <h4 class="panel-discount-category">
                            <a href="#" title="{{@$deal->kategori->nama}}">{{@$deal->kategori->nama}}</a>
                            </h4>
                            <h3 class="panel-discount-name">
                            <a href="{{product_url($deal)}}">{{$deal->nama}}</a>
                            </h3>
                            {{-- <div class="panel-discount-review" data-rating='{"score" : 1.2, "readOnly": true}'></div> --}}
                            <p class="panel-discount-summary">{{$deal->dmt}}</p>
                            <p class="panel-discount-price">{{price($deal)}} <span>{{$deal->hargaCoret==0?'':price($deal->hargaCoret,null,1)}}</span></p>
                            <div class="panel-discount-countdown" data-countdown="2017/06/25 12:34:56"></div>
                        </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section><!--/.panel-special-->

<section class="panel-best">
    <h2 class="panel-heading">All The Best For Your Kids</h2>
    <ul class="panel-filters" role="tablist">
        <li class="active" role="presentation"><a href="#tab1-1" aria-controls="tab1-1" role="tab" data-toggle="tab">All</a></li>
        <li role="presentation"><a href="#tab1-2" aria-controls="tab1-2" role="tab" data-toggle="tab">New Products</a></li>
        <li role="presentation"><a href="#tab1-3" aria-controls="tab1-3" role="tab" data-toggle="tab">Hot Product</a></li>
        <li role="presentation"><a href="#tab1-4" aria-controls="tab1-4" role="tab" data-toggle="tab">Sale Off</a></li>
    </ul>
    <div class="container">
    <div class="tab-content">

        <div class="tab-pane" id="tab1-3" role="tabpanel">
            <div class="all-tb-slide owl-carousel" data-carousel='{"items": 4, "loop": true, "center": false, "margin": 30, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 5000, "nav": true, "dots": false, "responsive": {"0" : {"items": 1, "loop": true}, "479" : {"items": 2, "margin": 15, "loop": true}, "768" : {"items": 2, "loop": true}, "992" : {"items": 4, "loop": true}}}'>
                @foreach(best_seller(8) as $best)
                <div class="product-item">
                    <div class="product-item-thumbnail">
                        <span class="product-item-label product-item-red">hot</span>
                        <img class="product-item-media" src="{{url(product_image_url($best->gambar1,'medium' ))}}" width="270" height="340" alt="{{$best->nama}}"/>
                    </div>
                    {{-- <h4 class="product-item-category"><a href="{{product_url($best)}}">{{$best->nama}}</a></h4> --}}
                    <h3 class="product-item-name"><a href="{{product_url($best)}}">{{$best->nama}}</a></h3>
                    {{-- <div class="product-item-review" data-rating='{"score" : 3.7, "readOnly": true}'></div> --}}
                    <p class="product-item-price">{{price($best)}} <span>{{$best->hargaCoret==0?'':price($best->hargaCoret,null,1)}}</span></p>
                    <div class="product-item-control">
                        <div class="product-item-action">
                        <a class="product-item-cart" href="{{product_url($best)}}">view</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="tab-pane" id="tab1-2" role="tabpanel">
            <div class="all-tb-slide owl-carousel" data-carousel='{"items": 4, "loop": true, "center": false, "margin": 30, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 5000, "nav": true, "dots": false, "responsive": {"0" : {"items": 1, "loop": true}, "479" : {"items": 2, "margin": 15, "loop": true}, "768" : {"items": 2, "loop": true}, "992" : {"items": 4, "loop": true}}}'>
                @foreach(new_product(6) as $new)
                <div class="product-item">
                    <div class="product-item-thumbnail">
                        <span class="product-item-label product-item-green">new</span>
                        <img class="product-item-media" src="{{url(product_image_url($new->gambar1,'medium' ))}}" width="270" height="340" alt="{{$best->nama}}"/>
                    </div>
                    <h3 class="product-item-name"><a href="{{product_url($new)}}">{{$new->nama}}</a></h3>
                    {{-- <div class="product-item-review" data-rating='{"score" : 3.7, "readOnly": true}'></div> --}}
                    <p class="product-item-price">{{price($new)}} <span>{{$new->hargaCoret==0?'':price($new->hargaCoret,null,1)}}</span></p>
                    <div class="product-item-control">
                        <div class="product-item-action">
                        <a class="product-item-cart" href="{{product_url($new)}}">view</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="tab-pane active" id="tab1-1" role="tabpanel">
            <div class="all-tb-slide owl-carousel" data-carousel='{"items": 4, "loop": true, "center": false, "margin": 30, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 5000, "nav": true, "dots": false, "responsive": {"0" : {"items": 1, "loop": true}, "479" : {"items": 2, "margin": 15, "loop": true}, "768" : {"items": 2, "loop": true}, "992" : {"items": 4, "loop": true}}}'>
                @foreach(list_product() as $home)
                <div class="product-item">
                    <div class="product-item-thumbnail">
                        <img class="product-item-media" src="{{url(product_image_url($home->gambar1,'medium' ))}}" width="270" height="340" alt="{{$best->nama}}"/>
                    </div>
                    <h3 class="product-item-name"><a href="{{product_url($home)}}">{{$home->nama}}</a></h3>
                    {{-- <div class="product-item-review" data-rating='{"score" : 3.7, "readOnly": true}'></div> --}}
                    <p class="product-item-price">{{price($home)}} <span>{{$home->hargaCoret==0?'':price($home->hargaCoret,null,1)}}</span></p>
                    <div class="product-item-control">
                        <div class="product-item-action">
                        <a class="product-item-cart" href="{{product_url($home)}}">view</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="tab-pane" id="tab1-4" role="tabpanel">
            <div class="all-tb-slide owl-carousel" data-carousel='{"items": 4, "loop": true, "center": false, "margin": 30, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 5000, "nav": true, "dots": false, "responsive": {"0" : {"items": 1, "loop": true}, "479" : {"items": 2, "margin": 15, "loop": true}, "768" : {"items": 2, "loop": true}, "992" : {"items": 4, "loop": true}}}'>
                @foreach(list_product() as $home)
                <div class="product-item">
                    <div class="product-item-thumbnail">
                        <span class="product-item-label product-item-red">-15%</span>
                        <img class="product-item-media" src="{{url(product_image_url($home->gambar1,'medium' ))}}" width="270" height="340" alt="{{$best->nama}}"/>
                    </div>
                    <h3 class="product-item-name"><a href="{{product_url($home)}}">{{$home->nama}}</a></h3>
                    {{-- <div class="product-item-review" data-rating='{"score" : 3.7, "readOnly": true}'></div> --}}
                    <p class="product-item-price">{{price($home)}} <span>{{$home->hargaCoret==0?'':price($home->hargaCoret,null,1)}}</span></p>
                    <div class="product-item-control">
                        <div class="product-item-action">
                        <a class="product-item-cart" href="{{product_url($home)}}">view</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section><!--/.panel-best-->

<section class="panel-sale">
    <div class="container">
        <div class="panel-sale-content">
            <h2 class="panel-sale-heading">for this summer</h2>
            <p class="panel-sale-sumary">sale UP TO <span>70% OFF</span> girls & boys clothings</p>
        </div>
    </div>
</section><!--/.panel-sale-->

<section class="panel-feature" data-grid='{"sortBy" : "random"}'>
    <div class="container">
    <h2 class="panel-heading">Featured Products</h2>
    <ul class="panel-filters">
        <li class="active"><a href="#" data-filter="*">All</a></li>
        {{-- <li><a href="#" data-filter=".clothing">Clothing</a></li>
        <li><a href="#" data-filter=".pants">Pants</a></li>
        <li><a href="#" data-filter=".caps-snapback">Caps & Snapback</a></li>
        <li><a href="#" data-filter=".sneakers">Sneakers</a></li>
        <li><a href="#" data-filter=".backpack">Backpack</a></li>
        <li><a href="#" data-filter=".watch">Watch</a></li>
        <li><a href="#" data-filter=".accesories">Accessories</a></li> --}}
    </ul>
    
    <div class="grid">
        <div class="grid-sizer col-ms-6 col-xs-12 col-sm-6 col-md-4 col-lg-3"></div>
        @foreach(list_product() as $all)
        <div class="grid-item col-ms-6 col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="product-item">
                <div class="product-item-thumbnail">
                    {{-- <span class="product-item-label product-item-red">-15%</span> --}}
                    <img class="product-item-media" src="{{url(product_image_url($all->gambar1,'medium' ))}}" width="270" height="340" alt="{{$all->nama}}"/>
                    <a class="product-item-view" href="{{product_url($all)}}" data-toggle="modal" 'data-target="#quickview-modal"'>View</a>
                </div>
                <h4 class="product-item-category"><a href="{{product_url($all)}}">{{@$all->katagori->nama}}</a></h4>
                <h3 class="product-item-name"><a href="{{product_url($all)}}">{{$all->nama}}</a></h3>
                {{-- <div class="product-item-review" data-rating='{"score" : 3.7, "readOnly": true}'></div> --}}
                <p class="product-item-price">{{price($all)}} <span>{{$all->hargaCoret==0?'':price($all->hargaCoret,null,1)}}</span></p>
                <div class="product-item-control">
                    <div class="product-item-action">
                        {{-- <a class="product-item-wishlist" href="{{product_url($all)}}"><i class="fa fa-heart-o"></i></a> --}}
                        <a class="product-item-cart" href="{{product_url($all)}}">Add to cart</a>
                        {{-- <a class="product-item-compare" href="{{product_url($all)}}"><i class="fa fa-exchange"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section><!--/.panel-feature-->

<div class="panel-partner">
    <div class="container">
    <div class="panel-partner-slider owl-carousel" data-carousel='{"items": 5, "loop": true, "center": false, "margin": 30, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 5000, "nav": true, "dots": false, "responsive": {"0" : {"items": 1, "margin": 0, "loop": true}, "479" : {"items": 2, "margin": 15, "loop": true}, "768" : {"items": 3, "margin": 20, "loop": true}, "992" : {"items": 4, "margin": 30, "loop": true}, "1200" : {"items": 5, "loop": true}}}'>
        @foreach(list_koleksi() as $koleksi)
            <div class="item">
                <a class="panel-partner-item" href="{{ koleksi_url($koleksi) }}"><img src="{{ koleksi_image_url($koleksi->gambar,'thumb') }}" width="100" height="80" alt="{{ $koleksi->nama }}"></a>
            </div>
        @endforeach
    </div>
    </div>
</div><!--/.panel-partner-->

<section class="panel-news">
    <div class="container">
        <div class="panel-news-heading">
            <h2 class="panel-heading">The Latest News</h2>
            <p class="panel-heading-summary">We've rounded up the ultimate list of the best fashion bloggers out there, so you can get amazing fashion inspiration, ideas and news in a click.</p>
        </div>
        <div class="row">

            @foreach(list_blog(3) as $blog)
            <div class="col-md-4 col-sm-4 col-xs-12">

                <article class="panel-news-item">
                    <a href="{{blog_url($blog)}}" class="panel-news-media">
                        @if(imgString($blog->isi)!='')
                        <img src="{{imgString($blog->isi)}}" width="370" height="250" alt="{{$blog->judul}}"/>
                        @else
                        {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'img-responsive',  'srcset'=>logo_image_url())) }}
                        @endif
                    </a>
                    <span class="panel-news-category">{{@$blog->kategori->nama}}</span>
                    <h3 class="panel-news-title"><a class="panel-news-link" href="{{blog_url($blog)}}">{{$blog->judul}}</a></h3>
                    <p class="panel-news-summary">{{readMore($blog->isi,50)}}</p>
                    <ul class="panel-info-post">
                        <li><span class="panel-info-date"></span>{{date("d F Y", strtotime($blog->updated_at))}}</li>
                    </ul>
                </article>

            </div>
            @endforeach
            
            
        </div>
    </div>
</section><!--/.panel-news-->

<section class="panel-mix">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3 class="panel-heading">What they says about us</h3>
                <div class="panel-testimonial owl-carousel" data-carousel='{"items": 1, "loop": true, "center": false, "margin": 0, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 5000, "nav": false, "dots": true}'>
                    @foreach(list_testimonial(7) as $testimonial)
                    <article class="panel-testimonial-item">
                        <img class="panel-testimonial-avatar" src="{{generate_image_url().$testimonial->gambar}}" width="80" height="80" alt="">
                        {{-- <div class="panel-testimonial-rating" data-rating='{"score" : 2.2, "readOnly": true}'></div> --}}
                        <p class="panel-testimonial-summary">{{$testimonial->isi}}</p>
                        <h4 class="panel-testimonial-name">{{$testimonial->nama}}</h4>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" data-wow-delay=".55s">
                <div class="panel-instagram">
                    <h3 class="panel-heading">@Instagram</h3>
                    <ul class="panel-instagram-list">
                    <li><a href="#"><img src="img/img/insta1.jpg" width="160" height="160" alt=""></a></li>
                    <li><a href="#"><img src="img/img/insta2.jpg" width="160" height="160" alt=""></a></li>
                    <li><a href="#"><img src="img/img/insta3.jpg" width="160" height="160" alt=""></a></li>
                    <li><a href="#"><img src="img/img/insta4.jpg" width="160" height="160" alt=""></a></li>
                    <li><a href="#"><img src="img/img/insta5.jpg" width="160" height="160" alt=""></a></li>
                    <li><a href="#"><img src="img/img/insta6.jpg" width="160" height="160" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--/.panel-mix-->
