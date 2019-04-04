@extends('layouts.main', ['title' => __("label.home"), 'header' => __("label.home")])



@section('content')
    <section class="inner-banner" style="background-color: #00A8FF">
        <div class="container">
            <div class="title pull-left">
                <h2>Event Calender</h2>
            </div><!-- /.title pull-left -->
        </div><!-- /.contianer -->
    </section><!-- /.inner-banner -->
    <br>
 <div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-primary event-primary">
                <div class="panel-heading"><h2><a href="#">Event Name</a></h2></div>
                <div class="panel-body nopadding">
                    <img src="https://placehold.it/400x150" alt="event image" class="img-responsive"/>
                    <div class="row nopadding">
                        <div class="col-sm-6 nopadding">
                            <time class="start pink">
                              start at
                            </time>
                        </div>
                        <div class="col-sm-6 nopadding">
                            <time class="end purple">
                             end at
                            </time>
                        </div>
                    </div>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Short description of event would go here.
                    </p>
                    <a href="{!! route('event.show') !!}" class="btn btn-success">Read more...</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-primary event-primary">
                <div class="panel-heading"><h2><a href="#">Event Name</a></h2></div>
                <div class="panel-body nopadding">
                    <img src="https://placehold.it/400x150" alt="event image" class="img-responsive"/>
                    <div class="row nopadding">
                        <div class="col-sm-6 nopadding">
                            <time class="start pink">
                                start at
                            </time>
                        </div>
                        <div class="col-sm-6 nopadding">
                            <time class="end purple">
                                end at
                            </time>
                        </div>
                    </div>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Short description of event would go here.
                    </p>
                    <a href="{!! route('event.show') !!}" class="btn btn-success">Read more...</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-primary event-primary">
                <div class="panel-heading"><h2><a href="#">Event Name</a></h2></div>
                <div class="panel-body nopadding">
                    <img src="https://placehold.it/400x150" alt="event image" class="img-responsive"/>
                    <div class="row nopadding">
                        <div class="col-sm-6 nopadding">
                            <time class="start pink">
                                start at
                            </time>
                        </div>
                        <div class="col-sm-6 nopadding">
                            <time class="end purple">
                                end at
                            </time>
                        </div>
                    </div>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Short description of event would go here.
                    </p>
                    <a href="{!! route('event.show') !!}" class="btn btn-success">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="panel panel-primary event-primary">
                <div class="panel-heading"><h2><a href="#">Event Name</a></h2></div>
                <div class="panel-body nopadding">
                    <img src="https://placehold.it/400x150" alt="event image" class="img-responsive"/>
                    <div class="row nopadding">
                        <div class="col-sm-6 nopadding">
                            <time class="start pink">
                                start at
                            </time>
                        </div>
                        <div class="col-sm-6 nopadding">
                            <time class="end purple">
                                end at
                            </time>
                        </div>
                    </div>
                </div>
                <div class="panel-footer panel-primary">
                    <p>Short description of event would go here.
                    </p>
                    <a href="{!! route('event.show') !!}" class="btn btn-success">Read more...</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-scripts')
{!! Html::script(url('vendor/select2/js/select2.min.js')) !!}
{!! Html::script(url('vendor/owl.carousel/owl.carousel.js')) !!}

<script>

</script>
@endpush


