@extends('layouts.master')

@section('contenido')

<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto mt-5">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <span>Agendar Hora</span>
            </div>

            
            
            <div class="card-body">
                <div class="mb-3">
                    <label for="fecha-txt" class="form-label">Fecha</label>
                    <input type="date" id="fecha-txt" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="hora-select" class="form-label">Hora</label>
                    <select  id="hora-select" class="form-select">
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                        <option value="18:30">18:30</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="rut-txt" class="form-label">RUT</label>
                    <input type="text" id="rut-txt" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre-txt" class="form-label">Nombre</label>
                    <input type="text" id="nombre-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="apellido-txt" class="form-label">Apellido</label>
                    <input type="text" id="apellido-txt" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="celular-txt" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="celular-txt">
                </div>

                <div class="mb-3">
                    <label for="barbero-select" class="form-label">Barbero</label>
                    <select class="form-select" id="barbero-select">
                        <option value="Ale">Ale</option>
                        <option value="Leo">Leo</option>
                        <option value="Carlos">Carlos</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="servicio-select" class="form-label">Servicio</label>
                    <select class="form-select" id="servicio-select">
                        <option value="corte_cabello">Corte de Cabello</option>
                        <option value="perfilado_barba">Perfilado de Barba</option>
                        <option value="camuflaje_canas">Camuflaje de Canas</option>
                    </select>
                </div>

                


            </div>
            <div class="card-footer d-grid gap-1">
                <button id="registrar-btn" class="btn btn-warning">Registrar</button>
            </div>                      
        </div>        
    </div>
</div>
    
    
@endsection




@section('javascript')
<script src="{{asset('js/servicios/horasService.js')}}"></script>
<script src="{{asset('js/agendar_hora.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@endsection