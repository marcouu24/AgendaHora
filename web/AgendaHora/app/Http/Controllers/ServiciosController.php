<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function crearServicio(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $servicio = new Servicio();
        $servicio->nombre_servicio = $input["nombre"];
        $servicio->descripcion_servicio = $input["descripcion"];
        $servicio->valor_servicio = $input["valor"];

        

        $servicio->save();
        return $servicio;
    }

    public function eliminarServicio(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de Laravel se llama Eloquent
        //1. Ir a buscar el registro a la bd
        // $consola = App\Models\Consola::findOrFail(2)
        $servicio = Servicio::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $servicio->delete(); //DELETE FROM consolas WHERE id=1
        return "ok";
    }

    public function getServicios(){
        //Equivalente a un select * from consolas
        $servicios = Servicio::all();
        return $servicios;
    }
}
