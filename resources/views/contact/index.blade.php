@include('layouts.partials.users._heading')

@include('layouts.partials.users._navigate')

<!-- Contact Us Area Start -->
<section class="contact--us-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Contact Us Thumb -->
            <div class="col-12 col-lg-6">
                <div class="contact-us-thumb mb-100">
                    <img src="img/bg-img/44.jpg" alt="">
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-12 col-lg-6">
                <div class="contact_from_area mb-100 clearfix">
                    <!-- Contact Heading -->
                    <div class="contact-heading">
                        <h4>Contact us</h4>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae</p>
                    </div>
                    <div class="contact_form">
                        <form action="mail.php" method="post">
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="name" id="name-2" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Your Number">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Area End -->
<!-- Contact Info Area -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contact--info-area bg-boxshadow">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <!-- Contact Info Icon -->
                            <div class="contact--info-icon">
                                <img src="img/core-img/icon-5.png" alt="">
                            </div>
                            <h5>184 Main Collins Street</h5>
                        </div>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <!-- Contact Info Icon -->
                            <div class="contact--info-icon">
                                <img src="img/core-img/icon-6.png" alt="">
                            </div>
                            <h5>(226) 446 9371</h5>
                        </div>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <!-- Contact Info Icon -->
                            <div class="contact--info-icon">
                                <img src="img/core-img/icon-7.png" alt="">
                            </div>
                            <h5>confer@gmail.com</h5>
                        </div>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-contact--info text-center">
                            <!-- Contact Info Icon -->
                            <div class="contact--info-icon">
                                <img src="img/core-img/icon-8.png" alt="">
                            </div>
                            <h5>www.confer.com</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@include('layouts.partials.users._scripts')

<!-- start footer Area -->
@include('layouts.partials.users._footer')