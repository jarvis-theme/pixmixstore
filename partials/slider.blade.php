<div class="panel-banner-v2 owl-carousel" data-carousel='{"items": 1, "loop": true, "center": false, "margin": 0, "autoWidth": false, "rtl": false, "autoHeight": false, "autoplay": true, "autoplayTimeout": 10000, "nav": true, "dots": true, "smartSpeed": 1000}'>
    @if(slideshow())
        @foreach(slideshow() as $key=> $slide)
            <article class="item">
                <img src="{{slide_image_url($slide->gambar)}}" width="1920" height="650" alt="{{$slide->title}}"/>
                <div class="caption">
                    <h4>{{$slide->title}}</h4>
                    <h2> {{$slide->text}}</h2>
                    <p>
                        <a href="{{filter_link_url($slide->url)}}">view</a>
                    </p>
                </div>
            </article>
        @endforeach
    @endif
</div><!--/.panel-banner-v2-->
