@extends('layouts.template_dashboard')
@section('title', "Dashboard Empleado")
@section('content')

<div class="main-content">
    <div class="main-header">
        <h1>Gestion de Consultas</h1>
        <p>Crea, visualiza y edita tus consultas</p>
    </div>

    <section class="dashboard-content">
        <h2>Registrar consulta</h2>
        <form>
            <div class="mb-3 mt-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" placeholder="Ingresar fecha" name="fecha">
            </div>
            <div class="mb-3 mt-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4" class="form-control" required></textarea>
            </div>
            <div class="mb-3 mt-3">
                <label for="cita" class="form-label">Cita</label>
                <select id="cita" name="cita" class="form-control" required>
                    <option value="001">#001</option>
                    <option value="002">#002</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label for="mascota" class="form-label">Mascota</label>
                <select id="mascota" name="mascota" class="form-control" required>
                    <option value="001">#001</option>
                    <option value="002">#002</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <button id="btn-empleado-registrar">Enviar</button>
            </div>
        </form>

        <h2>Historial de consultas</h2>
        <table>
            <thead id="table-top-empleado">
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Cita</th>
                    <th>Mascota</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#001</td>
                    <td>2024-12-01 10:30:00</td>
                    <td>Revision general</td>
                    <td>#001</td>
                    <td>#001</td>
                    <td class="d-none d-sm-table-cell">
                        <button id="btn-accion-empleado">Ver</button>
                        <button id="btn-accion-empleado">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>#002</td>
                    <td>2024-12-02 15:00:00</td>
                    <td>Administracion de antiparasitos</td>
                    <td>#002</td>
                    <td>#002</td>
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