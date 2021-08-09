

@extends('layouts.master')



@section('contenido')
    <div class="row text-center mt-5">       
        <div class="col-12 col-md-6 col-lg-5 mx-auto mt-5">
            <img src="{{asset('img/logo.png')}}" class="logo mx-auto img-fluid " >           
        </div>

    </div>
    <div class="row text-center mt-5 p-5 ">       
        <div class="col-12 col-md-6 col-lg-5 mx-auto  p-5">
            <a class="btn btn-warning text-dark" style="font-size:33px;font-weight:bold" href="{{route('agendar_hora')}}" role="button">REGISTRAR HORA</a>
            
        </div>
    </div>

    <div class="row mt-5 p-5"></div>
    
    <div class="row mt-5  bg-warning" >
        <p style="font-size:30px;font-weight:bold" class="text-center text-dark mt-2">NUESTRA UBICACIÓN</p>
    </div>
    <div class="row ">
        <style>#map{
            position: relative;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }</style>

        <div id="map"></div>
        <script>
            var map = L.map('map').setView([-33.024428, -71.552458], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([-33.024428, -71.552458]).addTo(map)
                .bindPopup('Plaza Viña, Local 12')
                .openPopup();
        </script> 
    </div>


    
    
@endsection




@section('javascript')
@endsection