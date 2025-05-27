@extends('layouts.template_dashboard')

@section('content')
<div class="container">

    <h1>Ver detalles de la consulta</h1>
    <div class="carta">
        <div>
            <p><strong>ID:</strong>{{ $querie->id }}</p>
        </div>
        <div>
            <p><strong>Fecha:</strong>{{ $querie->querie_date }}</p>
        </div>
        <div>
            <p><strong>Descripcion:</strong>{{ $querie->description }}</p>
        </div>
        <div>
            <p><strong>#Cita:</strong>{{ $querie->quote_id }}</p>
        </div>
        <div>
            <p><strong>#Mascota</strong>{{ $querie->pet_id }}</p>
        </div>
    </div>
    <a href="{{ route('queries.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>

</div>
@endsection