@extends('layouts.master')

@section('content')
<div class="container mx-auto">
    <div class="">
        <p class="font-bold uppercase text-xl text-center mb-10">Login</p>

        <div class="border-4 w-1/5 mx-auto p-2 bg-blue-300">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="font-bold">E-Mail Address</label>

                    <div class="">
                        <input id="email" type="email" class="border-2 rounded-md" name="email" required
                            autocomplete="email" autofocus>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="font-bold">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="border-2 rounded-md" name="password" required
                            autocomplete="current-password">
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-red-500" role="alert">
                        <strong>{{ $errors->first() }}</strong>
                    </span>
                </div>

                <div class="mb-4">
                    <div class="col-md-6 offset-md-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                            ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="flex items-center">
                        <button type="submit" class="border-2 rounded mr-4 bg-blue-400 hover:bg-blue-500 p-2">
                            {{ __('Login') }}
                        </button>

                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection