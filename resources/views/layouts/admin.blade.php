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
                        <li>
                            <div class="dropdown is-hoverable">
                                <div class="dropdown-trigger">
                                    <a aria-haspopup="true" aria-controls="dropdown-menu4">
                                        <span>{{ Auth::user()->name }}</span>
                                        <span class="icon is-small">
                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                    <div class="dropdown-content">
                                        <div class="dropdown-item">
                                            <!-- Authentication -->
                                            <form id="logout_form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                            <a href="javascript:void(0)" onclick="document.getElementById('logout_form').submit()">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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


