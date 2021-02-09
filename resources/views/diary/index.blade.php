@extends('dashboardLayout')

@section('title', 'Users')

@section('view_content')
    <div class="box">
        <div class="tabs is-boxed">
            <ul>
                <li>
                    <a href="{{route('user.index')}}">
                        <span class="icon is-small is-black"><i class="fas fa-users" aria-hidden="true"></i></span>
                        <span>Users</span>
                    </a>
                </li>

                <li class="is-active">
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
            @foreach($diaries as $diary)
                <tr>
                    {{-- diary id --}}
                    <th>{{$diary->id}}</th>
                    {{-- diary belongs to user's id --}}
                    <th>{{$diary->user->id}}</th>
                    {{-- diary belongs to user's name --}}
                    <th>{{$diary->user->name}}</th>
                    {{-- diary's title --}}
                    <th>{{str_limit($diary->title, $limit = 10, $end = '...')}}</th>
                    {{-- diary's content --}}
                    <th>{{str_limit($diary->content, $limit = 20, $end = '...')}}</th>
                    {{-- diary's date --}}
                    <th>{{date('Y/m/d', strtotime($diary->diary_date))}}</th>
                    {{-- diary's created at --}}
                    <th>{{date('Y/m/d', strtotime($diary->created_at))}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
