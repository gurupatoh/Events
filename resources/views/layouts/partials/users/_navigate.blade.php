<header class="header-area">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="conferNav">

                <!-- Logo -->
                <a class="nav-brand" href="./index.html"><img src="./img/core-img/logo.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">

                            <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                            <li><a href="{{route('event.index')}}">Events</a></li>

                            <li><a href="speakers.html">Speakers</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="speakers.html">About us</a></li>

                        </ul>

                        <!-- Get Tickets Button -->
                        <a href="{{route('cart.index')}}" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
