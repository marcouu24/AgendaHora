const crearServicio = async (servicio)=>{ //arrow functions
    
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/servicios/post", servicio, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const eliminarServicio = async(id)=>{
    try{
        let resp = await axios.post("api/servicios/delete", {id}, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
    
}

 const getServicios = async()=>{
    let resp = await axios.get("api/servicios/get");
    return resp.data;
}  