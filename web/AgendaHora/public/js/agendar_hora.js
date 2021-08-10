

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let fecha = document.querySelector("#fecha-txt").value.trim();
    let horaR =document.querySelector("#hora-select").value.trim();
    let rut = document.querySelector("#rut-txt").value.trim();
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let apellido = document.querySelector("#apellido-txt").value.trim();
    let celular = document.querySelector("#celular-txt").value.trim();
    let barbero = document.querySelector("#barbero-select").value.trim();
    let servicio = document.querySelector("#servicio-select").value.trim();


    let errores = [];

    if(nombre === ""){
        errores.push("Debe ingresar un Nombre");
    }else if(rut === ""){
        errores.push("Debe ingresar un RUT");

    }else if(apellido === ""){
        errores.push("Debe ingresar un Apellido");
    }else if(celular === ""){
        errores.push("Debe ingresar un Celular");
    }else if (fecha === ""){
        errores.push("Debe ingresar una Fecha");
    }


   
    if(errores.length == 0){       
        let hora = {};
        hora.dia = fecha;
        hora.hora = horaR;
        hora.rut_cliente=rut;
        hora.nombre_cliente= nombre;
        hora.apellido_cliente= apellido;
        hora.celular_cliente= celular;
        hora.nombre_barbero= barbero;
        hora.nombre_servicio= servicio;

       
        let res = await crearHora(hora); 
        await Swal.fire("Hora Creada", "Hora Agendada Exitosamente", "info");

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

