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
    <nav class="tile is-ancestor">
        <div class="tile is-1 is-parent">
            <div class="tile is-child">
                <aside class="menu">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a href="{{route('users.index')}}">Dashboard</a></li>
                        <li><a href="{{route('diaries.create')}}">Create Diary</a></li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="tile is-11 is-parent">
            <div class="tile is-child box">
                @yield('view_content')
            </div>
        </div>
    </nav>
</section>
</body>
</html>


