import Hero from "../components/Hero.js";
import Navbar from "../components/Navbar.js";
import Footer from "../components/footer.js";
import roomCard from "../components/roomCard.js";
import dateSelector from "../components/dateSelector.js";
import { listAvailableRoomsRequest } from "../api/quartosApi.js";


export default function renderCarroselPage() {
    
    const DivRoot = document.getElementById('root');
    DivRoot.innerHTML = '';

    const nav = document.getElementById('navbar');
    nav.innerHTML = '';

    const navbar = Navbar();
    nav.appendChild(navbar);

    const hero = Hero();
    DivRoot.appendChild(hero);
    
    const datePesquisar = dateSelector();
    DivRoot.appendChild(datePesquisar);

    const btnSearchRoom = datePesquisar.querySelector('button');
    btnSearchRoom.addEventListener("click", async(e) =>{
      e.preventDefault();

      const dataInicio = "2025-09-25";
      const dataFim = "2025-09-28";
      const qtd = 2;

      try{
        const quartos = listAvailableRoomsRequest({dataInicio, dataFim, qtd});
        //apos o intervalo preencher as info dos quartos nos cards ou avisar ao cliente
        //que nao ha mais quarto disp
      }
      catch(erro){
        console.log(erro);
      }

    });

    //grupo para incorporar cada div de cada cartd, para aplicar display-flex
    const cardGroup = document.createElement('div');
    cardGroup.innerHTML = '';
    cardGroup.className = 'cards';

   for (let i = 0; i < 3; i++) {
    const card = roomCard(i); 
  cardGroup.appendChild(card);
}

    DivRoot.appendChild(cardGroup);

    

    const fot = document.getElementById('footer');
    fot.innerHTML = '';

    const footer = Footer();
    fot.appendChild(footer);








    



}