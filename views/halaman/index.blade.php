<section class="panel-title">
    <div class="container">
    <ul class="nav-breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><a >{{ ($data->judul) }}</a></li>
    </ul>
    </div>
</section><!--/.panel-title-->

<article class="panel-about">
    <div class="container">
        <h1 class="panel-about-title">About Us</h1>
        <p>{{ $data->isi }}</p>
    </div>
</article><!--/.panel-about-->