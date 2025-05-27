@extends('layouts.template_dashboard')

@section('content')
<div class="container">

    <h1>Ver Detalles del diagnositco</h1>
    <div class="carta">
        <div>
            <p><strong>ID:</strong>{{ $diagnose->id }}</p>
        </div>
        <div>
            <p><strong>Descripcion:</strong>{{ $diagnose->description }}</p>
        </div>
        <div>
            <p><strong>Tratamiento:</strong>{{ $diagnose->treatment }}</p>
        </div>
        <div>
            <p><strong>ID Consulta:</strong>{{ $diagnose->querie_id }}</p>
        </div>
    </div>
    <a href="{{ route('diagnoses.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>
</div>

</div>
@endsection