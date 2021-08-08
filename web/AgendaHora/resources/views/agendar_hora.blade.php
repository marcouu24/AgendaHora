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
                    <label for="nombre-txt" class="form-label">Nombre</label>
                    <input type="text" id="nombre-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="apellido-txt" class="form-label">Apellido</label>
                    <input type="text" id="apellido-txt" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="cel-txt" class="form-label">Celular</label>
                    <input type="number" class="form-control" id=cel-txt">
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
@endsection