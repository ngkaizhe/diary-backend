<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href={{ asset('sass/app.css')}} rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/bulma-calendar.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script src="{{ asset("js/bulma-calendar.min.js") }}"></script>
</head>

<body>
<section class="section">
    @yield('view_content')
</section>
</body>
</html>


