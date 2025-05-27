@extends('layouts.template_dashboard')
@section('title', "Dashboard Empleado")
@section('content')

<div class="main-content">
    <div class="main-header">
        <h1>Gestión de Mascotas</h1>
        <p>Crea, visualiza, edita y elimina las mascotas de tus clientes.</p>
    </div>

    <section class="dashboard-content">

        <h2>Registrar Mascota</h2>
        <form>
            <div class="mb-3 mt-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombre" name="nombre">
            </div>
            <div class="mb-3 mt-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo" placeholder="Ingresar tipo" name="tipo">
            </div>
            <div class="mb-3 mt-3">
                <label for="peso" class="form-label">Peso (Kg)</label>
                <input type="number" class="form-control" id="peso" placeholder="Ingresar peso" name="peso">
            </div>
            <div class="mb-3 mt-3">
                <label for="especie" class="form-label">Usuario</label>
                <select id="cita" name="cita" class="form-control" required>
                    <option value="001">Juan</option>
                    <option value="002">Maria</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <button id="btn-empleado-registrar">Enviar</button>
            </div>
        </form>

        <h2>Lista de Mascotas</h2>
        <table>
            <thead id="table-top-empleado">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th class="d-none d-lg-table-cell">Peso (Kg)</th>
                    <th>Usuario</th>
                    <th class="d-none d-xl-table-cell"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td>Max</td>
                    <td>Perro</td>
                    <td class="d-none d-lg-table-cell">25.50</td>
                    <td>#001</td>
                    <td class="d-none d-xl-table-cell">
                        <button id="empleado-edit-eliminar">Ver</button>
                        <button id="empleado-edit-eliminar">Editar</button>
                        <button id="empleado-edit-eliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>#002</td>
                    <td>Luna</td>
                    <td>Gato</td>
                    <td class="d-none d-lg-table-cell">4.80</td>
                    <td>#002</td>
                    <td class="d-none d-xl-table-cell">
                        <button id="empleado-edit-eliminar">Ver</button>
                        <button id="empleado-edit-eliminar">Editar</button>
                        <button id="empleado-edit-eliminar">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>#003</td>
                    <td>Rex</td>
                    <td>Perro</td>
                    <td class="d-none d-lg-table-cell">30.00</td>
                    <td>#003</td>
                    <td class="d-none d-xl-table-cell">
                        <button id="empleado-edit-eliminar">Ver</button>
                        <button id="empleado-edit-eliminar">Editar</button>
                        <button id="empleado-edit-eliminar">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</div>

@endsection