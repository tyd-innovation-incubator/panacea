@extends('layouts.main', ['title' => __("label.home"), 'header' => __("label.home")])



@section('content')
    <!-- start carousel -->
    @include("includes.components.carousel")
    <!-- end carousel -->

    <!-- start about us -->
    {{--@include("includes.home.aboutus")--}}
    {{--<!-- end about us -->--}}

    {{--<!-- start Services -->--}}
    <div class="card">
        <div class="card-body">
            @include("service.service")
        </div>
    </div>
    {{--<!-- end services -->--}}

    {{--<!-- start portifolio -->--}}
    {{--@include("includes.home.portifolio")--}}
    {{--<!-- end portifolio -->--}}

    {{--<!-- start testimonials -->--}}
    {{--@include("includes.home.testimonials")--}}
    {{--<!-- end testimonials -->--}}

    {{--<!-- start partners -->--}}
    {{--@include("includes.home.company_partner")--}}
    <!-- end partners -->

    {{--@include("includes.home.swtchstyle")--}}
@endsection

@push('after-scripts')
{!! Html::script(url('vendor/select2/js/select2.min.js')) !!}
{!! Html::script(url('vendor/owl.carousel/owl.carousel.js')) !!}

<script>

</script>
@endpush