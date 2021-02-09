@extends('dashboardLayout')

@section('title', 'Users')

@section('view_content')
    <div class="box">
        <div class="tabs is-boxed">
            <ul>
                <li class="is-active">
                    <a href="{{route('user.index')}}">
                        <span class="icon is-small is-black"><i class="fas fa-users" aria-hidden="true"></i></span>
                        <span>Users</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('diary.index')}}">
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
                <tr>
                    {{-- user's id --}}
                    <th>{{$user->id}}</th>
                    {{-- user's name --}}
                    <td>{{$user->name}}</td>
                    {{-- user's email --}}
                    <td>{{$user->email}}</td>
                    {{-- user's email verified date --}}
                    <td>{{date('Y/m/d', strtotime($user->email_verified_at))}}</td>
                    {{-- user's created at --}}
                    <td>{{date('Y/m/d', strtotime($user->created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
