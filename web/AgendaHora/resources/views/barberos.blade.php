@extends('layouts.master')

@section('contenido')

<div class="row ">
     <div class="col-10 col-md-12 col-lg-10 mx-auto mt-5"> 

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="{{asset('img/Ali.png')}}" class="card-img-top mx-auto img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center h2">Ale</h5>
                      <p class="card-text">
                        <a class="btn-lg btn-primary d-grid" height="20px" style="background-color: #ac2bac;"  href="https://www.instagram.com/leomessi/" target="_blank" role="button"
                        ><i class="fab fa-instagram text-center"> Instagam</i
                      ></a>
                      </p>
                    </div>
                    
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{asset('img/Mohi.png')}}" class="card-img-top mx-auto img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center h2 ">Leo</h5>
                      <p class="card-text">
                        <a class="btn-lg btn-primary d-grid" height="20px" style="background-color: #ac2bac;" href="https://www.instagram.com/leomessi/" target="_blank" role="button"
                        ><i class="fab fa-instagram text-center"> Instagam</i
                      ></a>
                      </p>
                    </div>
                    
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{asset('img/Rudy.png')}}" class="card-img-top mx-auto img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center h2">Carlos</h5>
                      <p class="card-text">
                        <a class="btn-lg btn-primary d-grid" height="20px" style="background-color: #ac2bac;" href="https://www.instagram.com/leomessi/" target="_blank" role="button"
                        ><i class="fab fa-instagram text-center"> Instagam</i
                      ></a>
                      </p>
                    </div>
                    
                  </div>
                </div>
              </div>
    </div>       
</div>

@endsection




@section('javascript')

@endsection