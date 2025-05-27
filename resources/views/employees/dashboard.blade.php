@extends('layouts.template_dashboard')
@section('title', "Dashboard Empleado")
@section('content')


    <section class="dashboard-content" id="dashboard-content">
        <div class="carta carta-e-d">
            <div>
                <p>Citas</p>
                <i class="bi bi-calendar2"></i>
            </div>
            <h2>20</h2>
            <p><span>+24%</span> desde la semana pasada</p>
        </div>
        <div class="carta carta-e-d">
            <div>
                <p>Consultas</p>
                <i class="bi bi-search"></i>
            </div>
            <h3>42</h3>
            <p><span>2</span> nuevos registros</p>
        </div>
        <div class="carta carta-e-d">
            <div>
                <p>Diagnosticos</p>
                <i class="bi bi-file-medical"></i>
            </div>
            <h3>12</h3>
            <p><span>24</span> nuevos desde la ultima vez</p>
        </div>
    </section>


@endsection