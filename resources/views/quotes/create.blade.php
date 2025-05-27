@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion sobre el horario y tus citas reservadas")
@section('content')
<section class="dashboard-content">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>Reservar Cita</h1>
    <form action="{{route('quotes.store')}}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="quote_date" value="{{ old('quote_date') }}">
        </div>
        <div class="mb-3 mt-3">
            <label for="shift" class="form-label">Turno</label>
            <input type="text" class="form-control" id="shift" name="shift" value="{{ old('shift') }}">
        </div>
        <div class="mb-3 mt-3">
            <label for="motivo" class="form-label">Motivo</label>
            <input type="text" class="form-control" id="motivo" name="reason" value="{{ old('reason') }}">

        </div>
        @if(Auth::user()->role == 'empleado')
        <div class="mb-3">
            <label for="user_id" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}">
        </div>
        @else
        <input type="text" hidden class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
        @endif
        <button type="submit" class="btn btn-primary">Reservar</button>

    </form>
    <a href="{{ route('quotes.index')}}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Volver</a>
</section>



@endsection