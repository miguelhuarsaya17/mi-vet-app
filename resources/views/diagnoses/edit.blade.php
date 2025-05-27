@extends('layouts.template_dashboard')
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
<h2>Editar diagnóstico</h2>
<form action="{{ route('diagnoses.update', $diagnose->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <p><strong>ID:</strong>{{ $diagnose->id }}</p>
    </div>
    <div class="mb-3 mt-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" placeholder="Ingresar descripcion" name="description" value="{{ $diagnose->description }}">
    </div>
    <div class="mb-3 mt-3">
        <label for="tratamiento" class="form-label">Tratamiento</label>
        <input type="text" class="form-control" id="tratamiento" name="treatment" required value="{{ $diagnose->treatment }}">
    </div>
    <div class="mb-3 mt-3">
        <label for="consulta" class="form-label">Consulta</label>
        <select id="consulta" name="querie_id" class="form-control" required>
            <option value="" disabled selected>Seleccione una consulta</option>
            @foreach($queries as $querie)
            <option value="{{$querie->id}}">{{ $querie->id}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('diagnoses.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>
</form>
@endsection