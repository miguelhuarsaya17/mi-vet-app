@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion de tus consultas medicas")
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@php
$user = Auth::user();
@endphp
<h2>Registrar consulta</h2>
<form action="{{ route('queries.store')}}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="fecha" placeholder="Ingresar fecha" name="querie_date" value="{{ old('querie_date')}}">
    </div>
    <div class="mb-3 mt-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea id="descripcion" name="description" rows="4" class="form-control">{{ old('description')}} </textarea>
    </div>
    <div class="mb-3 mt-3">
        <label for="cita" class="form-label">Cita</label>
        <select id="cita" name="quote_id" class="form-control">
            <option value="" disabled selected>Selecciona una cita</option>
            @foreach($quotes as $quote)
            <option value="{{$quote->id}}">{{ $quote->id}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 mt-3">
        <label for="mascota" class="form-label">Mascota</label>
        <select id="mascota" name="pet_id" class="form-control">

            <option value="" disabled selected>Selecciona una mascota</option>
            @foreach($pets as $pet)
            <option value="{{$pet->id}}">{{$pet->id}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>
<a href="{{ route('queries.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>
@endsection