<section class="panel-title">
    <div class="container">
    <ul class="nav-breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><a >Service & Policy</a></li>
    </ul>
    </div>
</section><!--/.panel-title-->

<article class="panel-about">
    <div class="container">
        <div class="title-wrap">
            <h2 class="section-title title-bg-1"> Term of Service </h2>
            <p class="sub-title"> </p>
        </div>
        {{ $service->tos }}
        <hr class="divider-1" />
        <div class="title-wrap">
            <h2 class="section-title title-bg-1"> Refund </h2>
            <p class="sub-title"> </p>
        </div>
        {{ $service->refund }}
        <hr class="divider-1" />
        <div class="title-wrap">
            <h2 class="section-title title-bg-1"> Privacy </h2>
            <p class="sub-title"> </p>
        </div>
        {{ $service->privacy }}
    </div>
</article><!--/.panel-about-->
