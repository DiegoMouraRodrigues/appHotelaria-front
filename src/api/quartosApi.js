// retorna getToken() é uma funçao que retorna o valor do token
//armazanado no localStorage(), para que o usuario permaneça logado mesmo que mude de pagina e nao tenha que
//  "re-logar"
import {getToken} from "./authAPI";


//listar todos os quartos independente dos filtros
export async function listAllQuartosRequest(){

    //retorna o valor do token armazenado (que comprova a autenticação
    //do usuario)
    const token = getToken();

    //A função para listar os quartos precisa ser assincrona pois espera-se uma "promise" de que ao chamar
    //o endpoint api/quartos (que executa o arquvo quartos.php no qual contem todas as requisiçãoes possiveis)
    //este arquivo converte com a controller que, por sua vez, converte com a model (onde esta query SELECT)
    const response = await fetch('api/quartos',{
        method: "GET",
        headers: {
            "Accept": "application/json",
            "Content-Type": "application/json"
        },
        
        credentials: "same-origin"    

    })
}