@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion de tus consultas medicas")
@section('content')


<section class="dashboard-content">
    <table>
        <thead>
            <tr>
                <th class="d-none d-md-table-cell">ID</th>
                <th>Fecha</th>
                <th>Descripción</th>
                <th class="d-none d-lg-table-cell">ID Cita</th>
                <th>Veterinario</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="d-none d-md-table-cell">#001</td>
                <td>2024-11-20 10:30:00</td>
                <td>Revisión general</td>
                <td class="d-none d-lg-table-cell">#001</td>
                <td>Dr. López</td>
                <td><button>Ver</button></td>
            </tr>
        </tbody>
    </table>
</section>


@endsection