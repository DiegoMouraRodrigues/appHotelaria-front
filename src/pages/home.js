import Hero from "../components/Hero.js";
import Navbar from "../components/Navbar.js";
import Footer from "../components/footer.js";
import roomCard from "../components/roomCard.js";
import dateSelector from "../components/dateSelector.js";


export default function renderCarroselPage() {
    
    const DivRoot = document.getElementById('root');
    DivRoot.innerHTML = '';

    const nav = document.getElementById('navbar');
    nav.innerHTML = '';

    const navbar = Navbar();
    nav.appendChild(navbar);

    // const selector = dateSelector();
    // DivRoot.appendChild(selector);

    const hero = Hero();
    DivRoot.appendChild(hero);

    //grupo para incorporar cada div de cada cartd, para aplicar display-flex
    const cardGroup = document.createElement('div');
    cardGroup.innerHTML = '';
    cardGroup.className = 'cards';

    for(var i = 0; i < 3; i++){
        const cards = roomCard();
        cardGroup.appendChild(cards);
    }

    DivRoot.appendChild(cardGroup);
    
 
    const fot = document.getElementById('footer');
    fot.innerHTML = '';

    const footer = Footer();
    fot.appendChild(footer);








    



}