<section class="panel-title">
    <div class="container">
        <h2 class="panel-title-heading">Blog</h2>
        <ul class="nav-breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a href="{{ url('blog') }}">Blog</a></li>
            <li><a >{{ $detailblog->judul }}</a></li>
        </ul>
        
    </div>
</section><!--/.panel-title-->
{{-- <a href="#" class="panel-blog-media">
                    <img class="panel-blog-image" src="{{imgString($detailblog->isi)}}" width="870" height="572" alt=""/>
                </a> --}}
<div class="panel-content">
    <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12 left-sm">
            <div class="panel-box">
                <h2 class="panel-box-title">Search</h2>
                <div class="panel-box-search">
                    <form action="{{URL::to('search')}}" method="post" class="sidebar-search">
                        <input type="text" placeholder="type keyword" name="search" class="panel-box-control">
                        <button class="panel-box-find" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            @if(recentBlog()->count() > 0)
                <div class="panel-box">
                    <h2 class="panel-box-title">Recent Post</h2>
                    @foreach(recentBlog() as $artikel)
                    <article class="panel-box-article">
                        <a href="{{ blog_url($artikel) }}" class="panel-box-media" style="border: 1px solid #ddd;">
                            <img src="{{imgString($artikel->isi)}}" width="70" height="70" alt="{{short_description($artikel->judul,10)}}"/>
                        </a>
                        <h3 class="panel-box-name">
                            <a href="{{ blog_url($artikel) }}">{{ short_description($artikel->judul, 40) }}</a>
                        </h3>
                    </article>
                    @endforeach
                </div>
            @endif
            
            
            @if(list_blog_category()->count() > 0)
                <div class="panel-box">
                    <h2 class="panel-box-title">Blog Categories</h2>
                    <nav class="panel-box-nav">
                    <ul class="nav-sidebar">
                        @foreach(list_blog_category() as $kat)
                            <li>
                                <a href="{{ blog_category_url($kat) }}" title="{{ $kat->nama }}">{{ $kat->nama }}</a>
                            </li>
                        @endforeach
                    </ul>
                    </nav>
                </div>
            @endif
            <a class="panel-box-banner" href="#"><img src="img/img/banner-blog.jpg" alt=""></a>
        </div>

        <div class="col-md-9 col-sm-8 col-xs-12">
            <article class="panel-blog-list">
                
                <h1 class="panel-blog-title">
                    <a href="#" title="">{{ $detailblog->judul }}</a>
                </h1>
                <div class="panel-blog-group">
                    <ul class="panel-blog-info">
                        <li><a href="#"><i class="fa fa-file-text-o"></i> {{$detailblog->kategori->nama}} </a></li>
                        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                        <li><a href="#"><i class="fa fa-clock-o"></i> {{ date("M d, Y", strtotime($blog->created_at)) }}</a></li>
                    </ul>
                    <ul class="panel-blog-info">
                        {{-- <li><a href="#"><i class="fa fa-heart-o"></i> 10 LIKES</a></li>
                        <li><a href="#"><i class="fa fa-comment-o"></i> 10 COMMENTS</a></li> --}}
                    </ul>
                </div>
                <div class="panel-blog-content">
                    {{ $detailblog->isi }}
                </div>
                <div class="panel-tags-blog">
                    <span class="panel-tags-label">tags</span>
                    {{ getTags('<a></a>',$detailblog->tags)}}
                </div>
                <div class="panel-share-blog">
                <div class="panel-blog-social panel-product-share">
                    <span class="panel-share-label">Share:</span>
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{blog_url($detailblog)}}&display=popup&ref=plugin&src=share_button"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="http://pinterest.com/pin/create/button/?url={{blog_url($detailblog)}}&media={{imgString($blog->isi)}}&description={{strip_tags($detailblog->isi)}}" class="pin-it-button" count-layout="horizontal"><i class="fa fa-pinterest"></i></a>
                    <a target="_blank" href="https://twitter.com/intent/tweet?text={{$detailblog->judul}}&url={{blog_url($detailblog)}}"><i class="fa fa-twitter"></i></a>
                    <a class="social_googleplus" target="_blank" href="https://plus.google.com/share?app=110&url={{blog_url($detailblog)}}"><i class="fa fa-google-plus"></i></a>
                    {{-- <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a> --}}
                </div>
                <ul class="panel-blog-info">
                    <li><a href="#"><i class="fa fa-heart-o"></i>{{$detailblog->view}} VIEWS</a></li>
                </ul>
                </div>
            </article><!--/.panel-blog-list-->

            <hr class="panel-hr">

            <section class="panel-article">
                {{-- <h2 class="panel-article-heading">Related articles</h2> --}}
                <div class="row">
                    @if(prev_blog($detailblog))
                        <div class="col-md-6 col-sm-6 col-xs-12" data-mh="blog">
                            <article class="panel-news-item">
                                <span class="panel-news-category"><i class="fa fa-arrow-left"></i> Previus blog</span>
                                <h3 class="panel-news-title"><a href="{{ blog_url(prev_blog()) }}">  {{prev_blog()->judul}} </a> </h3>
                            </article>
                        </div>
                    @endif
                    @if(next_blog($detailblog))
                        <div class="col-md-6 col-sm-6 col-xs-12" data-mh="blog">
                            <article class="panel-news-item">
                                <span class="panel-news-category">Next blog <i class="fa fa-arrow-right"></i></span>
                                <h3 class="panel-news-title"><a href="{{ blog_url(next_blog()) }}"> {{next_blog()->judul}}  </a> </h3>
                            </article>
                        </div>
                    @endif
                </div>
            </section><!--/.panel-article-->

            <hr class="panel-hr">

            <div class="panel-review-form">
                <h3 class="panel-review-title">Leave a comment</h3>
                <form action="index.html" method="post">
                    {{ pluginComment(blog_url($detailblog), @$detailblog) }}
                </form>
            </div><!--/.panel-review-form-->
        </div>
    </div>
    </div>
</div><!--/.panel-content-->