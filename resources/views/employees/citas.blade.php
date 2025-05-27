@extends('layouts.template_dashboard')
@section('title', "Dashboard Empleado")
@section('content')

<div class="main-content">
    <div class="main-header">
        <h1>Gestión de Citas</h1>
        <p>Visualiza y edita tus citas asignadas. Y ademas visualizar el historial de citas</p>
    </div>

    <section class="dashboard-content">
        <h2>Citas Asignadas</h2>
        <table>
            <thead id="table-top-empleado">
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th class="d-none d-lg-table-cell">Usuario</th>
                    <th class="d-none d-sm-table-cell"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td>2024-12-01 10:00:00</td>
                    <td>Vacunacion</td>
                    <td>Pendiente</td>
                    <td class="d-none d-lg-table-cell">#001</td>
                    <td class="d-none d-sm-table-cell">
                        <button id="btn-accion-empleado">Ver</button>
                        <button id="btn-accion-empleado">Editar</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <h2>Historial de citas</h2>
        <table>
            <thead id="table-top-empleado">
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Motivo</th>
                    <th>Estado</th>
                    <th class="d-none d-lg-table-cell">Usuario</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#002</td>
                    <td>2024-12-02 14:30:00</td>
                    <td>Desparasitacion</td>
                    <td>Confirmada</td>
                    <td class="d-none d-lg-table-cell">#002</td>
                    <td><button id="btn-accion-empleado">Ver</button></td>
                </tr>
                <tr>
                    <td>#003</td>
                    <td>2024-12-03 09:00:00</td>
                    <td>Control</td>
                    <td>Cancelada</td>
                    <td class="d-none d-lg-table-cell">#004</td>
                    <td><button id="btn-accion-empleado">Ver</button></td>
                </tr>
            </tbody>
        </table>
    </section>
</div>

@endsection