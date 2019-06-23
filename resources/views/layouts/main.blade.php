<!doctype html>
<html lang="en">
@include('layouts.partials.admin._head')


<body>

<div class="container-fluid">
    <div class="row">
        @include('layouts.partials.admin._alerts')

        @include('layouts.partials.admin._sidebar')


        @yield('content')


    </div>
</div>
@include('layouts.partials.admin._script')

</body>
</html>
