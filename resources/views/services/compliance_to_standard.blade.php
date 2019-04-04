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
                <h3>Compliance To Standard</h3>
                <br />
                <p>If you own or manage a business, you have likely heard the term “information security compliance” before. Each organization has specific information security compliance duties that cannot be neglected. While complying to standards makes a comfortable ground for an organisation to operate as well as gaining reputation from its clients, it also serves as important package for a good relationship with a government, local and international partners/stakeholders and those who champions compliance to standards such as Information Security Auditors and International Certification bodies. Standards keep changing from time to time depending on business situation and technological advancement</p>
                <br />
                <p>The failure to adhere to information security standards is quite risky. It can result in a range of costly penalties from civil fines to prosecution in criminal court. We therefore exist to ensure your compliance to information standard is up to the maximum relief level.</p>
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
                            <h3>ISO 27001</h3>
                            <p> ISO27001:2013 is the only auditable international standard which defines the requirements for an Information Security Management System (ISMS).</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-CD"></i>
                            <h3>ISO 22301</h3>
                            <p>ISO22301 is the international standard defining the requirements for the development of Business Continuity Management System (BCMS).</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-Users"></i>
                            <h3>PCI DSS</h3>
                            <p> PCI DSS is often considered a prescriptive standard because of its list of mandatory controls which an organization has to implement.</p>
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


