@extends('layouts.main', ['title' => __("label.home"), 'header' => __("label.home")])



@section('content')

    {{--<section class="inner-banner" style="background-image: url(img/pisbanner.jpg);">--}}
        {{--<div class="container">--}}
            {{--<div class="title pull-left">--}}
                {{--<h2>Contact Page One</h2>--}}
            {{--</div><!-- /.title pull-left -->--}}
            {{--<div class="breadcumb pull-right">--}}
                {{--<a href="#">Home</a><!----}}
            {{----><span class="sep">/</span><!----}}
            {{----><span class="page-name">Contact Page One</span>--}}
            {{--</div><!-- /.breadcumb pull-right -->--}}
        {{--</div><!-- /.contianer -->--}}
    {{--</section><!-- /.inner-banner -->--}}

    <section class="contact-info-style-one sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-contact-info-style-one text-center">
                        <div class="icon-box">
                            <i class="icon icon-Pointer"></i>
                        </div><!-- /.icon-box -->
                        <h3>Visit Our Office</h3>
                        <p>Ilala Bungoni <br />Dar Es Salaam,Tanzania.</p>
                    </div><!-- /.single-contact-info-style-one -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-contact-info-style-one text-center">
                        <div class="icon-box">
                            <i class="icon icon-Phone2"></i>
                        </div><!-- /.icon-box -->
                        <h3>Let’s Talk</h3>
                        <p>Phone:
                            +255 713 518 549 <br />Mobile:
                            +255 713 518 549</p>
                    </div><!-- /.single-contact-info-style-one -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-contact-info-style-one text-center">
                        <div class="icon-box">
                            <i class="icon icon-MessageRight"></i>
                        </div><!-- /.icon-box -->
                        <h3>Email</h3>
                        <p>info@pis.co.tz <br />info@tyd.or.tz</p>
                    </div><!-- /.single-contact-info-style-one -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-contact-info-style-one text-center">
                        <div class="icon-box">
                            <i class="icon icon-Headset"></i>
                        </div><!-- /.icon-box -->
                        <h3>Customer Service</h3>
                        <p>Call For a Help <br /> We Here To help you  </p>
                    </div><!-- /.single-contact-info-style-one -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.contianer -->
    </section><!-- /.contact-info-style-one -->

    <section class="contact-form-style-one">
        <div class="container">
            <div class="col-md-1 clearfix">
                {{--<div class="img-box pull-right">--}}
                    {{--<img src="img/request-qoute-1-1.jpg" alt="Awesome Image"/>--}}
                {{--</div><!-- /.img-box -->--}}
            </div><!-- /.col-md-6 -->
            <div class="col-md-9 ">
                <div class="contact-form-style-one-content">
                    <div class="sec-title">
                        <div class="line"></div><!-- /.line -->
                        <h2>Request a <span>Service?</span></h2>
                        <p>For the good and high quarity information security services include security assessment, penetration testing please contact us below</p>
                    </div><!-- /.sec-title -->
                    <form action="#" class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <i class="fa fa-user"></i>
                                <input type="text" placeholder="Name*" />
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-box">
                                <i class="fa fa-envelope"></i>
                                <input type="text" placeholder="Email*" />
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12">
                            <div class="form-box">
                                <i class="fa fa-pencil-square"></i>
                                <textarea placeholder="Your Words"></textarea>
                            </div><!-- /.form-box -->
                            <button class="thm-btn" type="submit">Submit</button>
                        </div><!-- /.col-md-12 -->
                    </form>
                </div><!-- /.contact-form-style-one-content -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.container -->
    </section><!-- /.contact-form-style-one -->

    {{--<div--}}
            {{--class="google-map"--}}
            {{--id="contact-google-map"--}}
            {{--data-map-lat="40.712784"--}}
            {{--data-map-lng="-74.005941"--}}
            {{--data-icon-path="img/map-marker.png"--}}
            {{--data-map-title="Brooklyn, New York, United Kingdom"--}}
            {{--data-map-zoom="11"--}}
            {{--data-markers='{--}}
            {{--"marker-1": [40.712784, -74.005941, "<h4>Main Office</h4><p>Babylon Branch , Lindenhurst, UK</p>"],--}}
            {{--"marker-2": [40.728157, -74.077642, "<h4>Branch Office</h4> <p>291 Park Ave S, East Meadow, UK</p>"]--}}
        {{--}'>--}}

    {{--</div>--}}

    <section class="social-branding">
        <div class="container">
            <ul class="social list-inline">
                <li><a href="#" class="fa fa-facebook"></a></li><!--
            --><li><a href="#" class="fa fa-twitter"></a></li><!--
            --><li><a href="#" class="fa fa-google-plus"></a></li><!--
            --><li><a href="#" class="fa fa-pinterest"></a></li><!--
            --><li><a href="#" class="fa fa-skype"></a></li>
            </ul><!-- /.social list-inline -->
        </div><!-- /.container -->
    </section><!-- /.social-branding -->
@endsection

@push('after-scripts')
{!! Html::script(url('vendor/select2/js/select2.min.js')) !!}
{!! Html::script(url('vendor/owl.carousel/owl.carousel.js')) !!}

<script>

</script>
@endpush


