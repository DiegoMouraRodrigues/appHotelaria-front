import Hero from "../components/Hero.js";
import Navbar from "../components/Navbar.js";

export default function renderCarroselPage() {
    const nav = document.getElementById('navbar');
    nav.innerHTML = '';

    const navbar = Navbar();
    nav.appendChild(navbar);

    const DivRoot = document.getElementById('root');
    DivRoot.innerHTML = '';

    const hero = Hero();
    DivRoot.appendChild(hero);

}