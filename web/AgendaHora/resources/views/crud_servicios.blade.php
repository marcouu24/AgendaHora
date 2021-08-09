<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<x-app-layout>
    <div class="row mt-5">
        
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 mx-auto text-center">
                <a class="btn btn-warning" style="font-size:35px;font-weight:bold" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" role="button">NUEVO SERVICIO</a>

                <div class="collapse mt-2" id="collapseExample">
                    <div class="card card-body">
                        <div class="card">
                            <div class="card-header bg-warning text-white">
                                <span>Agendar Hora</span>
                            </div>
                                           
                            
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="nombre-txt" class="form-label">Nombre Servicio</label>
                                    <input type="text" id="nombre-txt" class="form-control">
                                </div>
                
                                <div class="mb-3">
                                    <label for="descripcion-txt" class="form-label">Descripcion Servicio</label>
                                    <input type="text" id="descripcion-txt" class="form-control">
                                </div>
                
                                <div class="mb-3">
                                    <label for="valor-txt" class="form-label">Valor</label>
                                    <input type="text" id="valor-txt" class="form-control">
                                </div>                        
                
                
                            </div>
                            <div class="card-footer d-grid gap-1">
                                <button id="registrar-btn" class="btn btn-warning">Registrar</button>
                            </div>
                        </div>
                    </div>
                 </div>

                
                </div>

            </div>
        </div>
    
        <div class="row mt-5">
            <div class="col-12 col-md-12 col-lg-6 mx-auto ">
                <table class="table table-hover table-bordered table-striped table-responsive text-center">
                    <thead class="bg-warning ">
                        <tr>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Valor</td>
                            <td>Acciones</td>                            
                        </tr>
                    </thead>
                    <tbody id="tbody-servicios">
    
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    

    
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/axios_config.js')}}"></script>
<script src="{{asset('js/servicios/serviciosService.js')}}"></script>
<script src="{{asset('js/crud_servicios.js')}}"></script>