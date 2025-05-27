@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion sobre el horario y tus citas reservadas")
@section('content')

<section class="dashboard-content">
    <div class="text-end">
        <a href="{{ route('quotes.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i> Registrar Cita</a>
    </div>
    @php
    $user = Auth::user();
    @endphp
    @if(!$quotes->isEmpty())
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Motivo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
            $user = Auth::user();
            @endphp
            @foreach ($quotes as $quote)
            <tr>
                <td class="d-none d-lg-table-cell">{{ $quote->id }}</td>
                <td>{{ $quote->quote_date }}</td>
                <td>{{ $quote->reason }}</td>
                <td class="text-end">
                    <a href="{{ route('quotes.show', $quote->id) }}" class="btn btn-primary"><i class="bi bi-eye"></i>Ver</a>
                    @if($user->role === 'empleado')
                    <a href="{{ route('quotes.edit', $quote->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    @if($user->role === 'empleado')
    <div>
        <p>No hay citas asignadas</p>
    </div>
    @else
    <div>
        <p>Reserva una cita para poder ver los detalles</p>
    </div>
    @endif
    @endif
</section>


@endsection