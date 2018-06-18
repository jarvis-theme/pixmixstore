<section class="panel-title">
    <div class="container">
        <h2 class="panel-title-heading">Blog</h2>
        <ul class="nav-breadcrumbs">
            <li><a href="/">Home</a></li>
            <li><a>Blog</a></li>
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
            <div class="panel-blog">
                @if(list_blog(null,@$blog_category)->count() > 0)
                    @foreach(list_blog(null,@$blog_category) as $blog)
                        <article class="panel-blog-list">
                            @if((imgString($blog->isi)))
                                <a href="{{ blog_url($blog) }}" class="panel-blog-media">
                                    <img class="panel-blog-image" src="{{ imgString($blog->isi) }}" width="870" height="572" alt="{{ $blog->judul }}"/>
                                </a>
                            @endif
                            <h3 class="panel-blog-title">
                                <a href="{{ blog_url($blog) }}" title="{{ $blog->judul }}"> {{ $blog->judul }} </a>
                            </h3>
                            <div class="panel-blog-group">
                            <ul class="panel-blog-info">
                                <li> {{ date("M d, Y", strtotime($blog->created_at)) }} </li> 
                                <li> by <a href="#"> Admin </a> </li> 
                                <li> in <a href="#"> {{@$blog->kategori->nama}} </a> </li>
                            </ul>
                            <ul class="panel-blog-info">
                                {{-- <li><a href="#"><i class="fa fa-heart-o"></i> 10 LIKES</a></li>
                                <li><a href="#"><i class="fa fa-comment-o"></i> 10 COMMENTS</a></li> --}}
                            </ul>
                            </div>
                            <p class="panel-blog-summary">{{ short_description($blog->isi,300) }}.</p>
                        </article>
                        <hr>
                    @endforeach
                    <ul class="panel-paging">
                        {{ list_blog(1,@$blog_category)->links() }}
                    </ul><!--/.panel-paging-->
                @else
                    <p>Blog not found.</p>
                @endif
              
            </div>
            
        </div>
    </div>
    </div>
</div><!--/.panel-content-->

