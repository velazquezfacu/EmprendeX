@extends('layouts.app')

@section('title', 'Iniciar sesión | ProyectoUTN')

@push('page_bg')
<div style="position:fixed;inset:0;z-index:0;pointer-events:none;">
    <img src="{{ asset('images/banner-home.png') }}" alt="" style="width:100%;height:100%;object-fit:cover;object-position:center;">
    <div style="position:absolute;inset:0;background:rgba(0,0,0,0.55);"></div>
</div>
@endpush

@section('content')
<div class="max-w-md mx-auto animate-fade-in">
    <!-- Enlace Volver -->
    <a href="{{ route('register.select') }}" class="inline-flex items-center gap-2 text-sm mb-6 transition-colors font-medium hover:text-[#f5a623]" style="color:#ffffff;">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        <span>Volver al inicio</span>
    </a>

    <!-- Tarjeta del Formulario -->
    <div class="relative rounded-2xl p-8 shadow-2xl backdrop-blur-sm" style="background-color: #0a0a0a; border: 1px solid rgba(255, 255, 255, 0.08);">
        <!-- Barra de acento superior amarilla -->
        <div class="absolute inset-x-0 top-0 h-1 rounded-t-2xl" style="background-color: #f5a623;"></div>

        <div class="mb-8">
            <h1 class="text-2xl font-extrabold mt-2" style="color: #f5a623 !important; -webkit-text-fill-color: #f5a623 !important;">Iniciar sesión</h1>
            <p class="text-xs mt-1" style="color: rgba(255, 255, 255, 0.65);">
                Ingresá con tu cuenta. Te llevamos al panel según tu rol: cliente o emprendedor.
            </p>
        </div>

        <form action="{{ route('login.store') }}" method="POST" class="space-y-5" id="login-form">
            @csrf

            <!-- Campo Email -->
            <div class="space-y-1.5">
                <label for="email" class="block text-xs font-semibold uppercase tracking-wider" style="color: rgba(255, 255, 255, 0.7);">Correo electrónico</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@correo.com"
                       class="block w-full px-4 py-3 text-sm rounded-xl text-white outline-none transition-all"
                       style="background-color: rgba(255, 255, 255, 0.06); border: 1px solid rgba(255, 255, 255, 0.15);"
                       onfocus="this.style.borderColor='#f5a623'; this.style.boxShadow='0 0 0 2px rgba(245, 166, 35, 0.2)';"
                       onblur="this.style.borderColor='rgba(255, 255, 255, 0.15)'; this.style.boxShadow='none';">
                @error('email')
                    <p class="text-rose-500 text-xs mt-1 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo Contraseña -->
            <div class="space-y-1.5">
                <label for="password" class="block text-xs font-semibold uppercase tracking-wider" style="color: rgba(255, 255, 255, 0.7);">Contraseña</label>
                <input type="password" name="password" id="password" required autocomplete="current-password" placeholder="••••••••"
                       class="block w-full px-4 py-3 text-sm rounded-xl text-white outline-none transition-all"
                       style="background-color: rgba(255, 255, 255, 0.06); border: 1px solid rgba(255, 255, 255, 0.15);"
                       onfocus="this.style.borderColor='#f5a623'; this.style.boxShadow='0 0 0 2px rgba(245, 166, 35, 0.2)';"
                       onblur="this.style.borderColor='rgba(255, 255, 255, 0.15)'; this.style.boxShadow='none';">
                @error('password')
                    <p class="text-rose-500 text-xs mt-1 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botón Ingresar -->
           <button type="submit" id="btn-submit-login" class="w-full font-bold py-3 px-4 rounded-xl transition-all duration-300 transform active:scale-[0.98] shadow-lg"
        style="background-color: #f5a623 !important; color: #0a0a0a !important; background-image: none !important;">
    Ingresar
</button>
        </form>

        <!-- Footer del Formulario -->
        <div class="mt-8 pt-6 text-center text-xs" style="border-top: 1px solid rgba(255, 255, 255, 0.08); color: rgba(255, 255, 255, 0.65);">
            ¿No tenés cuenta?
            <a href="{{ route('register.hub') }}" class="font-semibold hover:underline ml-1" style="color: #f5a623;">Elegí cómo registrarte</a>
        </div>
    </div>
</div>
@endsection
