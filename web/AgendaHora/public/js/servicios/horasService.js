const crearHora = async (hora)=>{ //arrow functions
    
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/horas/post", hora, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const eliminarHora = async(id)=>{
    try{
        let resp = await axios.post("api/horas/delete", {id}, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
    
}

/*  const getHoras = async()=>{
    let resp = await axios.get("api/horas/get");
    return resp.data;
}  */

const getHoras = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/horas/get");
    }else {
        resp = await axios.get(`api/horas/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};