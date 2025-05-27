@extends('layouts.template')

@section('title', "Inicio")
@section('content')
<section class="intro" id="intro">
    <div class="row ancho">
        <div class="separacion-equitativa">
            <h1>Bienvenidos a Amigos son los Amigos</h1>
            <p>Tu lugar de confianza para el cuidado de tus mascotas.</p>
            <div class="cta">
                <p>Accede a funcionalidades exclusivas para clientes registrados. Lleva el control de tus citas,
                    historial médico, facturas y mucho más.</p>
                <a href="{{ route('login') }}" class="cta-btn">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="cta-btn">Registrate</a>
            </div>
        </div>
        <figcaption class="d-none d-xl-block">
            <img src="{{ asset('storage/ac_banner_inicio.png') }}" alt="Mascota cuidada en Veterinaria AnimalCare">
        </figcaption>
    </div>
</section>

<section id="services" class="services">
    <h2>Servicios</h2>
    <div class="service-list ancho">
        <div class="service-item">
            <figcaption>
                <img src="{{ asset('storage/service_consulta.png') }}" alt="Consulta General">
            </figcaption>
            <h3>Consulta General</h3>
            <p>Brindamos consultas generales para mantener la salud de tu mascota en óptimas condiciones.</p>
        </div>
        <div class="service-item">
            <figcaption>
                <img src="{{ asset('storage/service_cirugia.png') }}" alt="Cirugía">
            </figcaption>
            <h3>Cirugía</h3>
            <p>Realizamos procedimientos quirúrgicos con la más alta calidad y cuidado.</p>
        </div>
        <div class="service-item">
            <figcaption>
                <img src="{{ asset('storage/service_vacunas.png') }}" alt="Vacunas">
            </figcaption>
            <h3>Vacunas</h3>
            <p>Aplicación de vacunas necesarias para prevenir enfermedades en tus mascotas.</p>
        </div>
        <div class="service-item">
            <figcaption>
                <img src="{{ asset('storage/service_desparasitacion.png') }}" alt="Desparasitación">
            </figcaption>
            <h3>Desparasitación</h3>
            <p>Eliminamos parásitos internos y externos de tu mascota.</p>
        </div>
        <div class="service-item">
            <figcaption>
                <img src="{{ asset('storage/service_baño.png') }}" alt="Baño y Peluquería">
            </figcaption>
            <h3>Baño y Peluquería</h3>
            <p>Mantenemos la higiene y apariencia de tu mascota con nuestros servicios.</p>
        </div>
        <div class="service-item">
            <figcaption>
                <img src="{{ asset('storage/service_esterilizacion.png') }}" alt="esterilizaciones">
            </figcaption>
            <h3>Esterilización</h3>
            <p>Realizamos esterilizaciones para cuidar la salud de tu mascota y controlar la reproducción.</p>
        </div>


    </div>
</section>

<section id="about" class="about">
    <h2>Conoce a Nuestro Equipo de Veterinarios</h2>
    <div class="vet-list">
        <div class="vet-item">
            <figcaption class="figcaption-about">
                <img src="{{ asset('storage/doctor1.png') }}" alt="Veterinario 1" class="img-perfil-vet">
            </figcaption>
            <div class="vet-item-cuerpo">
                <h5>Dr. Juan Pérez</h5>
                <p>Especialista en medicina interna y enfermedades respiratorias.</p>
            </div>
        </div>
        <div class="vet-item">
            <figcaption class="figcaption-about">
                <img src="{{ asset('storage/doctor2.png') }}" alt="Veterinario 2" class="img-perfil-vet">
            </figcaption>
            <div class="vet-item-cuerpo">
                <h5>Dra. Ana Gómez</h5>
                <p>Especialista en cirugía y atención quirúrgica avanzada.</p>
            </div>
        </div>
        <div class="vet-item">
            <figcaption class="figcaption-about">
                <img src="{{ asset('storage/doctor3.png') }}" alt="Veterinario 3" class="img-perfil-vet">
            </figcaption>
            <div class="vet-item-cuerpo">
                <h5>Dr. Carlos Rodríguez</h5>
                <p>Especialista en dermatología animal y alergias.</p>
            </div>
        </div>
        <div class="vet-item">
            <figcaption class="figcaption-about">
                <img src="{{ asset('storage/doctor4.png') }}" alt="Veterinario 3" class="img-perfil-vet">
            </figcaption>
            <div class="vet-item-cuerpo">
                <h5>Dr. Carlos Rodríguez</h5>
                <p>Especialista en dermatología animal y alergias.</p>
            </div>
        </div>
        <div class="vet-item">
            <figcaption class="figcaption-about">
                <img src="{{ asset('storage/doctor5.png') }}" alt="Veterinario 3" class="img-perfil-vet">
            </figcaption>
            <div class="vet-item-cuerpo">
                <h5>Dr. Carlos Rodríguez</h5>
                <p>Especialista en dermatología animal y alergias.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <div class="ancho">
        <div class="contact-info">
            <h2>Informacion de Contacto</h2>
            <div class="contact-info-cuerpo">
                <div class="contact-item">
                    <p><strong>Dirección:</strong></p>
                    <p>Calle Ejemplo 123, Ciudad, País</p>
                </div>
                <div class="contact-item">
                    <p><strong>Horario de Atención:</strong></p>
                    <p>Lunes a Viernes, 9:00 AM - 6:00 PM</p>
                </div>
                <div class="contact-item">
                    <p><strong>Redes Sociales:</strong></p>
                    <ul class="social-media">
                        <li><a href="https://facebook.com/veterinariaanimalcare" target="_blank"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://instagram.com/veterinariaanimalcare" target="_blank"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://wa.me/1234567890" target="_blank"><i class="bi bi-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact-formulario">
            <h2>Envie su consulta</h2>
            <form>
                <div class="campo-form">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="campo-form">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="campo-form">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="button" class="boton" data-bs-toggle="modal" data-bs-target="#myModal">Enviar</button>
            </form>
        </div>
    </div>
</section>
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">¡Consulta Enviada con Éxito!</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                Gracias por contactarnos. Hemos recibido tu consulta y nos pondremos en contacto contigo lo antes posible.
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>
@endsection