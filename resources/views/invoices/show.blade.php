@extends('layouts.template_dashboard')

@section('content')
<div class="container">

    <h1>Ver Detalles de la factura</h1>
    <div class="carta">
        <div>
            <p><strong>ID:</strong>{{ $invoice->id }}</p>
        </div>
        <div>
            <p><strong>Detalles:</strong>{{ $invoice->details }}</p>
        </div>
        <div>
            <p><strong>Fecha:</strong>{{ $invoice->invoices_date }}</p>
        </div>
        <div>
            <p><strong>Monto:</strong>{{ $invoice->amount }}</p>
        </div>
        <div>
            <p><strong>Estado:</strong>{{ $invoice->status }}</p>
        </div>
        <div>
            <p><strong>ID Consulta:</strong>{{ $invoice->querie_id }}</p>
        </div>
    </div>
    <a href="{{ route('invoices.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>

</div>
@endsection