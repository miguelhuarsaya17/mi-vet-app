@extends('layouts.template_dashboard')
@section('title', "Dashboard")
@section('text-header', "Informaciion sobre tus pagos")
@section('content')

<section class="dashboard-content">
   <table>
      <thead>
         <tr>
            <th class="d-none d-lg-table-cell">ID</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th class="d-none d-md-table-cell">Método de Pago</th>
            <th>Fecha</th>
            <th class="d-none d-lg-table-cell">Factura</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td class="d-none d-lg-table-cell">#001</td>
            <td>$12000.00</td>
            <td class="d-none d-md-table-cell">Tarjeta</td>
            <td>2024-11-10</td>
            <td class="d-none d-lg-table-cell">#001</td>
            <td><button>Ver</button></td>
         </tr>
      </tbody>
   </table>
</section>


@endsection