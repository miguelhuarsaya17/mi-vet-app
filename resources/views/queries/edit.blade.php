@extends('layouts.template_dashboard')

@section('content')
<div class="container">
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
    <h1>Editar Consulta</h1>
    <form action="{{ route('queries.update', $querie->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <p><strong>ID:</strong>{{ $querie->id }}</p>
        </div>
        <div class="mb-3 mt-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" placeholder="Ingresar fecha" name="querie_date" value="{{ $querie->querie_date}}">
        </div>
        <div class="mb-3 mt-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="description" rows="4" class="form-control">{{ $querie->description}} </textarea>
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
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('queries.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>
    </form>
</div>
@endsection