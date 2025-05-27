@extends('layouts.template_dashboard')
@section('title', "Dashboard Empleado")
@section('content')

<div class="main-content">
    <div class="main-header">
        <h1>Gestión de Diagnósticos</h1>
        <p>Crea, visualiza y edita los diagnosticos.</p>
    </div>

    <section class="dashboard-content">
        <h2>Registrar diagnóstico</h2>
        <form>
            <div class="mb-3 mt-3">
                <label for="descripcion" class="form-label">Desripcion</label>
                <textarea id="descripcion" name="descripcion" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3 mt-3">
                <label for="tratamiento" class="form-label">Tratamiento</label>
                <input type="text" class="form-control" id="tratamiento" name="tratamiento" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="" class="form-label">Consulta</label>
                <select id="consulta" name="consulta" class="form-control" required>
                    <option value="001">#001</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <button id="btn-empleado-registrar">Enviar</button>
            </div>
        </form>


        <h2>Diagnósticos Realizados</h2>
        <table>
            <thead id="table-top-empleado">
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Tratamiento</th>
                    <th class="d-none d-lg-table-cell">Consulta</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Vacunacion anual completa</td>
                    <td>Refuerzo en 1 año</td>
                    <td class="d-none d-lg-table-cell">#001</td>
                    <td class="d-none d-sm-table-cell">
                        <button id="btn-accion-empleado">Ver</button>
                        <button id="btn-accion-empleado">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>001</td>
                    <td>Parasitismo interno leve</td>
                    <td>Repetir dosis en 3 meses</td>
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