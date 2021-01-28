<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link href={{ asset('sass/app.css')}} rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<section class="section">
    <div class="container">
        <div class="box">
            <div class="tabs is-boxed">
                <ul>
                    <li class="is-active">
                        <a>
                            <span class="icon is-small is-black"><i class="fas fa-users" aria-hidden="true"></i></span>
                            <span>Users</span>
                        </a>
                    </li>

                    <li>
                        <a>
                            <span class="icon is-small is-black"><i class="fas fa-book" aria-hidden="true"></i></span>
                            <span>Diaries</span>
                        </a>
                    </li>
                </ul>
            </div>

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
        </div>
    </div>
</section>
</body>
</html>
