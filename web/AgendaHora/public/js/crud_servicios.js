const iniciarEliminacion = async function(){
    //1. Obtener el id a eliminar
    let id = this.idServicio;
    let resp = await Swal.fire({title:"Esta seguro?", text:"Esta operacion es irreversible"
    , icon:"error", showCancelButton:true});
    if(resp.isConfirmed){

        //1. Eliminar
        if(await eliminarServicio(id)){
            //2. Si la eliminacion fue exitosa, recargar la tabla
            let servicios = await getServicios();
            cargarTabla(servicios);
            Swal.fire("Servicio Eliminado", "Servicio eliminado exitosamente", "info");
        }else {
        
            //3. Si no fue exitosa, mostrar un mensaje de error
            Swal.fire("Error", "No se pudo atender la solicitud", "error");
        }
    } else {
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    }
};


const cargarTabla = (servicios)=>{
    //1. Obtener una referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-servicios");
    tbody.innerHTML = "";
    //2. Recorrer todas las consolas
    for(let i=0; i < servicios.length; ++i){
        //3. Por cada consola generar una fila
        let tr = document.createElement("tr");
        //4. Generar por cada atributo de la consola, un td

        let tdNombre = document.createElement("td");
        tdNombre.innerText = servicios[i].nombre_servicio;

        let tdDescripcion = document.createElement("td");
        tdDescripcion.innerText = servicios[i].descripcion_servicio;

        let tdValor = document.createElement("td");
        tdValor.innerText = servicios[i].valor_servicio;

        

        let tdAcciones = document.createElement("td");

        let botonEliminar = document.createElement("button");        
        botonEliminar.innerText= "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idServicio =servicios[i].id;

        
        botonEliminar.addEventListener("click", iniciarEliminacion);

        tdAcciones.appendChild(botonEliminar);
        //5. Agregar los td al tr
        tr.appendChild(tdNombre);
        tr.appendChild(tdDescripcion);
        tr.appendChild(tdValor);
        tr.appendChild(tdAcciones);
        //6. Agregar el tr al cuerpo de la tabla
        tbody.appendChild(tr);
    }

};

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let descripcion =document.querySelector("#descripcion-txt").value.trim();
    let valor = document.querySelector("#valor-txt").value.trim();



    let errores = [];

    if(nombre === ""){
        errores.push("Debe ingresar un Nombre");
    }else if(descripcion === ""){
        errores.push("Debe ingresar una Descripcion");      
    }else if(valor === ""){
        errores.push("Debe ingresar un Valor");
    }

   
    if(errores.length == 0){

        let servicio = {};
        servicio.nombre = nombre;
        servicio.descripcion = descripcion;
        servicio.valor= valor;
        

       
        let res = await crearServicio(servicio); 
        await Swal.fire("Servicio Creado", "Servicio creado exitosamente", "info");

        window.location.href = "";

    } else {
        //Mostrar errores
        Swal.fire({
            title: "Errores de validacion",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});







document.addEventListener("DOMContentLoaded", async ()=>{

    let servicios = await getServicios();
    cargarTabla(servicios);
});


