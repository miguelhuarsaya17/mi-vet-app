@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion sobre tus facturas")
@section('content')


<section class="dashboard-content">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @php
    $user = Auth::user();
    @endphp
    @if($user->role === 'empleado')
    <div class="text-end">
        <a href="{{ route('invoices.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i> Registrar Factura</a>
    </div>
    @endif
    @if(!$invoices->isEmpty())
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Detalles</th>
                <th>Fecha</th>
                <th>Monto</th>
                <th>Estado</th>
                <th>ID Consulta</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $invoice)
            <tr>
                <td>{{ $invoice->id}}</td>
                <td>{{ $invoice->details}}</td>
                <td>{{ $invoice->invoices_date}}</td>
                <td>{{ $invoice->amount}}</td>
                <td>{{ $invoice->status}}</td>
                <td>{{ $invoice->querie_id}}</td>
                <td class="text-end">
                    <a href="{{ route('invoices.show', $invoice->id) }}" class="btn btn-primary"><i class="bi bi-eye"></i>Ver</a>
                    @if($user->role === 'empleado')
                    <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    @if($user->role === 'empleado')
    <div>
        <p>No hay facturas registradas</p>
    </div>
    @else
    <div>
        <p>No tienes facturas registradas</p>
    </div>
    @endif
    @endif
</section>


@endsection