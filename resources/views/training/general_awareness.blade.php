@extends('layouts.main', ['title' => __("label.home"), 'header' => __("label.home")])



@section('content')
    {{--<section class="inner-banner" style="background-color: #00A8FF">--}}
        {{--<div class="container">--}}
            {{--<div class="title pull-left">--}}
                {{--<h2>General Awareness</h2>--}}
            {{--</div><!-- /.title pull-left -->--}}
        {{--</div><!-- /.contianer -->--}}
    {{--</section><!-- /.inner-banner -->--}}
    <section class="service-single-page sec-pad">
        <div class="container">
            <div class="service-single-content">
                <h3>General Awareness</h3>
                <br />
                <p>Most of the Information Security breaches begin within the organisation itself. Whether intentionally or accidentally, staff tend to operate against safety norms that eventually negatively impact organisation’s information, ICT Infrastructure and systems assets. Awareness on Information Security Management and best practices is then vital. We provide this kind of training in particular depending on the organisation scan..</p>
                <br />
                <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                <br />
                <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                <br />
                <h3>Service Advantage</h3>
                <br />
                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                <br />
                <br />
                <div class="row service-features">
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-Mastercard"></i>
                            <h3>SEQURE PAYMENT</h3>
                            <p>Treamlined cloud solution. User generated content in real-time will have mult iple touchpoints for offshoring.Capitalize on focusing solely on the bottom line.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-CD"></i>
                            <h3>BEST DATA SECURITY</h3>
                            <p>Treamlined cloud solution. User generated content in real-time will have mult iple touchpoints for offshoring.Capitalize on focusing solely on the bottom line.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-Users"></i>
                            <h3>QUALIFIED GUARDST</h3>
                            <p>Treamlined cloud solution. User generated content in real-time will have mult iple touchpoints for offshoring.Capitalize on focusing solely on the bottom line.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.service-single-content -->
        </div><!-- /.container -->
    </section><!-- /.service-single-page -->
@endsection

@push('after-scripts')
{!! Html::script(url('vendor/select2/js/select2.min.js')) !!}
{!! Html::script(url('vendor/owl.carousel/owl.carousel.js')) !!}

<script>

</script>
@endpush


