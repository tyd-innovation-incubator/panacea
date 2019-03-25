<!DOCTYPE html>
@auth
<html class="sidebar-left-big-icons">
{{-- sidebar-left-collapsed  sidebar-left-big-icons left-sidebar-panel --}}
@endauth
@guest
<html class="fixed has-top-menu">
@endguest
<head>
    {{--<!-- Basic -->--}}
    <meta charset="UTF-8">

    <title>{{ config("app.name") . " - " . $title }}</title>
    <meta name="keywords" content="{{ config("env.app.keywords") }}" />
    <meta name="description" content="{{ config("env.app.description") }}">
    <meta name="author" content="{{ config("env.app.vendor") }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{--<link href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />--}}


    <link href="{{url('css/style.css')}}" rel="stylesheet" />
    <link href="{{url('css/responsive.css')}}" rel="stylesheet" />
    <link href="{{url('css/custom.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
    <link rel="shortcut icon" href="img/test.png" />






</head>
<body>

{{--Header section--}}
@include("includes.components.header")


    <div class="inner-wrapper">


            @yield('content')

    </div>




    {{--@include("includes/components/social_media")--}}

    @include("includes/components/footer")


{{--<!-- Scripts -->--}}
{!! Html::script(url('assets/jquery.js')) !!}
{!! Html::script(url('assets/bootstrap/js/bootstrap.min.js')) !!}

{!! Html::script(url('assets/revolution/js/jquery.themepunch.tools.min.js')) !!}
{!! Html::script(url('assets/revolution/js/extensions/revolution.extension.actions.min.js')) !!}
{!! Html::script(url('assets/revolution/js/extensions/revolution.extension.carousel.min.js')) !!}
{!! Html::script(url('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')) !!}
{!! Html::script(url('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')) !!}
{!! Html::script(url('assets/revolution/js/extensions/revolution.extension.migration.min.js')) !!}
{!! Html::script(url('assets/revolution/js/extensions/revolution.extension.navigation.min.js')) !!}
{!! Html::script(url('assets/revolution/js/extensions/revolution.extension.parallax.min.js')) !!}
{!! Html::script(url('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')) !!}
{!! Html::script(url('assets/revolution/js/extensions/revolution.extension.video.min.js')) !!}
{!! Html::script(url('assets/jquery-validation/dist/jquery.validate.min.js')) !!}
{!! Html::script(url('assets/owl.carousel-2/owl.carousel.min.js')) !!}
{!! Html::script(url('assets/isotope.js')) !!}
{!! Html::script(url('assets/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')) !!}
{!! Html::script(url('assets/waypoints.min.js')) !!}
{!! Html::script(url('assets/jquery.counterup.min.js')) !!}
{!! Html::script(url('assets/wow.min.js')) !!}
{!! Html::script(url('js/custom.js')) !!}


   <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js"></script>
   <script>
       $('.flexslider').flexslider({
           animation: "slide",
           controlNav: false
       });
   </script>

</body>
</html>