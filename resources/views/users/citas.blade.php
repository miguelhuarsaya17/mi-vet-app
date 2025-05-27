@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion sobre el horario y tus citas reservadas")
@section('content')

<section class="dashboard-content">
    <h2>Horario de Atencion</h2>
    <div class="filters" id="btn-accion-cliente">
        <button>Mañana</button>
        <button>Tarde</button>
        <button>Noche</button>
    </div>
    <div class="row" id="lista-citas">
        <div class="carta">
            <h5>08:00 AM</h5>
            <p>Estado: Disponible</p>
            <button class="boton-dashboard"><a href="user_citas_reservar.html">Reservar</a></button>
        </div>
        <div class="carta">
            <h5>10:00 AM</h5>
            <p>Estado: No Disponible</p>
            <button id="cita-no-disponible">Reservar</button>
        </div>
        <div class="carta">
            <h5>12:00 PM</h5>
            <p>Estado: Disponible</p>
            <button><a href="user_citas_reservar.html">Reservar</a></button>
        </div>
        <div class="carta">
            <h5>14:00 PM</h5>
            <p>Estado: Disponible</p>
            <button><a href="user_citas_reservar.html">Reservar</a></button>
        </div>
        <div class="carta">
            <h5>16:00 PM</h5>
            <p>Estado: Disponible</p>
            <button><a href="user_citas_reservar.html">Reservar</a></button>
        </div>
        <div class="carta">
            <h5>18:00 PM</h5>
            <p>Estado: Disponible</p>
            <button><a href="user_citas_reservar.html">Reservar</a></button>
        </div>
        <div class="carta">
            <h5>20:00 PM</h5>
            <p>Estado: Disponible</p>
            <button><a href="user_citas_reservar.html">Reservar</a></button>
        </div>
    </div>

    <h2>Citas programadas para hoy</h2>
    <table>
        <thead>
            <tr>
                <th class="d-none d-lg-table-cell">Codigo</th>
                <th>Fecha</th>
                <th>Motivo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="d-none d-lg-table-cell">#001</td>
                <td>2024-12-01 / 10:00 AM</td>
                <td>Vacunación</td>
                <td><button>Ver</button></td>
            </tr>
        </tbody>
    </table>
</section>


@endsection