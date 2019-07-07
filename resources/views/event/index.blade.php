

<!doctype html>
<html lang="en">

@include('layouts.partials.users._heading')
 @include('layouts.partials.users._navigate')<!-- Our Schedule Area Start -->




<body>

<!-- Preloader -->

<!-- /Preloader -->

<div><section class="banner-area organic-breadcrumb">
        <div class="container">
            <div>


                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>view Events</h1>
                        <nav class="d-flex align-items-center">
                            <a href="{{'home.index'}}">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="{{ route('event.index') }}">Events</a>
                        </nav>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <h2 align="center "> Event listing:-</h2>
    </section>



@foreach($tickets as $ticket)


                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/10.jpg" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->

                                                <div class="single-schedule-info">
                                                    <h6>{{$ticket->title}}</h6>
                                                    <p>by <span>{{$ticket->guest}}</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{$ticket->date}}</p>
                                                <p><i class="zmdi zmdi-map"></i> {{$ticket->venue}},Kenya</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <a href="/event/show/{{$ticket->id}}" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>

                                        </div>
                                        @endforeach

                                        <!-- Single Schedule Area -->



                                    <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            {{$tickets->links()}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>


</div>
<!-- Header Area Start -->
<!-- Our Schedule Area End -->



<!-- Footer Area Start -->
@include('layouts.partials.users._footer')

<!-- Footer Area End -->

<!-- **** All JS Files ***** -->

@include('layouts.partials.users._scripts')
</body>
</html>