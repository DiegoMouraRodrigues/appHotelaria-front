import { loginRequest, saveToken } from "../api/authAPI.js";
import Form from "../components/Form.js";
import Navbar from "../components/Navbar.js";
import Footer from "../components/footer.js";

export default function renderLoginPage() { 
    const nav = document.getElementById('navbar');
    nav.innerHTML = '';
    
    const navbar = Navbar();
    nav.appendChild(navbar);
        
    const fot = document.getElementById('footer');
    fot.innerHTML = '';

    const footer = Footer();
    fot.appendChild(footer);

    const formulario = Form();
    const contentform = formulario.querySelector('form');
    //imputs e botão presentes no form
    const imputEmail = contentform.querySelector('input[type="email"]');
    const imputSenha = contentform.querySelector('input[type="password"]');
    const btn = contentform.querySelector('button[type="submit"]');

    //Monitora o clique no botão para acionar um evento de submeter os dados do form
    contentform.addEventListener("submit", async (e) => {
        e.preventDefault();
        const email = imputEmail.value.trim();
        const senha = imputSenha.value.trim();

        try{
            const result = await loginRequest(email, senha);
            console.log("login realizado com sucesso");
            console.log(result);
            saveToken(result.token);
            // window.location.pathname = "estudo_diegoM/home";

        }catch{
            console.log("erro inesperado!");
        }        
    });
}