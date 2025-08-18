export default function (){
    const formulario = document.createElement('form');
    formulario.className = 'd-flex flex-column'; 

    //email
    const email = document.createElement('input');
    email.type = 'email';
    email.placeholder = "digite seu e-mail";
    email.classname = 'imputs';
    formulario.appendChild(email);

    //senha
    const senha = document.createElement('input');
    senha.type = 'senha';
    senha.placeholder = "digite sua senha ";
    senha.className = 'imputs-senha';
    formulario.appendChild(senha);

    //button de entar
    const btnAuth = document.createElement('button');
    btnAuth.type = 'submit';
    btnAuth.classname = 'button-login';
    btnAuth.textContent = "Entrar";
    btnAuth.className = 'btn btn-primary';
    formulario.appendChild(btnAuth);

    return formulario;  
}


