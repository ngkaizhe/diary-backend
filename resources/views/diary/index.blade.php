@extends('dashboardLayout')

@section('title', 'Diaries')

@section('view_content')
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

    <table class="table is-hoverable is-fullwidth is-striped is-bordered has-text-centered">
        <thead>
        <tr class="has-background-primary">
            @foreach($columns as $column)
                <th>
                    @if(Request::has('sort_by'))
                        <a  class= "{{ Request::get('sort_by') == $loop->index ? 'has-text-dark' : ''}}"

                            href = "{{ URL::route('diaries.index',
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
                            href = "{{ URL::route('diaries.index',
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

            {{-- delete button and edit button --}}
            <th>Control Buttons</th>
        </tr>
        </thead>
        <tfoot>
        <tr class="has-background-primary">
            @foreach($columns as $column)
                <th>{{$column}}</th>
            @endforeach

            {{-- delete button and edit button --}}
            <th>Control Buttons</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($diaries as $diary)
            <tr>
                @foreach($columns as $column)
                    <th class="{{
                            (Request::has('sort_by') ?
                            ($loop->index == Request::get('sort_by') ? 'has-background-link-light' : '')
                            :
                            ($loop->first ? 'has-background-link-light' : ''))
                        }}">{{$diary[$column]}}
                    </th>
                @endforeach

                    <th>
                        <button class="button is-success">Show</button>
                        <button class="button is-link">Edit</button>
                        <button class="button is-success is-light">Delete</button>
                    </th>
            </tr>


        @endforeach
        </tbody>
    </table>
@endsection
