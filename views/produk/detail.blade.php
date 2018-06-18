<section class="panel-title">
    <div class="container">
    <h2 class="panel-title-heading">Catelogue</h2>
    <ul class="nav-breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><a href="/produk">Shop</a></li>
        <li><a>{{ $produk->nama }}</a></li>
    </ul>
    </div>
</section><!--/.panel-title-->

<div class="panel-content">
    <div class="container">
        <div class="panel-product">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="panel-product-media">
                        {{-- <div class="status-of-product is-open">External</div> --}}
                        <div id="owl-large" class="owl-carousel">
                            <div class="item">
                            <a href="{{ product_image_url($produk->gambar1) }}" class="gallery">
                                <img class="gallery-image" src="{{ product_image_url($produk->gambar1) }}" width="570" height="718" alt=""/>
                            </a>
                            </div>
                            <div class="item">
                            <a href="{{ product_image_url($produk->gambar2) }}" class="gallery">
                                <img class="gallery-image" src="{{ product_image_url($produk->gambar2) }}" width="570" height="718" alt=""/>
                            </a>
                            </div>
                            <div class="item">
                            <a href="{{ product_image_url($produk->gambar3) }}" class="gallery">
                                <img class="gallery-image" src="{{ product_image_url($produk->gambar3) }}" width="570" height="718" alt=""/>
                            </a>
                            </div>
                            <div class="item">
                            <a href="{{ product_image_url($produk->gambar4) }}" class="gallery">
                                <img class="gallery-image" src="{{ product_image_url($produk->gambar4) }}" width="570" height="718" alt=""/>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div id="owl-thumbnail" class="panel-single-thumbnail owl-carousel">
                        <div class="item">
                            <img class="gallery-image" src="{{ product_image_url($produk->gambar1,'thumb') }}" width="100" height="126" alt=""/>
                        </div>
                        <div class="item">
                            <img class="gallery-image" src="{{ product_image_url($produk->gambar2,'thumb') }}" width="100" height="126" alt=""/>
                        </div>
                        <div class="item">
                            <img class="gallery-image" src="{{ product_image_url($produk->gambar3,'thumb') }}" width="100" height="126" alt=""/>
                        </div>
                        <div class="item">
                            <img class="gallery-image" src="{{ product_image_url($produk->gambar4,'thumb') }}" width="100" height="126" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h1 class="panel-product-title">{{ $produk->nama }}</h1>
                    {{-- <p class="panel-product-line panel-product-rating" data-rating='{"score" : 1.2, "readOnly": true, "space": true}'></p> --}}
                    <p class="panel-product-line panel-product-price">{{ price($produk->hargaJual) }} <span>{{ $produk->hargaCoret?price($produk->hargaCoret,null,1):'' }}</span></p>
                    <p class="panel-product-line panel-product-instock">
                        <span class="panel-product-label">Availability: </span> 
                        @if($produk->stok>0)
                        <a class="green-color"> In Stock </a>  
                        @else
                        <a class="red-color"> Out of Stock </a>  
                        @endif
                    </p>

                    <p class="panel-product-line panel-product-summary">
                        <span class="panel-product-label">Description:</span>
                        {{ $produk->deskripsi }}
                    </p>

                    <form action="#" id="addorder">
                        @if($opsiproduk->count()>0)
                                <p> <span class="panel-product-label">Varian :</span> 
                                    <select name="opsiproduk"
                                        class="input-sm" data-width="100%"
                                        data-toggle="tooltip" title="">
                                        <option>Choose type which you like.... </option>
                                        @foreach ($opsiproduk as $key => $opsi)
                                        <option data-price="{{price($opsi->harga)}}" value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                            {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <small>* required</small>
                                </p>
                        @endif   

                        <div class="panel-product-line panel-product-order">
                            <input type="button" value="-" class="panel-product-control" data-quantity="minus" data-target="panel-product-quantity"/>
                            <input type="number" name="qty" id="panel-product-quantity" value="1" class="panel-product-control" data-max="99"/>
                            <input type="button" value="+" class="panel-product-control" data-quantity="plus" data-target="panel-product-quantity"/>
                            <button class="panel-product-buy cart-btn add_cart" type="submit">ADD TO CART</button>
                        </div>
                    </form>
                    <div class="panel-product-line panel-product-actions">
                    {{-- <a href="#"><i class="fa fa-heart-o"></i>Add to Wishlist</a>
                    <a href="#"><i class="fa fa-exchange"></i>Add to Compare</a> --}}
                    </div>
                    <p class="panel-product-line panel-product-info">
                    <span class="panel-product-label">SKU:</span> {{!empty($produk->barcode)?$produk->barcode:'N/A'}}
                    </p>
                    <p class="panel-product-line panel-product-info">
                    <span class="panel-product-label">Category:</span> {{@$produk->kategori->nama}}
                    </p>
                    <div class="panel-product-line panel-product-share">
                        <span class="panel-product-label">Share:</span>
                        <a class="facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{product_url($produk)}}&display=popup&ref=plugin&src=share_button">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" target="_blank" href="https://twitter.com/intent/tweet?text={{$produk->nama}}&url={{product_url($produk)}}">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="googleplus" target="_blank" href="https://plus.google.com/share?app=110&url={{product_url($produk)}}">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url={{product_url($produk)}}&media={{ product_image_url($produk->gambar1) }}&description={{strip_tags($produk->deskripsi)}}" class="pin-it-button" count-layout="horizontal">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div><!--/.panel-product-->

        <div class="panel-detail">
            <ul class="nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Description</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Additional Information</a></li>
            <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Reviews</a></li>
            {{-- <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Shippings & Returns</a></li> --}}
            </ul>
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">
                <h5>PRODUCT DESCRIPTION</h5>
                <p>{{$produk->deskripsi}}</p>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab2">
                <h5>PRODUCT DESCRIPTION</h5>
                <p>{{$produk->dmt}}</p>
                <div class="panel-table panel-additional">
                    <div class="panel-row">
                        <div class="panel-cell">Created</div>
                        <div class="panel-cell">October 1, 2016</div>
                    </div>
                    <div class="panel-row">
                        <div class="panel-cell">Last Update</div>
                        <div class="panel-cell">October 24, 2016</div>
                    </div>
                    <div class="panel-row">
                        <div class="panel-cell">Tag</div>
                        <div class="panel-cell">{{getTagsProduk('#<a rel="tag"></a> ',@$produk->tags,',',true)}}</div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane " id="tab3">
                <div class="panel-review">
                <h3 class="panel-review-title">Reviews for this item</h3>
                <div class="panel-review-form">
                    {{ pluginComment(product_url($produk), @$produk) }}
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab4"></div>
            </div>
        </div><!--/.panel-detail-->

        @if(other_product($produk)->count() > 0)
        <div class="panel-related">
          <h2 class="panel-heading">Related Products</h2>
          <div class="panel-related-slider owl-carousel" data-carousel='{"items": 4, "loop": true, "center": false, "margin": 20, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 5000, "nav": true, "dots": false, "responsive": {"0" : {"items": 1, "loop": true}, "479" : {"items": 2, "loop": true}, "768" : {"items": 3, "loop": true}, "992" : {"items": 4, "loop": true}}}'>
            
            @foreach(other_product($produk) as $key=> $related)
            <div class="item">
              <div class="product-item">
                <div class="product-item-thumbnail">
                  <img src="{{ product_image_url($related->gambar1,'medium') }}" width="270" height="340" alt="Masta Kids Fashion"/>
                  <a class="product-item-view" href="{{ product_url($related) }}" data-toggle="modal" 'data-target'="#quickview-modal">Quick View</a>
                  {{-- <span class="product-item-label product-item-red">-15%</span> --}}
                </div>
                <h4 class="product-item-category"><a href="{{ product_url($related) }}">{{@$related->kategori->nama}}</a></h4>
                <h3 class="product-item-name"><a href="{{ product_url($related) }}">{{$related->nama}}</a></h3>
                {{-- <div class="product-item-review" data-rating='{"score" : 3.2, "readOnly": true}'></div> --}}
                <p class="product-item-price">{{price($related->hargaJual)}} <span>{{price($related->hargaCoret)}}</span></p>
                <div class="product-item-control">
                  <div class="product-item-action">
                    <a class="product-item-cart" href="{{ product_url($related) }}">Add to cart</a>\
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div><!--/.panel-related-->
        @endif
        

    </div>
</div><!--/.panel-content-->

<div class="modal fade" id="quickview-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="dismiss-pop" data-dismiss="modal"><i class="fa fa-times"></i></button>
        <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel-product-media" data-zoom="image">
            <img src="img/img/product-page13-1.jpg" width="670" height="843" alt="">
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <h1 class="panel-product-title">Masta Baby Shop Shirt</h1>
            <p class="panel-product-line panel-product-rating" data-rating='{"score" : 1.2, "readOnly": true, "space": true}'></p>
            <p class="panel-product-line panel-product-price">$85.00</p>
            <p class="panel-product-line panel-product-instock"><span class="panel-product-label">Availability: </span> <a href="#">Instock</a></p>
            <p class="panel-product-line panel-product-summary">
            <span class="panel-product-label">Description:</span>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <p class="panel-product-line panel-product-colors">
            <span class="panel-product-label">Colors:</span>
            <a href="#" data-order="color" data-value="black" class="black">Black</a>
            <a href="#" data-order="color" data-value="brown" class="brown">Brown</a>
            <a href="#" data-order="color" data-value="yellow" class="yellow">Yellow</a>
            <a href="#" data-order="color" data-value="red" class="red">Red</a>
            <a href="#" data-order="color" data-value="green" class="green">Green</a>
            <a href="#" data-order="color" data-value="blue" class="blue">Blue</a>
            </p>
            <p class="panel-product-line panel-product-sizes">
            <span class="panel-product-label">Size:</span>
            <a href="#" data-order="size" data-value="xs">xs</a>
            <a href="#" data-order="size" data-value="s">s</a>
            <a href="#" data-order="size" data-value="m">m</a>
            <a href="#" data-order="size" data-value="l">l</a>
            <a href="#" data-order="size" data-value="xl">xl</a>
            <a href="#" data-order="size" data-value="2xl">2xl</a>
            <a href="#" data-order="size" data-value="3xl">3xl</a>
            <a href="#" data-order="size" data-value="4xl">4xl</a>
            </p>
            <div class="panel-product-line panel-product-order">
            <input type="button" value="-" class="panel-product-control" data-quantity="minus" data-target="panel-quick-quantity"/>
            <input type="number" id="panel-quick-quantity" value="0" class="panel-product-control" data-max="99"/>
            <input type="button" value="+" class="panel-product-control" data-quantity="plus" data-target="panel-quick-quantity"/>
            <a class="panel-product-buy" href="#">ADD TO CART</a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div><!--/.quickview-modal-->

