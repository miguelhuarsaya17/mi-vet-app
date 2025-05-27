@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion sobre tus mascotas registradas")
@section('content')

<section class="dashboard-content">
   @if(session('success'))
   <div class="alert alert-success">
      {{ session('success') }}
   </div>
   @endif
   @php
   $user = Auth::user();
   @endphp
   @if($user->role === 'empleado')
   <div class="text-end">
      <a href="{{ route('pets.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i> Registrar Mascota</a>
   </div>
   @endif
   <table>
      @if(!$pets->isEmpty())
      <thead>
         <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Peso (Kg)</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         @foreach($pets as $pet)
         <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->type }}</td>
            <td>{{ $pet->weight }}</td>
            <td class="text-end">
               <a href="{{ route('pets.show', $pet->id) }}" class="btn btn-primary"><i class="bi bi-eye"></i>Ver</a>
               @if($user->role === 'empleado')
               <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
               <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" style="display:inline;">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn btn-danger" id="sin-color"><i class="bi bi-trash"></i> Eliminar</button>
               </form>
               @endif
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   @else
      @if($user->role === 'empleado')
      <div>
         <p>No hay mascotas registradas</p>
      </div>
      @else
      <div>
         <p>No tienes mascotas registradas</p>
      </div>
      @endif
   @endif
</section>


@endsection