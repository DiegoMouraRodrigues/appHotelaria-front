export async function  loginRequest(email, senha) {
    const response = await fetch("/api/login.php", {
        method: "POST",
        headers:{
            "Accept": "application/json",
            "content-type": "application/x-www-form-urlencoded;charset=UTF-8"
        },
        body: new URLSearchParams({email, senha}).toString(), 
        
        //URL da requisição é da mesma origem do front (mesmo protocolo http/mesmo 
        //dominio - local/mesmo porta 80 do servidor web Apache)
        //front: http://localhost/estudo_diegoM/public/index.html
        //back: http://localhost/estudo_diegoM/api/login.php
        credentials: "same-origin"
    });
    
    //interpreta a resposta como JSON
    let data = null;
    try{
        data = await response.json();
    }catch{
        //se não for JSON valido, data permanece null
        data - null;
    }

    return{
        ok: true,
        user: data.user ?? null,
        raw: data
    }

}