export default function renderRegisterRoom(){
    const renderRegister = document.createElement('div');
    
    const register = document.createElement('div');
    const nome = document.createElement('imput');
    nome.textContent = 'Nome do quarto';

    const numero = document.createElement('imput');
    numero.textContent = 'Numero do quarto';

    const qtd_cama_casal = document.createElement('imput');
    qtd_cama_casal.number = 'qtd_cama_casal';

    const qtd_cama_solteiro = document.createElement('imput');
    qtd_cama_solteiro.number = 'qtd_cama_solteiro';

    const preco = document.createElement('imput');
    preco.number = 'preço';

    const disponibilidade = document.createElement('imput');
    disponibilidade.radio = 'disponibilidade';

    const imagem = document.createElement('imput');
    imagem.file = 'imagem';
    
}