
import Navbar from "../components/Navbar.js";
import footer from "../components/footer.js";
import carrinho from "../components/carrinho.js";


export default function renderCartPage(){
    //navBar
    const nav = document.getElementById('navbar');
    nav.innerHTML = '';

    const navBar = Navbar();
    nav.appendChild(navBar);

    //root (corpo da pagina)
    const DivRoot = document.getElementById('root');
    DivRoot.innerHTML = '';

    const card1 = carrinho();
    DivRoot.appendChild(card1);

    //footer
    const fot = document.getElementById('footer');
    fot.innerHTML = '';

    const footer1 = footer();
    fot.appendChild(footer1);
    
        
        
}