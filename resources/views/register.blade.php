@extends('layouts.template')

@section('title', "Register")
@section('content')
<section id="login" class="col-md-8 col-lg-4">
    <h2>Registrate</h2>
    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <div class="mb-3 mt-3">
            <x-input-label for="name" :value="__('Name')" class="form-label" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')"    autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mb-3 mt-3">
            <x-input-label for="last_name" :value="__('Last Name')" class="form-label" />
            <x-text-input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')"    autofocus autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
        <div class="mb-3 mt-3">
            <x-input-label for="phone" :value="__('Phone')" class="form-label" />
            <x-text-input id="phone" class="form-control" type="text" name="phone" :value="old('phone')"    autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <div class="mb-3 mt-3">
            <x-input-label for="email" :value="__('Email')" class="form-label"/>
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')"    autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mb-3 mt-3">
            <x-input-label for="password" :value="__('Password')" class="form-label"/>

            <x-text-input id="password" class="form-control"
                type="password"
                name="password"
                   autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="mb-3 mt-3">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label"/>

            <x-text-input id="password_confirmation" class="form-control"
                type="password"
                name="password_confirmation"    autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <button class="btn btn-primary"">Enviar</button>
        <div>
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}" className="text-decoration-none">Inicia Sesión</a>
            </p>
        </div>
    </form>
</section>

@endsection