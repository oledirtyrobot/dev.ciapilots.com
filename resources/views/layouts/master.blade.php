<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Corporate Image Aviation</title>

    @yield('scripts')
</head>
<body ng-app="itineraryApp">
    @include('layouts.partials.nav')

    <div class="container">
        @include('flash::message')

        @yield('content')
    </div>

    @include('layouts.app-scripts')
</body>
</html>