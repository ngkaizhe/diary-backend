@extends('dashboardLayout')

@section('title', 'Create Diary')

@section('view_content')


    <div class="field">
        <label class="label">Date</label>
        <div class="control">
            <input type="date">
        </div>
    </div>

    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input class="input" type="text" placeholder="Diary Title">
        </div>
    </div>

    <div class="field">
        <label class="label">Content</label>
        <div class="control">
            <textarea class="textarea" placeholder="Diary Content"></textarea>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Create</button>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
    </div>
@endsection
