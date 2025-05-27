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
    <h1>Editar Mascota</h1>
    <form action="{{ route('pets.update', $pet->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <p><strong>ID:</strong>{{ $pet->id }}</p>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pet->name }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $pet->type }}">
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="number" step="0.01" class="form-control" id="weight" name="weight" value="{{ $pet->weight }}">
        </div>
        <div class="mb-3">
            <label for="user_id" class="form-label">Cliente</label>
            <select name="user_id" id="" class="form-control">
                @foreach ($users2 as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('pets.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>
    </form>
</div>
@endsection
