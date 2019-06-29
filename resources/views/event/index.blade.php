

<!doctype html>
<html lang="en">
@include('layouts.partials.users._heading')
@include('layouts.partials.users._navigate')<!-- Our Schedule Area Start -->




<body>

<!-- Preloader -->

<!-- /Preloader -->

<div>
    <section class="our-schedule-area bg-white section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Monday <br> <span>January 14, 2019</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Tuesday <br> <span>January 15, 2019</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Wednesday <br> <span>January 16, 2019</span></a>
                            </li>
                        </ul>
                    </div>
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
                                            <a href="/event/show" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
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
