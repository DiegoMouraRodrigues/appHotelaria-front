import { createRequest } from "../api/clientAPI.js";
import Form from "../components/Form.js";
import Navbar from "../components/Navbar.js";
import Footer from "../components/footer.js";

export default function renderRegisterPage() {
    const nav = document.getElementById('navbar');
    nav.innerHTML = '';
    
    const navbar = Navbar();
    nav.appendChild(navbar);


    const fot = document.getElementById('footer');
    fot.innerHTML = '';
    
    const footer = Footer();
    fot.appendChild(footer);

    const formulario = Form();
   
    const titulo = formulario.querySelector('h1');
    titulo.textContent = "Cadastre-se";

    //Seleciono o elemento form que está presente em ./components/Form.js
    const contentForm = formulario.querySelector('form');

    //Criar o input para nome e adicionar em contentForm
    const InputNome = document.createElement('input');
    InputNome.type = 'text';
    InputNome.placeholder = "Digite seu Nome";

    const InputCPF = document.createElement('input');
    InputCPF.type = 'text';
    InputCPF.placeholder = "Digite seu CPF";

    const inputTelefone = document.createElement('input');
    inputTelefone.type = 'text';
    inputTelefone.placeholder = "Digite seu Telefone";

        //Criar o input para confirmar senha
    const confSenha = document.createElement('input');
    confSenha.type = 'password';
    confSenha.placeholder = "Confirme sua senha";


    

    /*Para adicionar input nome ao contentForm, localizo onde está input email pois
    quero necessariamente adicionar anteriormente a ele */
    const inputEmail = formulario.querySelector('input[type="email"]');

    const inputSenha = formulario.querySelector('input[type="password"]');


    contentForm.insertBefore(InputNome, contentForm.children[0]);
    contentForm.insertBefore(InputCPF,contentForm.children[1]);
    contentForm.insertBefore(inputTelefone, contentForm.children[2]);
    contentForm.insertBefore(confSenha, contentForm.children[5]);


    /*Adicionar confSenha como "child" de form que já contém
        4 elementos: input nome[0] recém adicionado, input email[1],
        input password[2], button btn[3], ao adicionar confSenha antes de btn[3],
        portanto utilizar insertBefore() e identificar a posição de btn[3] como uma
        "child" do elemento pai form
    */

    const btnRegister = formulario.querySelector('button');
    btnRegister.textContent = "Criar conta";

    //monitora o clique no botao para acionar um evento de submeter os dados for
    contentForm.addEventListener("submit", async (e) => {
        e.preventDefault();
        const nome = InputNome.value.trim();
        const cpf = InputCPF.value.trim();
        const telefone = inputTelefone.value.trim();
        const email = inputEmail.value.trim();
        const senha = inputSenha.value.trim();

        try{
            const result = createRequest(nome, cpf, telefone, email, senha);
            //amanha sera aqui que salvaremos o token assim que
            //saveToken(result.token);
            //window.localion.pathname = "/meu site/home";
        }
        catch{
            console.log("Erro inesperado!");
        }
    });

}