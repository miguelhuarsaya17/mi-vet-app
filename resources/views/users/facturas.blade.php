@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion sobre tus facturas")
@section('content')


<section class="dashboard-content">
    <table>
        <thead>
            <tr>
                <th class="d-none d-lg-table-cell">Codigo</th>
                <th>Detalles</th>
                <th>Fecha</th>
                <th>Monto</th>
                <th>Estado</th>
                <th class="d-none d-lg-table-cell">Cita</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="d-none d-lg-table-cell">#001</td>
                <td>Vanucacion y consulta</td>
                <td>2024-11-15 11:00:00</td>
                <td>$12000.00</td>
                <td>Pagada</td>
                <td class="d-none d-lg-table-cell">#001</td>
                <td><button>Ver</button></td>
            </tr>
        </tbody>
    </table>
</section>


@endsection