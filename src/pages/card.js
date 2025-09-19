import Navbar from "../components/Navbar";

export default function renderCartPage(){
    //navBar
    const nav = document.getElementById('navBar');
    nav.innerHTML = '';
    const navBar = Navbar();
    nav.appendChild(navBar);

    //root (corpo da pagina)
    const DivRoot = document.getElementById('root');
    DivRoot.innerHTML = '';

    //footer
}