import loginform from "../components/loginform.js";

export default function renderLoginPage(){
    const divRoot = document.getElementById('root');
    divRoot.innerHTML = '';

    const titulos = document.createElement('h1');
    titulos.textContent = 'faça o login ou crie uma conta';
    titulos.className = 'titulos';

    //dentro de divRoot tera uma div chamada conteiner e em conteiner estara o formulario
    const container = document.createElement('div');
    container.className = 'card-p-4 shadow-lg';//classe di bootstrap para criar um card
    container.style.width = '100%'; //aplicada a largura de 100% na div container para ocupar na tela
    container.style.maxWidth = '400px'; //ate que atinja o maximo de 400px
    divRoot.appendChild(container); //divRoot contem a nova div

    
    const formulario = loginform();
    container.appendChild(titulos);
    container.appendChild(formulario); // nova div container, ja dentro de divroot, contem o form

}


