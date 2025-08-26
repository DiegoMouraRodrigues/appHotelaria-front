import hero from "../components/heroBar.js";
import naveBar from "../components/Navbar.js";


export default function renderCarroselPage() { 
    const nav = document.getElementById('navBar');
    nav.innerHTML = ''; 
    
    const naveBar = naveBar();
    nav.appendChild(naveBar);

    const divRoot = document.getElementById('root');
    divRoot.innerHTML = '';

    const hero = hero(hero);
}
