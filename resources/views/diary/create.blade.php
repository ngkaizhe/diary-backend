@extends('layouts.admin')

@section('title', 'Create Diary')

@section('view_content')

    <h1 class="heading has-text-weight-bold is-size-4">New Diary</h1>

    <form method="POST" action="{{route('diaries.store')}}">
        @csrf

        <div class="field">
            <label class="label">Date</label>
            <div class="control">
                <input
                    class="{{$errors->has('diary_date') ? 'is-danger' : ''}} "
                    type="date"
                    name="diary_date"
                    id="diary_date"
                    value="{{old('diary_date')}}"
                >

                @error('diary_date')
                <p class="help is-danger">{{ $errors->first('diary_date') }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input
                    class="input {{$errors->has('title') ? 'is-danger' : ''}}"
                    type="text"
                    name="title"
                    id="title"
                    value="{{old('title')}}"
                >

                @error('title')
                <p class="help is-danger">{{ $errors->first('title') }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label class="label">Content</label>
            <div class="control">
                <textarea class="textarea {{$errors->has('content') ? 'is-danger' : ''}}"
                          name="content"
                          id="content"
                          placeholder="Diary Content"
                >{{old('content')}}</textarea>

                @error('content')
                <p class="help is-danger">{{ $errors->first('content') }}</p>
                @enderror
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Create</button>
            </div>
            <div class="control">
                <button class="button is-link is-light"  onclick="window.location='{{ url()->previous() }}'">Cancel</button>
            </div>
        </div>
    </form>
@endsection
