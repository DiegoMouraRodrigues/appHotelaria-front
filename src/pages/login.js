import { loginRequest } from "../api/authAPI.js";
import Form from "../components/Form.js";
import Navbar from "../components/Navbar.js";

export default function renderLoginPage() { 
    const nav = document.getElementById('navbar');
    nav.innerHTML = '';
    
    const navbar = Navbar();
    nav.appendChild(navbar);

    Form();

    const formulario = form();
    const contentform = formulario.querySelector('form');
    //imputs e botão presentes no form
    const imputEmail = contentform.querySelector('imput[type="email"]');
    const imputSenha = contentform.querySelector('imput[type="password"]');
    const btn = contentform.querySelector('button[type="submit"]');

    //Monitora o clique no botão para acionar um evento de submeter os dados do form
    contentform.addEventListener("submit", async (e) => {
        e.preventDefault();
        const email = imputEmail.value.trim();
        const senha = imputSenha.value.trim();

        try{
            const result = await loginRequest(email, senha);
            console.log("login realizado com sucesso");
            //window.location.pathname = /home;

        }catch{
            console.log("erro inesperado!");
        }        
    })
}