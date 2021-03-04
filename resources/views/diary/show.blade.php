@extends('layouts.admin')

@section('title', 'Show Diary')

@section('view_content')

    <h1 class="heading has-text-weight-bold is-size-4">Show Diary</h1>

    <div class="field">
        <label class="label">Date</label>
        <div class="control">
            <input
                type="date"
                name="diary_date"
                id="diary_date"
                value="{{date("Y-m-d", strtotime($diary->diary_date))}}"
                readonly
            >
        </div>
    </div>

    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input
                type="text"
                name="title"
                id="title"
                value="{{$diary->title}}"
                readonly
            >
        </div>
    </div>

    <div class="field">
        <label class="label">Content</label>
        <div class="control">
                <textarea class="textarea {{$errors->has('content') ? 'is-danger' : ''}}"
                          name="content"
                          id="content"
                          readonly
                >{{$diary->content}}</textarea>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link is-light" onclick="window.location='{{ url()->previous() }}'">Back</button>
        </div>
    </div>

@endsection
