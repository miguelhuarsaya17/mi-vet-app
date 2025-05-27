@extends('layouts.template_dashboard')
@section('title', "Dashboard Empleado")
@section('content')

<div class="main-content">
    <div class="main-header">
        <h1>Gestión de Pagos</h1>
        <p>Crea, visualiza y edita los pagos de tus clientes</p>
    </div>

    <section class="dashboard-content">
        <h2>Registrar Pago</h2>
        <form>
            <div class="mb-3 mt-3">
                <label for="monto" class="form-label">Monto</label>
                <input type="number" class="form-control" id="monto" placeholder="Ingresar monto" name="monto">
            </div>
            <div class="mb-3 mt-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" placeholder="Ingresar fecha" name="fecha">
            </div>
            <div class="mb-3 mt-3">
                <label for="metodo" class="form-label">Metodo</label>
                <select id="metodo" name="metodo" class="form-control" required>
                    <option value="001">Efectivo</option>
                    <option value="002">Transferencia</option>
                    <option value="003">Tarjeta</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label for="factura" class="form-label">Factura</label>
                <select id="factura" name="factura" class="form-control" required>
                    <option value="001">#001</option>
                    <option value="002">#002</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <button id="btn-empleado-registrar">Enviar</button>
            </div>
        </form>

        <h2>Lista de Pagos</h2>
        <table>
            <thead id="table-top-empleado">
                <tr>
                    <th>ID</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Metodo</th>
                    <th class="d-none d-lg-table-cell">Factura</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td>$12000.00</td>
                    <td>2024-12-01 11:30:00</td>
                    <td>Tarjeta</td>
                    <td class="d-none d-lg-table-cell">#001</td>
                    <td>
                        <button id="btn-empleado-registrar">Ver</button>
                        <button id="btn-empleado-registrar">Editar</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </section>
</div>

@endsection