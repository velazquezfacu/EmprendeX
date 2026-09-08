@extends('layouts.app')

@section('title', 'Crear cuenta | ProyectoUTN')

@push('page_bg')
<div style="position:fixed;inset:0;z-index:0;pointer-events:none;">
    <img src="{{ asset('images/banner-home.png') }}" alt="" style="width:100%;height:100%;object-fit:cover;object-position:center;">
    <div style="position:absolute;inset:0;background:rgba(0,0,0,0.55);"></div>
</div>
@endpush

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="text-center mb-10 auth-page-text max-w-xl mx-auto p-8 rounded-2xl shadow-2xl" 
        style="background-color: rgba(18, 18, 18, 0.65) !important; backdrop-filter: blur(12px) !important; -webkit-backdrop-filter: blur(12px) !important; border: 1px solid rgba(255, 255, 255, 0.12) !important;">        
    
    <!-- Enlace Volver -->
    <a href="{{ route('register.select') }}" class="inline-flex items-center gap-2 text-sm mb-6 transition-colors font-medium hover:underline" style="color: #ffffff !important;">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Volver al inicio
    </a>

    <!-- Título principal en amarillo -->
    <h1 class="text-2xl md:text-3xl font-extrabold" style="color: #f5a623 !important; -webkit-text-fill-color: #f5a623 !important;">
        ¿Cómo querés unirte?
    </h1>

    <!-- Subtítulo en amarillo con opacidad -->
    <p class="mt-2 text-sm md:text-base font-medium" style="color: #f5a623 !important; opacity: 0.85;">
        Elegí el tipo de cuenta que mejor se adapte a vos.
    </p>
</div>

    <div class="grid md:grid-cols-2 gap-6">
        {{-- Cliente --}}
      <!-- TARJETA CLIENTE (BLANCA) -->
<div class="auth-role-card" style="background-color: #ffffff !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; color: #0a0a0a !important; padding: 2rem; border-radius: 1rem; box-shadow: 0 10px 25px rgba(0,0,0,0.15);">
    
    <!-- Ícono -->
    <div class="auth-role-icon" style="background-color: #f4f4f5 !important; color: #0a0a0a !important; border: 1px solid #e4e4e7 !important; display: inline-flex; padding: 0.75rem; border-radius: 0.75rem;">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
    </div>

    <!-- Badge -->
    <span style="background-color: #f4f4f5 !important; color: #0a0a0a !important; border: 1px solid #e4e4e7 !important; font-weight: 700; font-size: 0.75rem; padding: 0.25rem 0.75rem; border-radius: 9999px; text-transform: uppercase; margin-left: 0.5rem;">
        Cliente
    </span>

    <!-- Título y Subtítulo -->
    <h2 class="text-xl font-bold mt-4" style="color: #0a0a0a !important;">Quiero comprar</h2>
    <p class="text-sm mt-2" style="color: #52525b !important;">Explorá emprendimientos locales, mirá catálogos y reservá turnos o productos.</p>

    <!-- Lista de beneficios -->
    <ul class="mt-5 space-y-2 text-sm" style="color: #27272a !important;">
        <li class="flex items-center gap-2"><span style="color: #0a0a0a !important; font-weight: 800;">✓</span> Cuenta gratuita</li>
        <li class="flex items-center gap-2"><span style="color: #0a0a0a !important; font-weight: 800;">✓</span> Compras online</li>
        <li class="flex items-center gap-2"><span style="color: #0a0a0a !important; font-weight: 800;">✓</span> Historial de pedidos</li>
    </ul>

    <!-- Botón de acción -->
    <a href="{{ route('register.client') }}" class="mt-8 block text-center font-bold py-3 px-4 rounded-xl transition-all duration-300 transform active:scale-[0.98] shadow-md"
       style="background-color: #0a0a0a !important; color: #ffffff !important; background-image: none !important; border: none !important;">
        Registrarme como cliente
    </a>

    <!-- Footer -->
    <p class="text-xs mt-4 text-center" style="color: #71717a !important;">
        ¿Ya tenés cuenta?
        <a href="{{ route('login') }}" class="font-semibold hover:underline ml-1" style="color: #0a0a0a !important;">Iniciá sesión</a>
    </p>
</div>

        {{-- Emprendedor --}}
        <!-- TARJETA EMPRENDEDOR (NEGRA) -->
<div class="auth-role-card" style="background-color: #0a0a0a !important; border: 1px solid rgba(255, 255, 255, 0.08) !important; color: #ffffff !important; padding: 2rem; border-radius: 1rem; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
    
    <!-- Ícono -->
    <div class="auth-role-icon" style="background-color: rgba(255, 255, 255, 0.06) !important; color: #f5a623 !important; border: 1px solid rgba(255, 255, 255, 0.15) !important; display: inline-flex; padding: 0.75rem; border-radius: 0.75rem;">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
        </svg>
    </div>

    <!-- Badge -->
    <span style="background-color: rgba(245, 166, 35, 0.15) !important; color: #f5a623 !important; border: 1px solid rgba(245, 166, 35, 0.3) !important; font-weight: 700; font-size: 0.75rem; padding: 0.25rem 0.75rem; border-radius: 9999px; text-transform: uppercase; margin-left: 0.5rem;">
        Emprendedor
    </span>

    <!-- Título y Subtítulo -->
    <h2 class="text-xl font-bold mt-4" style="color: #ffffff !important;">Tengo un negocio</h2>
    <p class="text-sm mt-2" style="color: rgba(255, 255, 255, 0.65) !important;">Publicá tu catálogo, gestioná horarios y recibí compras desde un panel.</p>

    <!-- Lista de beneficios -->
    <ul class="mt-5 space-y-2 text-sm" style="color: rgba(255, 255, 255, 0.85) !important;">
        <li class="flex items-center gap-2"><span style="color: #f5a623 !important; font-weight: 800;">✓</span> Perfil comercial</li>
        <li class="flex items-center gap-2"><span style="color: #f5a623 !important; font-weight: 800;">✓</span> Catálogo y compras</li>
        <li class="flex items-center gap-2"><span style="color: #f5a623 !important; font-weight: 800;">✓</span> Visible en el mapa</li>
    </ul>

    <!-- Botón de acción -->
    <a href="{{ route('register.seller') }}" class="mt-8 block text-center font-bold py-3 px-4 rounded-xl transition-all duration-300 transform active:scale-[0.98] shadow-md"
       style="background-color: #f5a623 !important; color: #0a0a0a !important; background-image: none !important; border: none !important;">
        Registrarme como emprendedor
    </a>

    <!-- Footer -->
    <p class="text-xs mt-4 text-center" style="color: rgba(255, 255, 255, 0.65) !important;">
        ¿Ya tenés cuenta?
        <a href="{{ route('login') }}" class="font-semibold hover:underline ml-1" style="color: #f5a623 !important;">Iniciá sesión</a>
    </p>
</div>
    <p class="text-center text-xs mt-8" style="color:rgba(255,255,255,0.7);">
        ¿Tenés dudas sobre registrar tu emprendimiento?
        <a href="{{ route('register.select') }}#contacto-emprendedores" class="hover:underline" style="color:#93c5fd;">Escribinos</a>
    </p>
</div>
@endsection
