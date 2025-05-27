@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informaciion sobre tus pagos")
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
        <a href="{{ route('payments.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i> Registrar Pago</a>
    </div>
    @endif

    @if(!$payments->isEmpty())
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Monto</th>
                <th>Método de Pago</th>
                <th>Factura</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->method }}</td>
                <td>{{ $payment->invoice_id }}</td>
                <td class="text-end">
               <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-primary"><i class="bi bi-eye"></i>Ver</a>
               @if($user->role === 'empleado')
               <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
               @endif
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
      @if($user->role === 'empleado')
      <div>
         <p>No hay pagos registradas</p>
      </div>
      @else
      <div>
         <p>No tienes pagos registradas</p>
      </div>
      @endif
   @endif
</section>


@endsection