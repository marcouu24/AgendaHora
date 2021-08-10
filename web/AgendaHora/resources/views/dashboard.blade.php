<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<x-app-layout>
    <div class="row mt-5">
        <div class="row mt-2">
            <div class="col-12 col-md-6 col-lg-5 mx-auto">
    
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        <span>Filtrar por Barbero</span>
                    </div>
                    <div class="card-body">
                        <select class="form-select" id="filtro-cbx">
                            <option value="todos">Todos</option>
                            <option value="Claudio">Claudio</option>
                            <option value="Ale">Ale</option>
                            <option value="Leo">Leo</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row mt-5">
            <div class="col-12 col-md-12 col-lg-6 mx-auto ">
                <table class="table table-hover table-bordered table-striped table-responsive text-center ">
                    <thead class="bg-warning ">
                        <tr>
                            <td>Nombre</td>
                            <td>Fecha</td>
                            <td>Hora</td>
                            <td>Celular</td>
                            <td>Barbero</td>
                            <td>Servicio</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody id="tbody-horas">
    
                        
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
<script src="{{asset('js/servicios/horasService.js')}}"></script>
<script src="{{asset('js/dashboard.js')}}"></script>