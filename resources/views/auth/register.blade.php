@extends('layouts.guest')

@section('title', 'Register')

@section('view_content')

    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">
                <h1 class="title">Register</h1>

                <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input
                                class="input {{$errors->has('name') ? 'is-danger' : ''}} "
                                type="text"
                                name="name"
                                id="name"
                                required
                                autofocus
                                value="{{old('name')}}"
                            >

                            @error('name')
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Email Address-->
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input
                                class="input {{$errors->has('email') ? 'is-danger' : ''}}"
                                type="email"
                                name="email"
                                id="email"
                                value="{{old('email')}}"
                                required
                            >

                            @error('email')
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input
                                class="input {{$errors->has('password') ? 'is-danger' : ''}}"
                                type="password"
                                name="password"
                                id="password"
                                required
                                autocomplete="new-password"
                            >

                            @error('password')
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="field">
                        <label class="label">Confirm Password</label>
                        <div class="control">
                            <input
                                class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}"
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                required
                            >

                            @error('password_confirmation')
                            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Register Button -->
                    <div class="field is-grouped">
                        <div class="control">
                            <a class="py-4 is-link" href="{{ route('login') }}">Already registered?</a>
                        </div>
                        <div class="control">
                            <button class="button is-link is-light" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

