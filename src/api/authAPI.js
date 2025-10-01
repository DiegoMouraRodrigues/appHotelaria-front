export async function loginRequest(email, senha) {
    const dados = {email, senha};
    const response = await fetch("api/login/clientes", {
        method: "POST",
        headers:{
            "Accept": "application/json",
            "Content-Type": "application/json"
        },
        body: JSON.stringify(dados),
        // body: new URLSearchParams({email, senha}).toString(), 
        
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
        console.log(data);
    }catch{
        //se não for JSON valido, data permanece null
        data = null;
    }

    if (!data || !data.token){
        const message = "Resposta invalida do servidor. token ausente";
        return{ok: false, token: null, raw: data, message};
    }

    return {
        ok: true,
        token: data.token,
        raw: data
    }
}
    //funçao para salvar achave token apos autenticação confirmada,
    //ao salvar no local storage, o usuario podera mudar de pagina, fechar
    //o site e ainda assim permanecer logado, desde que o tempo nao tenha
    //expirado(1h)
    export function saveToken(token){
        localStorage.setItem("auth_token", token);
    }

    // recuperar a chave a cada pagina que o usuario navegar
    export function getToken(){
        return localStorage.setItem("auth_token");
    }

    // função para remover a cahve do token quando o usuario deslogar
    export function clearToken(){
        localStorage.removeItem("auth_token");
    }