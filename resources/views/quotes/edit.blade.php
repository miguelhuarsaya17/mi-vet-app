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

    <h1>Editar Cita</h1>
    <form action="{{ route('quotes.update', $quote->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="quote_date">Fecha:</label>
            <input type="date" id="quote_date" name="quote_date" class="form-control" value="{{ $quote->quote_date }}" required>
        </div>
        <div class="form-group">
            <label for="shift">Turno:</label>
            <input type="text" id="shift" name="shift" class="form-control" value="{{ $quote->shift }}" required>
        </div>
        <div class="form-group">
            <label for="reason">Motivo:</label>
            <textarea id="reason" name="reason" class="form-control" required>{{ $quote->reason }}</textarea>
        </div>
        <div class="mb-3">
            <label for="user_id" class="form-label">Cliente</label>
            <select name="user_id" id="" class="form-control">
                @foreach ($users2 as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
    <a href="{{ route('quotes.index')}}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Volver</a>
</section>



@endsection
