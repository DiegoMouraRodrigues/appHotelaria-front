import Hero from "../components/Hero.js";
import Navbar from "../components/Navbar.js";
import Footer from "../components/footer.js";
import roomCard from "../components/roomCard.js";


export default function renderCarroselPage() {
    
    const DivRoot = document.getElementById('root');
    DivRoot.innerHTML = '';

    const nav = document.getElementById('navbar');
    nav.innerHTML = '';

    const navbar = Navbar();
    nav.appendChild(navbar);

    const hero = Hero();
    DivRoot.appendChild(hero);

    const cards = roomCard();
    DivRoot.appendChild(cards);


    const fot = document.getElementById('footer');
    fot.innerHTML = '';

    const footer = Footer();
    fot.appendChild(footer);








    



}