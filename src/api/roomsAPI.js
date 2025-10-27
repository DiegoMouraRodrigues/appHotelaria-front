export async function addRoom(formulario){
    const formData = new formData(formulario);
    const typeAccept = ['image/jpg', 'image/png'];
    const arqv = formulario.querySelector('#formfilesMultiple');

    const imgs = arqv.files;
    for(let i = 0; i < imgs.lenght; i++){
        if(!typeAccept.includes(imgs[i].type)){
            throw new Error('Arquivo "${imgs[i].name}" não é surportado seleciona um arquvio jpg ou png');   
        }
    }
    const url = 'api/quartos';
    const response = await fetch(url, {
        method: "POST",
        boby: formData
    });

    // Interpreta a resposta como JSON
    let result = null;
    try {
        result = await response.json();
    }
    catch {
        // Se não for JSON válido, result permanece null
        result = null;
    }
    if(!response.ok) {
        throw new Error(`Erro ao enviar requisição: ${response.status}`);
    }
    return result; 
}

// Listar os quartos disponiveis de acordo com o inicio fim e quantidade
export async function listAvaibleQuartosRequest({ inicio, fim, qtd }){
    // Retorna o valor do token armazenado (que comprova a autenticação do usuario)
    const params = new URLSearchParams();

    if(inicio){ 
        params.set("inicio", inicio);
    }  

    if(fim){
        params.set("fim", fim);
    }

    if(qtd !== null && qtd !== ""){
        params.set("qtd", String(qtd));
    }
    
    const url = `api/quartos/disponiveis?${params.toString()}`;

    const response = await fetch(url, {
        method: "GET",
        headers: {
            "Accept": "application/json",
            "Content-Type": "application/json"
        },
        credentials: "same-origin"
    });

    let data = null;

    try{
        data = await response.json();
    }catch{
        data = null;
    }
    if(!response.ok){
        const message = data?.message || "Falha ao buscar quartos disponiveis!";
        throw new Error(message);
    }
    const quartos = Array.isArray(data?.Quartos) ? data.Quartos : [];
    console.log(quartos);
    return quartos;
    
}