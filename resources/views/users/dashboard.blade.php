@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Resumen general de tus actividades")
@section('content')


<section class="dashboard-content" id="dashboard-content">
    <div class="carta">
        <p>Próxima Cita en:</p>
        <h3>3 horas</h3>
    </div>

    <div class="carta">
        <p>Cantidad de Mascotas:</p>
        <h3>1</h3>
        <a href="{{ route('pets.index') }}">Ver todas</a>
    </div>
</section>

@endsection