<ul class="clearfix">
    <li>
        <a href="{{URL::to('checkout')}}"><i class="fa fa-shopping-cart"></i><span class="cart-wishlist-number">{{Shpcart::cart()->total_items()}}</span><span class="cart-wishlist-money">{{ jadiRupiah(Shpcart::cart()->total() )}}</span></a>
        <div class="cart-wishlist-content">
            @if(Shpcart::cart()->total_items()>0)
            <p class="cart-wishlist-heading">{{Shpcart::cart()->total_items()}} items in your shopping cart.</p>
            @foreach (Shpcart::cart()->contents() as $key => $cart)
                <div class="cart-wishlist-item">
                    <div class="cart-wishlist-image">
                        <a href="shopping_cart.html">
                            <img src="{{product_image_url($cart['image'],'thumb')}}" width="70" height="88" alt="">
                        </a>
                    </div>
                    <div class="cart-wishlist-summary">
                        <h3 class="cart-wishlist-title"><a href="#">{{$cart['name']}}</a></h3>
                        <p class="cart-wishlist-price">Price: {{ jadiRupiah($cart['qty'] * $cart['price'])}}</p>
                        <p class="cart-wishlist-quantity">Quantity: {{$cart['qty']}}</p>
                        
                    </div>
                </div>
            @endforeach
            <div class="cart-wishlist-action">
                <a href="{{URL::to('checkout')}}" class="cart-wishlist-checkout">check out</a>
            </div>
            @else
            <p class="cart-wishlist-heading">You have no items in your shopping cart.</p>
            @endif
            
        </div>
    </li>
</ul>