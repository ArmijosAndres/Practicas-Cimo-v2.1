<div 
    id="loading-screen" 
    class="loading-screen" 
    style="display: none;"
    role="status"
    aria-live="polite"
    aria-label="Cargando contenido"
>
    <div class="loading-spinner">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Cargando...</span>
        </div>
        <p class="mt-3 text-muted">Cargando...</p>
    </div>
</div>

@push('styles')
<style>
.loading-screen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.95);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loading-spinner {
    text-align: center;
}
</style>
@endpush