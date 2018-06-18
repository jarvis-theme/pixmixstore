<section class="panel-title">
    <div class="container">
    <h2 class="panel-title-heading">Catelogue</h2>
    <ul class="nav-breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><a href="/produk">Shop</a></li>
        {{-- <li><a href="#">Catalogue Left Sidebar 3 Col</a></li> --}}
    </ul>
    </div>
</section><!--/.panel-title-->
<section class="panel-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel-sidebar panel-sidebar-categories">
                    <div class="panel-sidebar-heading">
                        <h3 class="panel-sidebar-title">Product Categories</h3>
                        <a class="panel-sidebar-toggle" href="#"></a>
                    </div>
                    <nav class="panel-sidebar-inner">
                        <ul class="nav-sidebar">
                            @foreach (list_category() as $kat)
                                @if($kat->parent=='0')
                                    @if($kat->anak->count())
                                        <li>                              
                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#{{strtolower($kat->nama)}}"><strong> {{ucfirst($kat->nama)}} </strong></a>
                                        </li>
                                        
                                        @foreach(list_category() as $submenu)
                                            @if ($submenu->parent==$kat->id)
                                            <li>
                                                <a href="{{category_url($submenu)}}">- {{ucfirst($submenu->nama)}}</a>
                                                @if($submenu->anak->count() != 0)
                                                
                                                    @foreach($submenu->anak as $submenu2)
                                                        @if($submenu2->parent == $submenu->id)
                                                            <a href="{{category_url($submenu2)}}" class="active" style="text-decoration: none;">-- {{ucfirst($submenu2->nama)}}</a>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </li>
                                            @endif
                                        @endforeach
                                    @else                                       
                                        <li> <a href="{{category_url($kat)}}"> {{ucfirst($kat->nama)}} </a> </li>
                                    @endif
                                @endif
                            @endforeach 
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12">

                <div class="panel-sorting">
                    <p class="panel-sorting-result">Showing {{Input::get('show')!=""?Input::get('show'):12}} of {{list_product()->count()}} results</p>
                    <ul class="panel-sorting-option">
                        {{-- <li><a class="active" href="#"><i class="fa fa-th"></i></a></li> --}}
                        {{-- <li><a href="#"><i class="fa fa-bars"></i></a></li> --}}
                        <li>
                            <select name="SortBy" id="sort" name="sort"  data-rel="{{URL::current()}}" class="selectpicker"  data-width="100%" data-toggle="tooltip">
                                <option value="">Default</option>
                                <option value="az">Alphabetically, A-Z</option>
                                <option value="za">Alphabetically, Z-A</option>
                                <option value="high">Price, low to high</option>
                                <option value="low">Price, high to low</option>
                                <option value="new">Date, new to old</option>
                                <option value="old">Date, old to new</option>
                            </select>
                        </li>
                        <li>
                            <select class="selectpicker"  data-width="100%" data-toggle="tooltip" id="show" data-rel="{{URL::current()}}">
                                <option value="12" {{Input::get('show')==12?'selected="selected"':''}}>12 ITEMS</option>
                                <option value="24" {{Input::get('show')==24?'selected="selected"':''}}>24 ITEMS</option>
                            </select>
                        </li>
                    </ul>
                </div><!--/.panel-sorting-->
                <div class="row">
                    @foreach(list_product(12, @$category, @$collection) as $myproduk)
                        <div class="col-sm-6 col-lg-3 col-xs-12" data-mh="catalogue">
                            
                            <div class="product-item">
                                <div class="product-item-thumbnail">
                                    <img alt="{{ $myproduk->nama }}" width="370" height="466" src="{{ product_image_url($myproduk->gambar1) }}">
                                    <a class="product-item-view" href="{{ product_url($myproduk) }}" data-toggle="modal" "data"-target="#quickview-modal">View</a>
                                </div>
                                <h4 class="product-item-category"><a href="{{ product_url($myproduk) }}">{{ $myproduk->vendor }}</a></h4>
                                <h3 class="product-item-name"><a href="{{ product_url($myproduk) }}">{{ $myproduk->nama }}</a></h3>
                                {{-- <div class="product-item-review" data-rating='{"score" : 1.2, "readOnly": true}'></div> --}}
                                <p class="product-item-price">{{ price($myproduk) }}<span>{{ $myproduk->hargaCoret?price($myproduk->hargaCoret,null,1):'' }}</span></p>
                                {{-- <div class="product-item-control">
                                    <div class="product-item-action">
                                        <a class="product-item-wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                        <a class="product-item-cart" href="{{ product_url($myproduk) }}">View</a>
                                        <a class="product-item-compare" href="#"><i class="fa fa-exchange"></i></a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach

                
                </div>
                <ul class="panel-paging">
                    {{ list_product(12,@$category,@$collection)->links() }}
                </ul><!--/.panel-paging-->
            </div>
        </div>
    </div>
</section><!--/.panel-content-->
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
