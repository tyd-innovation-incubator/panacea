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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800" rel="stylesheet" >
    <link href="http://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="{{ asset('font-awesome/font-awesome/css/font-awesome.min.css')}}">


    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{url('css/bootstrap-responsive.css')}}" rel="stylesheet" />
    <link href="{{url('css/fancybox/jquery.fancybox.css')}}" rel="stylesheet" />
    <link href="{{url('css/jcarousel.css')}}" rel="stylesheet" />
    <link href="{{url('css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{url('css/style.css')}}" rel="stylesheet" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('ico/apple-touch-icon-144-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('ico/apple-touch-icon-114-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('ico/apple-touch-icon-72-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{url('ico/apple-touch-icon-57-precomposed.png')}}" />
    <link rel="shortcut icon" href="{{url('ico/favicon.png')}}" />




</head>
<body data-spy="scroll" data-offset="80">
<section class="body">

    @include("includes.components.header")

    <div class="inner-wrapper">

        <section role="main" class="content-body">

            @yield('content')

        </section>
    </div>




    {{--@include("includes/components/social_media")--}}

    @include("includes/components/footer")

</section>

{{--<!-- Scripts -->--}}
{!! Html::script(url('js/jquery.js')) !!}
{!! Html::script(url('js/jquery.easing.1.3.js')) !!}
{!! Html::script(url('js/bootstrap.min.js')) !!}
{!! Html::script(url('js/jcarousel/jquery.jcarousel.min.js')) !!}
{!! Html::script(url('js/jquery.fancybox.pack.js')) !!}
{!! Html::script(url('js/jquery.fancybox-media.js')) !!}
{!! Html::script(url('js/google-code-prettify/prettify.js')) !!}

{!! Html::script(url('js/portfolio/jquery.quicksand.js')) !!}
{!! Html::script(url('js/portfolio/setting.js')) !!}
{!! Html::script(url('js/jquery.flexslider.js')) !!}
{!! Html::script(url('js/jquery.nivo.slider.js')) !!}

{!! Html::script(url('js/modernizr.custom.js')) !!}
{!! Html::script(url('js/jquery.ba-cond.min.js')) !!}
{!! Html::script(url('js/jquery.slitslider.js')) !!}
{!! Html::script(url('js/animate.js')) !!}

<!-- Template Custom JavaScript File -->
<script src="{{url('js/custom.js')}}"></script>

<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c6d26f4f324050cfe3425b5/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>

</body>
</html>