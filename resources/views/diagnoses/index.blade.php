@extends('layouts.template_dashboard')
@section('title', "Dashboard Empleado")
@section('content')

<section class="dashboard-content">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="text-end">
        <a href="{{ route('diagnoses.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i> Registrar Diagnostico</a>
    </div>


    <h2>Diagnósticos Realizados</h2>
    <table>
        <thead id="table-top-empleado">
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Tratamiento</th>
                <th>ID Consulta</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diagnoses as $diagnose)
            <tr>
                <td>{{ $diagnose->id }}</td>
                <td>{{ $diagnose->description }}</td>
                <td>{{ $diagnose->treatment }}</td>
                <td>{{ $diagnose->querie_id }}</td>
                <td class="text-end">
                    <a href="{{ route('diagnoses.show', $diagnose->id) }}" class="btn btn-primary"><i class="bi bi-eye"></i>Ver</a>
                    <a href="{{ route('diagnoses.edit', $diagnose->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- @if(!$diagnoses->isEmpty()) -->
    <!-- @else

    <p>No hay diagnosticos registradas</p>

    @endif -->
</section>


@endsection