export default function roomCard(){
const containerCard = document.createElement('div');
containerCard.innerHTML =
`
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner shadow">

  <div class="carousel-item active">
    <img class="d-block w-100" src="public/assets/images/imagem_card_1.jpg" alt="hotel">
  </div>

  <div class="carousel-item">
    <img class="d-block w-100" src="public/assets/images/imagem_card_2.jpg" alt="entrada">
  </div>

  <div class="carousel-item">
    <img class="d-block w-100" src="public/assets/images/imagem_card_3.jpg" alt="quarto">
  </div>

  </div>
    
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Reserva</a>
</div>
</div>
`
return containerCard;
}