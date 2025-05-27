@extends('layouts.template_dashboard')
@section('title', "Dashboard Empleado")
@section('content')

<div class="main-content">
    <div class="main-header">
        <h1>Gestión de facturas</h1>
        <p>Crear, visualizar y editar facturas</p>
    </div>

    <section class="dashboard-content">
        <h2>Registrar Factura</h2>
        <form>
            <div class="mb-3 mt-3">
                <label for="detalles" class="form-label">Detalles</label>
                <input type="text" class="form-control" id="detalles" placeholder="Ingresar detalles" name="detalles">
            </div>
            <div class="mb-3 mt-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" placeholder="Ingresar fecha" name="fecha">
            </div>
            <div class="mb-3 mt-3">
                <label for="monto" class="form-label">Monto</label>
                <input type="number" class="form-control" id="monto" placeholder="Ingresar monto" name="monto">
            </div>
            <div class="mb-3 mt-3">
                <label for="consulta" class="form-label">Consulta</label>
                <select id="consulta" name="consulta" class="form-control" required>
                    <option value="001">#001</option>
                    <option value="002">#002</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <button id="btn-empleado-registrar">Enviar</button>
            </div>
        </form>

        <h2>Lista de Facturas</h2>
        <table>
            <thead id="table-top-empleado">
                <tr>
                    <th>ID</th>
                    <th class="d-none d-lg-table-cell">Detalles</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                    <th>Estado</th>
                    <th class="d-none d-lg-table-cell">Consulta</th>
                    <th class="d-none d-lg-table-cell"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td class="d-none d-lg-table-cell">Vacunacion y consulta</td>
                    <td>2024-12-01 11:00:00</td>
                    <td>$12000.00</td>
                    <td>Pagada</td>
                    <td class="d-none d-lg-table-cell">#001</td>
                    <td class="d-none d-sm-table-cell">
                        <button id="btn-accion-empleado">Ver</button>
                        <button id="btn-accion-empleado">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>#002</td>
                    <td class="d-none d-lg-table-cell">Desparasitacion</td>
                    <td>2024-12-02 15:30:00</td>
                    <td>$8000.00</td>
                    <td>Pendiente</td>
                    <td class="d-none d-lg-table-cell">#002</td>
                    <td class="d-none d-sm-table-cell">
                        <button id="btn-accion-empleado">Ver</button>
                        <button id="btn-accion-empleado">Editar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</div>

@endsection