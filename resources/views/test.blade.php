<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href={{ asset('sass/app.css')}} rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<section class="section">
    <div class="container">
        <div class="box">
            <div class="tabs is-boxed">
                <ul>
                    <li class="is-active">
                        <a href="{{route('dashboard.index', ['is_user'=>true])}}">
                            <span class="icon is-small is-black"><i class="fas fa-users" aria-hidden="true"></i></span>
                            <span>Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('dashboard.index', ['is_user'=>false])}}">
                            <span class="icon is-small is-black"><i class="fas fa-book" aria-hidden="true"></i></span>
                            <span>Diaries</span>
                        </a>
                    </li>
                </ul>
            </div>

            @if($is_user)
                <table class="table">
                <thead>
                <tr>
                    @foreach($columns as $column)
                        <th>{{$column}}</th>
                    @endforeach
                </tr>
                </thead>
                <tfoot>
                <tr>
                    @foreach($columns as $column)
                        <th>{{$column}}</th>
                    @endforeach
                </tr>
                </tfoot>
                <tbody>
                    @foreach($users as $user)
                        <th>{{$user[$columns[0]]}}</th>
                        <td>{{$user[$columns[1]]}}</td>
                        <td>{{$user[$columns[2]]}}</td>
                        <td>{{$user[$columns[3]]}}</td>
                        <td>{{$user[$columns[4]]}}</td>
                    @endforeach
                </tbody>


            </table>

            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th><abbr title="Position">Pos</abbr></th>
                        <th>Team</th>
                        <th><abbr title="Played">Pld</abbr></th>
                        <th><abbr title="Won">W</abbr></th>
                        <th><abbr title="Drawn">D</abbr></th>
                        <th><abbr title="Lost">L</abbr></th>
                        <th><abbr title="Goals for">GF</abbr></th>
                        <th><abbr title="Goals against">GA</abbr></th>
                        <th><abbr title="Goal difference">GD</abbr></th>
                        <th><abbr title="Points">Pts</abbr></th>
                        <th>Qualification or relegation</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th><abbr title="Position">Pos</abbr></th>
                        <th>Team</th>
                        <th><abbr title="Played">Pld</abbr></th>
                        <th><abbr title="Won">W</abbr></th>
                        <th><abbr title="Drawn">D</abbr></th>
                        <th><abbr title="Lost">L</abbr></th>
                        <th><abbr title="Goals for">GF</abbr></th>
                        <th><abbr title="Goals against">GA</abbr></th>
                        <th><abbr title="Goal difference">GD</abbr></th>
                        <th><abbr title="Points">Pts</abbr></th>
                        <th>Qualification or relegation</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <th>1</th>
                        <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Leicester City</a> <strong>(C)</strong>
                        </td>
                        <td>38</td>
                        <td>23</td>
                        <td>12</td>
                        <td>3</td>
                        <td>68</td>
                        <td>36</td>
                        <td>+32</td>
                        <td>81</td>
                        <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td><a href="https://en.wikipedia.org/wiki/Arsenal_F.C." title="Arsenal F.C.">Arsenal</a></td>
                        <td>38</td>
                        <td>20</td>
                        <td>11</td>
                        <td>7</td>
                        <td>65</td>
                        <td>36</td>
                        <td>+29</td>
                        <td>71</td>
                        <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td><a href="https://en.wikipedia.org/wiki/Tottenham_Hotspur_F.C." title="Tottenham Hotspur F.C.">Tottenham Hotspur</a></td>
                        <td>38</td>
                        <td>19</td>
                        <td>13</td>
                        <td>6</td>
                        <td>69</td>
                        <td>35</td>
                        <td>+34</td>
                        <td>70</td>
                        <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                    </tr>
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</section>
</body>
</html>
