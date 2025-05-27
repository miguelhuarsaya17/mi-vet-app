@extends('layouts.template')

@section('title', "Login")
@section('content')
<section id="login" class="col-md-8 col-lg-4">
    <h2>Login</h2>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3 mt-3">
            <x-input-label for="email" class="form-label" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')"   autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-3 mt-3">
            <x-input-label for="password" :value="__('Password')" class="form-label"/>

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                              autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mb-3 mt-3">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <x-primary-button class="btn btn-primary">
            {{ __('Log in') }}
        </x-primary-button>
        <div class="mb-3 mt-3">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                <a href="{{ route('register') }}">Register Here</a>
            @endif

        </div>

    </form>    
</section>

@endsection