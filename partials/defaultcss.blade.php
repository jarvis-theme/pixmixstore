<!-- Favicon -->
{{favicon()}}

<!-- CSS Global -->
{{ generate_theme_css('pixmixstore/assets/css/flaticon.css') }}
{{ generate_theme_css('pixmixstore/assets/css/animate.css') }}
{{ generate_theme_css('pixmixstore/assets/css/font-awesome.min.css') }}
{{ generate_theme_css('pixmixstore/assets/css/owl.carousel.min.css') }}
{{ generate_theme_css('pixmixstore/assets/css/jquery-ui.css') }}

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:400,400i,700" rel="stylesheet">

<!-- Custom CSS -->
@if($tema->isiCss=='')
	{{ generate_theme_css('pixmixstore/assets/css/main.css') }}
@else
	{{ generate_theme_css('pixmixstore/assets/css/editmain.css') }} 
@endif


