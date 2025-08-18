import loginform from "../components/loginform";
export default function(){

    const divRoot = document.getElementById('root');
    divRoot.innerHTML = '';

    const titulos = document.createElement('h1');
    titulos.textContent = 'Crie sua conta';
    titulos.className = 'titulos';
    //centraliza somente o titulo da pagina de login
    titulos.style.textAlign = 'center';

    //dentro de divRoot tera uma div chamada conteiner e em conteiner estara o formulario
    const container = document.createElement('div');
    container.className = 'card-p-4 shadow-lg';//classe di bootstrap para criar um card
    container.style.width = '100%'; //aplicada a largura de 100% na div container para ocupar na tela
    container.style.maxWidth = '400px'; //ate que atinja o maximo de 400px

    divRoot.appendChild(container); //divRoot contem a nova div

    
    const formulario = loginform();

    const nome = document.createElement('input');
    nome.type = 'nome';
    nome.placeholder = "Digite seu nome";
    nome.classname = 'nome_cadastro';
    formulario.appendChild(nome);

    formulario.btnAuth.textContent = "Criar conta";


    container.appendChild(titulos);
    container.appendChild(nome);
    container.appendChild(formulario);

}
