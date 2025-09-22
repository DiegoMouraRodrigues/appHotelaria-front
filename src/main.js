import renderLoginPage from "./pages/login.js";
import renderRegisterPage from "./pages/register.js";
import renderCarroselPage from "./pages/home.js";
import renderCartPage from "./pages/card.js";

//Configuraçao de rotas mapeadas
const routes = {
   "/login": renderLoginPage,
   "/register": renderRegisterPage,
   "/home": renderCarroselPage,
   "/card": renderCartPage
};

//Obtém o caminho atual a partir do nome
function getPath() {
   //exemplo: (ex. "/login")
   const url = (location.pathname || "").replace("/estudo_diegoM/", "/").trim();
   console.log(url);
   //retorna url se começar com "/", se não, retorna "/home" como padrão
   return url && url.startsWith("/") ? url : "/home";         
}

//Decide o que renderizar com base na rota atual
function renderRoutes() {
   const url = getPath();  //Lê a rota atual, ex. "/register"
   const render = routes[url] || routes["/home"]; //Busca esta rota no mapa
   render(); //Executa a função de render na página atual
}

//Renderizacao
document.addEventListener('DOMContentLoaded', renderRoutes);