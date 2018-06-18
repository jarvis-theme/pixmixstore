<section class="panel-title">
    <div class="container">
        <h2 class="panel-title-heading">Order Complete</h2>
        <ul class="nav-breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="#">Order Complete</a></li>
        </ul>
    </div>
</section><!--/.panel-title-->
<section class="panel-complete">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="panel-checkout-item" data-mh="checkout">
                    <h2 class="panel-checkout-heading">Your order</h2>
                    @if($order->count() != 0)
                        <div class="panel-checkout-table">
                        <div class="panel-checkout-row panel-checkout-head">
                            <div class="panel-checkout-cell">Order Code</div>                              
                            <div class="panel-checkout-cell">date</div>
                            <div class="panel-checkout-cell">product name</div>
                            <div class="panel-checkout-cell">total</div>
                            <div class="panel-checkout-cell">shipping id</div>
                            <div class="panel-checkout-cell">status</div>
                            <div class="panel-checkout-cell">Confirmation</div>
                        </div>
                            @foreach (list_order() as $item)
                            <div class="panel-checkout-row">
                                <div class="panel-checkout-cell">{{$pengaturan->checkoutType==3 ? prefixOrder().$item->kodePreorder : prefixOrder().$item->kodeOrder}}</div>
                                <div class="panel-checkout-cell">{{$pengaturan->checkoutType==3 ? waktu($item->tanggalPreorder) : waktu($item->tanggalOrder)}}</div>
                                <div class="panel-checkout-cell">

                                    @if($pengaturan->checkoutType==3) 
                                        <span>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku->opsi1.($item->opsisku->opsi2!='' ? ' / '.$item->opsisku->opsi2:'').($item->opsisku->opsi3!='' ? ' / '.$item->opsisku->opsi3:'')}}) - {{$item->jumlah}}</span><br>
                                    @else 
                                        @foreach ($item->detailorder as $detail)
                                        
                                        <a>{{$detail->produk->nama}} ( {{$detail->qty}} )</a>
                                            @if($detail->opsiSkuId !=0)
                                            <span> <i class="arrow_carrot-right"></i> {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}}  
                                            </span><br>
                                            @endif
                                        @endforeach 
                                    @endif
                                </div>
                                <div class="panel-checkout-cell">{{ price($item->total) }}</div>
                                <div class="panel-checkout-cell">{{ $item->noResi }}</div>
                                <div class="panel-checkout-cell">
                                    @if($pengaturan->checkoutType==1) 
                                        @if($item->status==0)
                                        <span class="is-hot">Pending</span>
                                        @elseif($item->status==1)
                                        <span class="is-hot">Konfirmasi diterima</span>
                                        @elseif($item->status==2)
                                        <span class="is-new">Pembayaran diterima</span>
                                        @elseif($item->status==3)
                                        <span class="is-new">Terkirim</span>
                                        @elseif($item->status==4)
                                        <span class="is-hot">Batal</span>
                                        @endif 
                                    @else 
                                        @if($item->status==0)
                                        <span class="is-hot">Pending</span>
                                        @elseif($item->status==1)
                                        <span class="is-hot">Konfirmasi DP diterima</span>
                                        @elseif($item->status==2)
                                        <span class="is-new">DP terbayar</span>
                                        @elseif($item->status==3)
                                        <span class="is-hot">Menunggu pelunasan</span>
                                        @elseif($item->status==4)
                                        <span class="is-new">Pembayaran lunas</span>
                                        @elseif($item->status==5)
                                        <span class="is-new">Terkirim</span>
                                        @elseif($item->status==6)
                                        <span class="is-hot">Batal</span>
                                        @elseif($item->status==7)
                                        <span class="is-new">Konfirmasi Pelunasan diterima</span>
                                        @endif
                                    @endif
                                </div>
                                <div class="panel-checkout-cell">
                                @if($pengaturan->checkoutType==1) 
                                    @if($item->status <= 1)
                                    <a href="{{url('konfirmasiorder/'.$item->id)}}" target="_blank" class="btn btn-default"> <b>Payment Confirmation </b></a>  
                                    <!-- <button onclick="window.open('{{url('konfirmasiorder/'.$item->id)}}','_blank')" class="btnbingoOne" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="fa fa-eye"></i></button> -->
                                    @endif 
                                @endif
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    @else
                    <div class="continue-shopping text-center">
                        <h1>No Orders History</h1><br><br>
                        <a href="{{url('produk')}}" class="btn btn-black"> Back to Shopping </a>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</section>
