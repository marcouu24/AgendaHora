@extends('layouts.master')



@section('contenido')
    <div class="row text-center mt-5">       
        <div class="col-12 col-md-6 col-lg-5 mx-auto mt-5">
            <img src="{{asset('img/logo.png')}}" class="logo mx-auto img-fluid " >           
        </div>

    </div>
    <div class="row text-center mt-5">       
        <div class="col-12 col-md-6 col-lg-5 mx-auto mt-5">
            <a class="btn btn-warning" style="font-size:35px;font-weight:bold" href="{{route('agendar_hora')}}" role="button">REGISTRAR HORA</a>
            
        </div>
    </div>
    

    
    
@endsection




@section('javascript')
@endsection