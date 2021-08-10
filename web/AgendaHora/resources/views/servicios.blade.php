@extends('layouts.master')
@section('contenido')

<div class="row ">
     <div class="col-10 col-md-12 col-lg-8 mx-auto mt-5"> 

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
            <div class="col">
              <div class="card h-100">
                
                <div class="card-body">
                  <h5 style="font-size:35px;font-weight:bold" class="card-title text-center">Corte de Cabello</h5>
                  <p class="card-text mt-5">Corte de Cabello incluye lavado y posterior peinado utilizando pomadas de las marcas más reconocidas disponibles actualmente en el mercado.</p>
                </div>
                <div class="card-footer mt-3">
                  <small style="font-size:20px;font-weight:bold" class="text-muted ">Valor: 15.000</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                
                <div class="card-body">
                  <h5 style="font-size:35px;font-weight:bold" class="card-title text-center">Perfilado de Barba</h5>
                  <p class="card-text mt-5" >Servicio clásico completo cuyo objetivo es dar un aspecto particular y exacto a la barba y/o bigote de acuerdo a la forma de tu rostro. Incluye ritual de paños calientes para preparar la piel, acompañada de productos de afeitado tales como aceites hidratantes y lociones refrescantes.</p>
                </div>
                <div class="card-footer mt-3">
                  <small style="font-size:20px;font-weight:bold" class="text-muted ">Valor: 14.000</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                
                <div class="card-body">
                  <h5 style="font-size:35px;font-weight:bold" class="card-title text-center">Camuflaje de Canas</h5>
                  <p class="card-text mt-5">Servicio profesional que proporciona un camuflaje personalizado de canas con diferentes tonalidades, garantizando resultados sutiles, con poca mantención y sin aclarado visible.</p>
                </div>
                <div class="card-footer mt-3">
                  <small style="font-size:20px;font-weight:bold" class="text-muted ">Valor: 29.000</small>
                </div>
              </div>
            </div>
        </div>                   
    </div>   
</div>

@endsection


@section('javascript')
@endsection