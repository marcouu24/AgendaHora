<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hora;

class HorasController extends Controller
{
    public function crearHora(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $hora = new Hora();
        $hora->dia = $input["dia"];
        $hora->hora = $input["hora"];
        $hora->rut_cliente = $input["rut_cliente"];
        $hora->nombre_cliente = $input["nombre_cliente"];
        $hora->apellido_cliente = $input["apellido_cliente"];
        $hora->celular_cliente = $input["celular_cliente"];
        $hora->nombre_barbero = $input["nombre_barbero"];
        $hora->nombre_servicio = $input["nombre_servicio"];
        

        $hora->save();
        return $hora;
    }

    public function eliminarHora(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de Laravel se llama Eloquent
        //1. Ir a buscar el registro a la bd
        // $consola = App\Models\Consola::findOrFail(2)
        $hora = Hora::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $hora->delete(); //DELETE FROM consolas WHERE id=1
        return "ok";
    }

    public function getHoras(){
        //Equivalente a un select * from consolas
        $horas = Hora::all();
        return $horas;
    }

    public function filtrarHoras(Request $request){
        $input = $request->all();
        $filtro = $input["filtro"];
        $horas = Hora::where("nombre_barbero", $filtro)->get();
        //SELECT * FROM consolas WHERE marca = $filtro
        return $horas;
    }
}
