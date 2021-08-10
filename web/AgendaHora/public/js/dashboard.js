const iniciarEliminacion = async function(){
    //1. Obtener el id a eliminar
    let id = this.idHora;
    let resp = await Swal.fire({title:"Esta seguro?", text:"Esta operacion es irreversible"
    , icon:"error", showCancelButton:true});
    if(resp.isConfirmed){

        //1. Eliminar
        if(await eliminarHora(id)){
            //2. Si la eliminacion fue exitosa, recargar la tabla
            let horas = await getHoras();
            cargarTabla(horas);
            Swal.fire("Hora Eliminada", "Hora eliminada exitosamente", "info");
        }else {
        
            //3. Si no fue exitosa, mostrar un mensaje de error
            Swal.fire("Error", "No se pudo atender la solicitud", "error");
        }
    } else {
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    }
};






const cargarTabla = (horas)=>{
    //1. Obtener una referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-horas");
    tbody.innerHTML = "";
    //2. Recorrer todas las consolas
    for(let i=0; i < horas.length; ++i){
        //3. Por cada consola generar una fila
        let tr = document.createElement("tr");
        //4. Generar por cada atributo de la consola, un td

        let tdNombre = document.createElement("td");
        tdNombre.innerText = horas[i].nombre_cliente;

        let tdDia = document.createElement("td");
        tdDia.innerText = horas[i].dia;

        let tdHora = document.createElement("td");
        tdHora.innerText = horas[i].hora;

        let tdCelular = document.createElement("td");
        tdCelular.innerText = horas[i].celular_cliente;

        let tdBarbero = document.createElement("td");
        tdBarbero.innerText = horas[i].nombre_barbero;

        let tdServicio = document.createElement("td");
        if(horas[i].nombre_servicio=="corte_cabello"){
            tdServicio.innerText = "Corte de Cabello";
        }else if(horas[i].nombre_servicio=="perfilado_barba"){
            tdServicio.innerText = "Perfilado de Barba";
        }else if(horas[i].nombre_servicio=="camuflaje_canas"){
            tdServicio.innerText = "Camuflaje de Canas";
        }
        

        let tdAcciones = document.createElement("td");

        let botonEliminar = document.createElement("button");        
        botonEliminar.innerText= "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idHora =horas[i].id;

        
        botonEliminar.addEventListener("click", iniciarEliminacion);

        tdAcciones.appendChild(botonEliminar);
        //5. Agregar los td al tr
        tr.appendChild(tdNombre);
        tr.appendChild(tdDia);
        tr.appendChild(tdHora);
        tr.appendChild(tdCelular);
        tr.appendChild(tdBarbero);
        tr.appendChild(tdServicio);
        tr.appendChild(tdAcciones);
        //6. Agregar el tr al cuerpo de la tabla
        tbody.appendChild(tr);
    }

};

document.querySelector("#filtro-cbx").addEventListener("change", async ()=>{
    let filtro = document.querySelector("#filtro-cbx").value;
    let horas = await getHoras(filtro);
    cargarTabla(horas);
});

document.addEventListener("DOMContentLoaded", async ()=>{

    let horas = await getHoras();
    cargarTabla(horas);
});