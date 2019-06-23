


<!doctype html>
<html lang="en">
@include('layouts.partials.users._heading')


<body>

<!-- Preloader -->

<!-- /Preloader -->


<!-- Header Area Start -->
@include('layouts.partials.users._navigate')
@include('layouts.partials.users._login')


<!-- Header Area End -->

<!-- Welcome Area Start -->
@include('layouts.partials.users._welcome')

<!-- Welcome Area End -->

<!-- About Us And Countdown Area Start -->
@include('layouts.partials.users._about')

<!-- About Us And Countdown Area End -->

<!-- Our Speakings Area Start -->
@include('layouts.partials.users._speaker')

<!-- Our Speakings Area End -->

<!-- Our Schedule Area Start -->
@include('layouts.partials.users._schedule')

<!-- Our Schedule Area End -->

<!-- Our Ticket Pricing Table Area Start -->
@include('layouts.partials.users._ticketing')


<!-- Our Ticket Pricing Table Area End -->

<!-- Our Sponsor And Client Area Start -->
@include('layouts.partials.users._sponsor')


<!-- Our Sponsor And Client Area End -->

<!-- Our Blog Area Start -->
<!-- Our Blog Area End -->

<!-- Contact Area Start -->
@include('layouts.partials.users._contact')
<!-- Contact Area End -->

<!-- Footer Area Start -->
@include('layouts.partials.users._footer')

<!-- Footer Area End -->

<!-- **** All JS Files ***** -->

@include('layouts.partials.users._scripts')

</body>

</html>