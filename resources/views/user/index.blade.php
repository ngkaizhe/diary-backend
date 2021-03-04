@extends('layouts.admin')

@section('title', 'Users')

@section('view_content')
    <div class="tabs is-boxed">
        <ul>
            <li class="is-active">
                <a href="{{route('users.index')}}">
                    <span class="icon is-small is-black"><i class="fas fa-users" aria-hidden="true"></i></span>
                    <span>Users</span>
                </a>
            </li>

            <li>
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
                    @if(Request::has('sort_by'))
                        <a  class= "{{ Request::get('sort_by') == $loop->index ? 'has-text-dark' : ''}}"

                            href = "{{ URL::route('users.index',
                                    [
                                        'sort_by' => $loop->index,
                                        'is_ascen' => Request::get('sort_by') == $loop->index && Request::get('is_ascen') ? false : true,
                                    ]) }}" >{{$column}}

                            <span class="icon">
                                        <i class="fas {{ Request::get('sort_by') == $loop->index && Request::get('is_ascen') ? 'fa-angle-down' : 'fa-angle-up'}}"></i>
                                    </span>
                        </a>
                    @else
                        <a  class= "{{ $loop->first ? 'has-text-dark' : ''}}"
                            href = "{{ URL::route('users.index',
                                    [
                                    'sort_by' => $loop->index,
                                    'is_ascen' => true,
                                    ]) }}" >{{$column}}

                            <span class="icon">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                        </a>
                    @endif

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
        @foreach($users as $user)
            <tr>
                @foreach($columns as $column)
                    <th class="{{
                            (Request::has('sort_by') ?
                            ($loop->index == Request::get('sort_by') ? 'has-background-link-light' : '')
                            :
                            ($loop->first ? 'has-background-link-light' : ''))
                        }}">{{$user[$column]}}
                    </th>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
