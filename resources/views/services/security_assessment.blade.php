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
                <h3>Security Assessment</h3>
                <br />
                <p>There are laws that are embedded with Information Security. These laws are enforced by regulatory bodies such as TCRA in Tanzania, ENISA in EU, and also used by Judiciary to make ruling of offenders, so as to protect the business customers as well as to protect business from malicious users of information. For instance: In Tanzania,<strong>Cybercrime and Electronic Transactions Acts
                    </strong>  were enacted in September, 2015. Furthermore other laws are to come such as <strong>Data Protection Act (DPA). HIPAA (Health Insurance Portability and Accountability Act of 1996)</strong> is for United States. All such laws require individuals and organisations to comply with as long as their daily operation involve transactions of information.</p>
                <br />
                <p><strong>Regulatory compliance</strong>
                     is an organization's adherence to laws, regulations, guidelines and specifications relevant to its business. Violations of <strong>regulatory compliance regulations</strong> often result in legal punishment, including federal fines. Organisations face an ever increasing list of statutory, regulatory, contractual and legal compliance obligations.</p>
                <br />
                <p>Who knows what the next era of technology might require of regulatory compliance? Give us that work as we have already been digging for you. It is your time to use us to embrace the best quality out the better.</p>
                <br />
                {{--<h3>Service Advantage</h3>--}}
                {{--<br />--}}
                {{--<p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>--}}
                <br />
                <br />
                <div class="row service-features">
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-Mastercard"></i>
                            <h3>PENETRATION TESTING</h3>
                            <p>examine the current state of your infrastructure to assess the resilience of your security controls and to identify all the ways that an attacker might gain unauthorised access.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-CD"></i>
                            <h3>SECURITY CODING REVIEW</h3>
                            <p>Retrospectively identifying and remediating vulnerabilities in applications can be a time-consuming and costly exercise.</p>
                        </div><!-- /.single-service-features -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="single-service-features">
                            <i class="icon icon-Users"></i>
                            <h3>SPECTRUM ATTACK SIMULATION</h3>
                            <p>Intelligence-led engagement that mimics the current threats your organisation faces, designed specifically to address your specific concerns and requirements.</p>
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


