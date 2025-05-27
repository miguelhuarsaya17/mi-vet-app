@extends('layouts.template_dashboard')

@section('content')
<div class="container">

    <h1>Ver Mascota</h1>
    <div class="carta">
        <div>
            <p><strong>ID:</strong>{{ $pet->id }}</p>
        </div>
        <div>
            <p><strong>Nombre:</strong>{{ $pet->name }}</p>
        </div>
        <div>
            <p><strong>Tipo:</strong>{{ $pet->type }}</p>
        </div>
        <div>
            <p><strong>Peso:</strong>{{ $pet->weight }}</p>
        </div>
        <div>
            <p><strong>Cliente:</strong>{{ $pet->user_id }}</p>
        </div>
    </div>
    <a href="{{ route('pets.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>

</div>
@endsection