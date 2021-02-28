@extends('layouts.master')

@section('content')
<div class="container mx-auto">
    <div class="">

        <p class="font-bold uppercase text-xl text-center mb-10">Register</p>

        <div class="border-4 w-1/6 mx-auto p-2 bg-blue-300">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="font-bold">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="border-2 rounded-md" name="name" value="{{ old('name') }}"
                            required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="font-bold">{{ __('E-Mail Address')
                        }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="border-2 rounded-md" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="font-bold">{{ __('Password')
                        }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="border-2 rounded-md" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password-confirm" class="font-bold">{{ __('Confirm
                        Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="border-2 rounded-md"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="flex mb-0">
                    <button type="submit" class="mx-auto border-2 rounded bg-blue-400 hover:bg-blue-500 p-2">
                        {{ __('Register') }}
                    </button>
                    <button type="submit" class="mx-auto border-2 rounded bg-blue-400 hover:bg-blue-500 p-2"
                        onclick="location.href='{{ route('login') }}'">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection