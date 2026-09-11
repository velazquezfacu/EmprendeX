@extends('layouts.app')

@section('title', 'Nuevo Ingrediente')

@section('main_align', 'items-start')
@section('content_width', 'max-w-6xl mx-auto')

@section('content')
<div class="page-banner" style="margin-bottom:1.5rem; position: relative; overflow: hidden; display: flex; align-items: center; justify-content: center; text-align: center; min-height: 200px;">
    <img 
        src="{{ asset('images/banner-home.png') }}" 
        alt="" 
        class="page-banner__bg" 
        style="filter: blur(4px); mix-blend-mode: normal; position: absolute; width: 100%; height: 100%; object-fit: cover; top: 0; left: 0;"
    >
    <div class="page-banner__overlay" style="background: rgba(0, 0, 0, 0.4) !important; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
    <div class="page-banner__content" style="position: relative; z-index: 2; width: 100%;">
        <h1 class="page-banner__title">Nuevo Ingrediente</h1>
        <p class="page-banner__subtitle" style="color: #facc15 !important;">Registrá un ingrediente y su costo unitario.</p>
    </div>
</div>
<div class="w-full max-w-2xl mx-auto px-4 py-6">

    <div class="mb-4">
        <a href="{{ route('ingredients.index') }}" class="text-xs text-slate-400 hover:text-emerald-400 transition-colors flex items-center gap-1">
            ← Volver a Mis Ingredientes
        </a>
    </div>

    <div class="bg-slate-900/40 border border-slate-800/80 rounded-xl p-6 backdrop-blur-sm shadow-xl">
       <div class="border-b border-slate-800 pb-4 mb-6">
    <h2 style="color: #000000 !important;" class="text-xl font-bold tracking-tight">Agregar Nuevo Ingrediente</h2>
    <p class="text-slate-400 text-xs mt-1">Registrá una materia prima para poder usarla en el cálculo de tus recetas.</p>
</div>

        <form action="{{ route('ingredients.store') }}" method="POST" class="space-y-5" id="ingredient-form">
            @csrf

            <div>
                <label for="name" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Nombre del Ingrediente</label>
                <input type="text" name="name" id="name" required placeholder="Ej: Tela de algodón, Madera, Vinilo, Materiales..."
                       class="w-full bg-slate-950 border border-slate-800 rounded-lg px-3 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-emerald-500 transition-colors">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="unit_measure" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Unidad de Medida</label>
                    <select id="unit_measure_select" required
                             class="w-full bg-slate-950 border border-slate-800 rounded-lg px-3 py-2.5 text-sm text-slate-300 focus:outline-none focus:border-emerald-500 transition-colors cursor-pointer">
                        <option value="">-- Seleccionar unidad --</option>
                        <option value="kg">Kilogramo (kg)</option>
                        <option value="g">Gramo (g)</option>
                        <option value="litro">Litro (litro)</option>
                        <option value="ml">Mililitro (ml)</option>
                        <option value="docena">Docena (docena)</option>
                     <option value="unidad">Unidad (unidad)</option>
                    @foreach($customUnits as $customUnit)
                        <option value="{{ $customUnit }}">{{ $customUnit }}</option>
                    @endforeach
                        <option value="otra">Otra (especificar)</option>
                    </select>

                    <input type="hidden" name="unit_measure" id="unit_measure_hidden">

                    <div id="unit_measure_custom_wrapper" class="mt-2" style="display: none;">
                        <input type="text" id="unit_measure_custom" maxlength="50"
                                 placeholder="Ej: resma, metro, docena de tornillos..."
                                  class="w-full bg-slate-950 border border-slate-800 rounded-lg px-3 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-emerald-500 transition-colors">
                    </div>
                </div>

                <div>
                    <label for="unit_cost" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Costo ($)</label>
                    <div class="relative input-icon-group">
                        <span class="absolute left-3 top-2.5 text-slate-500 text-sm font-mono">$</span>
                        <input type="text" name="unit_cost" id="unit_cost" required placeholder="Ej: 4000 o 4.000 o 4000,50"
                               inputmode="numeric"
                               class="w-full bg-slate-950 border border-slate-800 rounded-lg pl-7 pr-3 py-2.5 text-sm text-emerald-400 font-semibold font-mono focus:outline-none focus:border-emerald-500 transition-colors">
                    </div>
                </div>
            </div>

            <div>
                <label for="supplier_notes" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Notas del Proveedor</label>
                <textarea name="supplier_notes" id="supplier_notes" rows="4"
                          placeholder="Ej: Proveedor: Juan López · Tel: 11-1234-5678 · Dirección: Av. Corrientes 1234 · Entrega los lunes."
                          class="w-full bg-slate-950 border border-slate-800 rounded-lg px-3 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-emerald-500 transition-colors resize-y">{{ old('supplier_notes') }}</textarea>
            </div>

            <div class="border-t border-slate-800/60 pt-4">
               <p style="color: #000000 !important;" class="text-xs font-semibold uppercase tracking-wider mb-3">Stock</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="stock" class="block text-xs text-slate-500 mb-2">Cantidad en depósito</label>
                        <input type="text" name="stock" id="stock" inputmode="numeric"
                               value="{{ old('stock') }}"
                               placeholder="Ej: 5,00"
                               class="w-full bg-slate-950 border border-slate-800 rounded-lg px-3 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-emerald-500 transition-colors">
                    </div>
                    <div>
                        <label for="stock_minimo" class="block text-xs text-slate-500 mb-2">Stock mínimo (alerta)</label>
                        <input type="text" name="stock_minimo" id="stock_minimo" inputmode="numeric"
                               value="{{ old('stock_minimo') }}"
                               placeholder="Ej: 1,00"
                               class="w-full bg-slate-950 border border-slate-800 rounded-lg px-3 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-emerald-500 transition-colors">
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-800/60">
                <a href="{{ route('ingredients.index') }}" 
   style="color: #000000 !important;" 
   class="text-xs font-bold px-4 py-2 transition-colors">
    Cancelar
</a>
               <button type="submit" 
        style="background-color: #000000 !important; color: #ffffff !important;" 
        class="text-xs font-bold px-5 py-2.5 rounded-lg transition-colors shadow-md">
    Guardar Ingrediente
</button>
            </div>
        </form>
    </div>
</div>
<script>
/**
 * Normaliza un número ingresado en formato argentino o inglés antes de enviarlo.
 *
 * Casos soportados:
 *   "4.000"     → 4000     (punto como miles, formato AR)
 *   "4.000,50"  → 4000.50  (punto miles + coma decimal, formato AR)
 *   "4000.50"   → 4000.50  (punto decimal, formato EN)
 *   "4000,50"   → 4000.50  (coma decimal sin miles)
 *   "4000"      → 4000     (entero sin separador)
 */
function normalizeNumber(val) {
    val = val.trim();
    if (!val) return val;

    // Caso 1: tiene coma → la coma ES el decimal (formato argentino)
    if (val.includes(',')) {
        return val.replace(/\./g, '').replace(',', '.');
    }

    // Caso 2: tiene más de un punto → todos son separadores de miles
    if ((val.match(/\./g) || []).length > 1) {
        return val.replace(/\./g, '');
    }

    // Caso 3: tiene un solo punto
    if (val.includes('.')) {
        var parts = val.split('.');
        // Si después del punto hay exactamente 3 dígitos → es separador de miles
        // Ej: "4.000" → 4000
        if (parts[1] && parts[1].length === 3) {
            return parts[0] + parts[1];
        }
        // Si no → es separador decimal. Ej: "4000.50" → 4000.50 (ya válido)
        return val;
    }

    // Sin separador: número entero
    return val;
}
const unitSelect = document.getElementById('unit_measure_select');
const unitHidden = document.getElementById('unit_measure_hidden');
const customWrapper = document.getElementById('unit_measure_custom_wrapper');
const customInput = document.getElementById('unit_measure_custom');

unitSelect.addEventListener('change', function () {
    if (this.value === 'otra') {
        customWrapper.style.display = 'block';
        customInput.setAttribute('required', 'required');
        unitHidden.value = '';
    } else {
        customWrapper.style.display = 'none';
        customInput.removeAttribute('required');
        unitHidden.value = this.value;
    }
});

customInput.addEventListener('input', function () {
    unitHidden.value = this.value.trim();
});

document.getElementById('ingredient-form').addEventListener('submit', function () {
    ['unit_cost', 'stock', 'stock_minimo'].forEach(function (id) {
        var el = document.getElementById(id);
        if (el && el.value) el.value = normalizeNumber(el.value);
    });
});
</script>
@endsection