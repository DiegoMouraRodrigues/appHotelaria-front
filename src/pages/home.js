import Hero from "../components/Hero.js";
import Navbar from "../components/Navbar.js";
import Footer from "../components/footer.js";

export default function renderCarroselPage() {
    const nav = document.getElementById('navbar');
    nav.innerHTML = '';

    const navbar = Navbar();
    nav.appendChild(navbar);

        const fot = document.getElementById('footer');
        fot.innerHTML = '';
    
        const footer = Footer();
        fot.appendChild(footer);

    const DivRoot = document.getElementById('root');
    DivRoot.innerHTML = '';

    const hero = Hero();
    DivRoot.appendChild(hero);

}