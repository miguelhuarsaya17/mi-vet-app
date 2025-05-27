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
<h2>Registrar Factura</h2>
<form action="{{ route('invoices.store') }}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
        <label for="details" class="form-label">Detalles</label>
        <input type="text" class="form-control" id="details" placeholder="Ingresar detalles" name="details" value="{{ old('details') }}">
    </div>
    <div class="mb-3 mt-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="fecha" placeholder="Ingresar fecha" name="invoices_date" value="{{ old('invoices_date') }}">
    </div>
    <div class="mb-3 mt-3">
        <label for="monto" class="form-label">Monto</label>
        <input type="monto" class="form-control" id="monto" placeholder="Ingresar monto" name="amount" value="{{ old('amount') }}">
    </div>
    <input type="text" hidden value="pendiente" name="status">
    <div class="mb-3 mt-3">
        <label for="querie" class="form-label">ID Consulta</label>
        <select id="querie" name="querie_id" class="form-control">
            <option value="" disabled selected>Seleccione una consulta</option>
            @foreach($queries as $querie)
            <option value="{{$querie->id}}">{{ $querie->id}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('invoices.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left">Volver</i></a>
</form>
</div>

@endsection