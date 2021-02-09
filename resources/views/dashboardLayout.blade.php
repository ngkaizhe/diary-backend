<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href={{ asset('sass/app.css')}} rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<section class="section">
    <div class="container">
        @yield('view_content')
    </div>
</section>
</body>
</html>


