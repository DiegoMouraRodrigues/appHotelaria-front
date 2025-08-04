import loginform from "../components/loginform.js";

export default function renderLoginPage(){
    const divRoot = document.getElementById('root');
    divRoot.innerHTML = '';

    const formulario = loginform();
    divRoot.appendChild(formulario);

}


