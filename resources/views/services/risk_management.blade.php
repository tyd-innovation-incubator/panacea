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
                <h3>Risk Management</h3>
                <br />
                <p>Governance, risk management, and compliance or GRC is the umbrella term covering an organization's approach across these three areas: Governance, Risk Management, and Compliance. They are three related facets that help assure an organization meets its objectives.  While <strong>Governance</strong> is the combination of processes established and executed by the directors (or the board of directors) that are reflected in the organization's structure and how it is managed and led toward achieving goals, <strong>Risk Management</strong> is predicting and managing risks that could hinder the organization to achieve its objectives and <strong>Compliance</strong> refers to adhering with the company's policies, procedures, laws and regulations.</p>
                <br />
                <p>Well-developed information security governance processes result in information security management programs that are scalable with the business, repeatable across the organization, measurable, sustainable, defensible, continually improving, and cost-effective on an ongoing basis.</p>
                <br />
                {{--<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>--}}
                {{--<br />--}}
                {{--<h3>Service Advantage</h3>--}}
                {{--<br />--}}
                {{--<p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>--}}
                <br />
                <br />
                <div class="row service-features">
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-Mastercard"></i>
                            <h3>CLOUD SECURITY</h3>
                            <p>Migrating your data, applications or infrastructure to the cloud can create efficiencies, agility, opportunities and cost savings.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-CD"></i>
                            <h3>DATA MAPPING</h3>
                            <p>identify, classify and discover the data in your organisation, providing pragmatic consultancy as they assess your data risk.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-Users"></i>
                            <h3>INFORMATION ASSURANCE CONSULTANCE</h3>
                            <p>Help in protect critical systems and information.by defining security strategies,policies,security architecture, security awareness,training and undertaking risk assessments.</p>
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


