@extends('dashboardLayout')

@section('title', 'Diaries')

@section('view_content')
    <div class="box">
        <div class="tabs is-boxed">
            <ul>
                <li>
                    <a href="{{route('users.index')}}">
                        <span class="icon is-small is-black"><i class="fas fa-users" aria-hidden="true"></i></span>
                        <span>Users</span>
                    </a>
                </li>

                <li class="is-active">
                    <a href="{{route('diaries.index')}}">
                        <span class="icon is-small is-black"><i class="fas fa-book" aria-hidden="true"></i></span>
                        <span>Diaries</span>
                    </a>
                </li>
            </ul>
        </div>

        <table class="table is-hoverable is-fullwidth is-striped">
            <thead>
                <tr class="has-background-primary">
                    @foreach($columns as $column)
                        <th>
                            <a href="{{ URL::route('diaries.index',
                                [
                                'sort_by' => $loop->index,
                                'is_ascen' => Request::get('sort_by') == $loop->index && Request::get('is_ascen') ? false : true,
                                ]) }}">{{$column}}

                                <span class="icon {{ Request::get('sort_by') == $loop->index ? 'has-text-dark' : ''}}">
                                    <i class="fas {{ Request::get('sort_by') == $loop->index && Request::get('is_ascen') ? 'fa-angle-down' : 'fa-angle-up'}}"></i>
                                </span>
                            </a>

                        </th>
                    @endforeach
                </tr>
            </thead>
            <tfoot>
                <tr class="has-background-primary">
                    @foreach($columns as $column)
                        <th>{{$column}}</th>
                    @endforeach
                </tr>
            </tfoot>
            <tbody>
            @foreach($diaries as $diary)
                <tr>
                    @foreach($columns as $column)
                        <th>{{$diary[$column]}}</th>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
