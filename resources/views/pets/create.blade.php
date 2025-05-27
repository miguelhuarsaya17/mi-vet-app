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

    @if(count($users2)>0)
    <h1>Agregar Mascota</h1>
    <form action="{{ route('pets.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="number" step="0.01" class="form-control" id="weight" name="weight" value="{{ old('weight') }}">
        </div>
        <div class="mb-3">
            <label for="user_id" class="form-label">Cliente</label>
            <select name="user_id" id="" class="form-control">
                <option value="" disabled selected>Seleccione un cliente</option>
                @foreach ($users2 as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    @else
    <div class="alert alert-danger">
        <h2>No hay usuarios registrados</h2>
    </div>
    @endif
    <a href="{{ route('pets.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>
</div>
@endsection