@extends('layouts.template_dashboard')

@section('content')
<div class="container">

    <h1>Detalles de la Cita</h1>
    <div class="carta">
        <div>
            <p><strong>ID:</strong>{{ $quote->id }}</p>
        </div>
        <div>
            <p><strong>Fecha:</strong>{{ $quote->quote_date }}</p>
        </div>
        <div>
            <p><strong>Turno:</strong>{{ $quote->shift }}</p>
        </div>
        <div>
            <p><strong>Motivo:</strong>{{ $quote->reason }}</p>
        </div>
        <div>
            <p><strong>Estado:</strong>{{ $quote->state }}</p>
        </div>
        @if(Auth::user()->role == 'empleado')
        <div>
            <p><strong>Cliente:</strong>{{ $quote->user_id }}</p>
        </div>
        @endif
    </div>
    <a href="{{ route('quotes.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>

</div>
@endsection