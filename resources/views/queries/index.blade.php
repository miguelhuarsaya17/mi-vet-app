@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion de tus consultas medicas")
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
        <a href="{{ route('queries.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i> Registrar Consulta</a>
    </div>
    @endif
    @if(!$queries->isEmpty())
    <table>
        <thead>
            <tr>
                <th class="d-none d-md-table-cell">ID</th>
                <th>Fecha</th>
                <th>Descripción</th>
                <th class="d-none d-lg-table-cell">#Cita</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($queries as $query)
            <tr>
                <td class="d-none d-md-table-cell">{{ $query->id }}</td>
                <td>{{ $query->querie_date}}</td>
                <td>{{ $query->description}}</td>
                <td class="d-none d-lg-table-cell"> {{ $query->quote_id}}</td>
                <td>
                    <a href="{{ route('queries.show', $query->id) }}" class="btn btn-primary"><i class="bi bi-eye"></i>Ver</a>
                    @if($user->role === 'empleado')
                    <a href="{{ route('queries.edit', $query->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        @if($user->role === 'empleado')
        <div>
            <p>No hay consultas registradas</p>
        </div>
        @else
        <div>
            <p>No tienes consultas registradas</p>
        </div>
        @endif
    @endif
</section>


@endsection