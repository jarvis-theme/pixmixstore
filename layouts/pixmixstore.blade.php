<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="ID"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en">
<!--<![endif]-->
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }} 
        {{ Theme::asset()->styles() }} 
    </head>
    <body>
        <div class="wrapper">
            <!-- HEADER -->
            {{ Theme::partial('header') }} 
            <!-- /HEADER -->

            <!-- CONTENT AREA -->
            <!-- Main Slider -->
            {{ Theme::partial('slider') }}
            <!-- / Main Slider -->
            <article class="wrapper"> 
                {{Theme::place('content')}} 
            </article>
            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <hr class="divider-1">
            {{ Theme::partial('footer') }} 
            <!-- /FOOTER -->

            <div class="btn-top" id="btn-top">
                <a class="btn-top-link" href="#header" data-scroll="item"><i class="fa fa-angle-up"></i></a>
            </div><!--/.btn-top-->
        </div>
        <!-- /WRAPPER -->

        {{ Theme::partial('defaultjs') }} 
        {{ Theme::asset()->scripts() }}
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ Theme::partial('analytic') }}   
    </body>
</html>