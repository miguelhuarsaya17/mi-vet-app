@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informacion sobre tus mascotas registradas")
@section('content')

<section class="dashboard-content">
   <table>
      <thead>
         <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Peso (Kg)</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>Max</td>
            <td>Perro</td>
            <td>25.5</td>
            <td><button>Ver</button></td>
         </tr>
      </tbody>
   </table>
</section>


@endsection