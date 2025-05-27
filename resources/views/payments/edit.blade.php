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
<h2>Editar Pago</h2>
<form action="{{ route('payments.update', $payment->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <p><strong>ID:</strong>{{ $payment->id }}</p>
    </div>
    <div class="mb-3 mt-3">
        <label for="monto" class="form-label">Monto</label>
        <input type="number" class="form-control" id="monto" placeholder="Ingresar monto" name="amount" value="{{ $payment->amount }}">
    </div>
    <div class="mb-3 mt-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="fecha" placeholder="Ingresar fecha" name="payments_date" value="{{ $payment->payments_date }}">
    </div>
    <div class="mb-3 mt-3">
        <label for="metodo" class="form-label">Metodo</label>
        <input type="metodo" class="form-control" id="metodo" placeholder="Ingresar metodo pago" name="method" value="{{ $payment->method }}">
    </div>
    <div class="mb-3 mt-3">
        <label for="factura" class="form-label">Factura</label>
        <select id="factura" name="invoice_id" class="form-control" required>
            <option value="" disabled selected>Seleccione una factura</option>
            @foreach($invoices as $invoice)
            <option value="{{ $invoice->id }}">{{ $invoice->id }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('payments.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>

</form>
</div>
@endsection