@extends('layouts.guest')

@section('title', 'Login')

@section('view_content')

    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">
                <h1 class="title">Login</h1>

                <form method="POST" action="{{ route('login') }}">
                @csrf

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

                    <!-- Remember Me -->
                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input
                                    type="checkbox"
                                    name="remember_me"
                                    id="remember_me"
                                >
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <!-- Register Button -->
                    <div class="field is-grouped">
                        @if(Route::has('password.request'))
                            <div class="control">
                                <a class="is-link" href="{{ route('password.request') }}">Forgot your password?</a>
                            </div>
                        @endif

                        <div class="control">
                            <button class="button is-link is-light" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
