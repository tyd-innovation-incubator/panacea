@extends('layouts.main', ['title' => __("label.home"), 'header' => __("label.home")])



@section('content')

    <section class="gallery-details-page sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="img-box row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <img src="img/service-1-1.jpg" alt="Awesome Image"/>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <img src="img/service-1-1.jpg" alt="Awesome Image"/>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.img-box -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-5 col-md-12">
                    <div class="gallery-content">
                        <h3>Day/Night Camera.</h3>
                        <br />
                        <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                        <br />
                        <h4>Project details</h4>
                        <br />
                        <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise</p>
                        <br />
                        <br />
                        <div class="project-details-box">
                            <div class="single-project-details clearfix">
                                <div class="title"><i class="fa fa-caret-right"></i> Service Type</div><!-- /.title -->
                                <div class="name">Personal security</div><!-- /.name -->
                            </div><!-- /.single-project-details -->
                            <div class="single-project-details clearfix">
                                <div class="title"><i class="fa fa-caret-right"></i> Client</div><!-- /.title -->
                                <div class="name">John Herrison</div><!-- /.name -->
                            </div><!-- /.single-project-details -->
                            <div class="single-project-details clearfix">
                                <div class="title"><i class="fa fa-caret-right"></i> America</div><!-- /.title -->
                                <div class="name">Newyork</div><!-- /.name -->
                            </div><!-- /.single-project-details -->
                            <div class="single-project-details clearfix">
                                <div class="title"><i class="fa fa-caret-right"></i> Started</div><!-- /.title -->
                                <div class="name">25 Agu 2017</div><!-- /.name -->
                            </div><!-- /.single-project-details -->
                            <div class="single-project-details clearfix">
                                <div class="title"><i class="fa fa-caret-right"></i> End</div><!-- /.title -->
                                <div class="name">16 Feb 2018</div><!-- /.name -->
                            </div><!-- /.single-project-details -->
                        </div><!-- /.project-details-box -->
                        <br />
                        <br />
                        <h4>Short Descrption</h4>
                        <br />
                        <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                    </div><!-- /.gallery-content -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section><!-- /.gallery-details-page sec-pad -->
@endsection

@push('after-scripts')
{!! Html::script(url('vendor/select2/js/select2.min.js')) !!}
{!! Html::script(url('vendor/owl.carousel/owl.carousel.js')) !!}

<script>

</script>
@endpush


