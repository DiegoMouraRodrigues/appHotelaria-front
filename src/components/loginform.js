export default function (){
    const formulario = document.createElement('form');
    formulario.className = 'd-flex flex-colunm';

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
    const entar = document.createElement('button');
    entar.type = 'submit';
    entar.classname = 'button-login';
    entar.textContent = "Entrar";
    entar.className = 'btn btn-primary';
    formulario.appendChild(entar);

    return formulario;

     
}


