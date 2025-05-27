@extends('layouts.template_dashboard')

@section('content')
<div class="container">

    <h1>Ver Detalles del Pago</h1>
    <div class="carta">
        <div>
            <p><strong>ID:</strong>{{ $payment->id }}</p>
        </div>
        <div>
            <p><strong>Monto:</strong>{{ $payment->amount }}</p>
        </div>
        <div>
            <p><strong>Fecha:</strong>{{ $payment->payments_date }}</p>
        </div>
        <div>
            <p><strong>Metodo:</strong>{{ $payment->method }}</p>
        </div>
        <div>
            <p><strong>ID Factura:</strong>{{ $payment->invoice_id }}</p>
        </div>
    </div>
    <a href="{{ route('payments.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>

</div>
@endsection