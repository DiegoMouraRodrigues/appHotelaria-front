export default function (){
    const formulario = document.createElement('form');

    //email
    const email = document.createElement('input');
    email.type = 'email';
    email.placeholder = "digite seu e-mail";
    email.className = "imput-email";
    formulario.appendChild(email);

    //senha
    const senha = document.createElement('input');
    senha.type = 'senha';
    senha.placeholder = "digite sua senha ";
    formulario.appendChild(senha);

    //button de entar
    const entar = document.createElement('button');
    entar.type = 'submit';
    entar.textContent = "Entrar";
    formulario.appendChild(entar);

    return formulario;

     
}


