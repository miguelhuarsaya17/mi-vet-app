<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="body-dashboard">
    <header class="header">
        @php
        $user = Auth::user();
        @endphp
        <nav class="sidebar" id="{{ $user->role === 'empleado' ? 'siderbar-empleado' : 'siderbar-usuario' }}">

            <div class="sidebar-header">
                <!-- <h2><a href="{{ route('profile.edit') }}" class="user-link-sidebar">{{ $user->name }}</a></h2> -->
                <h2><a href="{{ route('profile.edit') }}" class="user-link-sidebar"><i class="bi bi-person"></i></a></h2>
            </div>
            <ul class="sidebar-menu">

                @if($user->role === 'empleado')
                <li><a href="{{ route('employee_dashboard') }}" class="active user-link-sidebar">Inicio</a></li>
                <li><a href="{{ route('pets.employee.index') }}" class="user-link-sidebar">Mascotas</a></li>
                <li><a href="{{ route('quotes.index') }}" class="user-link-sidebar">Citas</a></li>
                <li><a href="{{ route('queries.index') }}" class="user-link-sidebar">Consultas</a></li>
                <li><a href="{{ route('invoices.index') }}" class="user-link-sidebar">Facturas</a></li>
                <li><a href="{{ route('payments.index') }}" class="user-link-sidebar">Pagos</a></li>
                <li><a href="{{ route('diagnoses.index') }}" class="user-link-sidebar">Diagnosticos</a></li>
                @else
                <li><a href="{{ route('dashboard') }}" class="active user-link-sidebar">Inicio</a></li>
                <li><a href="{{ route('pets.index') }}" class="user-link-sidebar">Mis Mascotas</a></li>
                <li><a href="{{ route('quotes.index') }}" class="user-link-sidebar">Citas</a></li>
                <li><a href="{{ route('queries.index') }}" class="user-link-sidebar">Consultas</a></li>
                <li><a href="{{ route('invoices.index') }}" class="user-link-sidebar">Facturas</a></li>
                <li><a href="{{ route('payments.index') }}" class="user-link-sidebar">Pagos</a></li>
                @endif
            </ul>
            <div class="sidebar-footer">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Cerrar sesión</button>
                </form>
            </div>
        </nav>
    </header>
    <main class="main">
        <div class="main-content">
            <div class="main-header">
                <h1>Bienvenido, {{ $user->name }}</h1>
                <p>@yield('text-header')</p>
            </div>
            @yield('content')

        </div>
    </main>

</body>

</html>