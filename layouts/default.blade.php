<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="ID"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en">
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }} 
        {{ Theme::asset()->styles() }} 
    </head>
    <body id="home" class="wide">        
        <!-- PRELOADER -->
        <!--<div id="loading">
            <div class="loader"></div>
        </div> -->
        <!-- /PRELOADER -->
        
        <!-- WRAPPER -->
        <main id="home-ten" class="wrapper">
            <!-- HEADER -->
            {{ Theme::partial('header') }} 
            <!-- /HEADER -->

            <!-- CONTENT AREA -->
            <article class="wrapper"> 
                {{Theme::place('content')}}    
            </article>
            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <hr class="divider-1">
            {{ Theme::partial('footer') }} 
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"> <i class="arrow_carrot-up"></i> </div>
        </main>
        <!-- /WRAPPER -->
        {{ Theme::partial('defaultjs') }} 
        {{ Theme::asset()->scripts() }}
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ Theme::partial('analytic') }}   
        {{-- Theme::asset()->scripts() --}}
        <div id="goToTop" style="display: none;"><span class="fa fa-long-arrow-up"></span></div>
    </body>
</html>