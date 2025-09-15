export default function Hero(){
    
    const containerHero = document.createElement('div');
    containerHero.className = 'hero w-100 d-flex justify-content-center';
    containerHero.innerHTML =
    `
    <div class = "hero-flame w-100">
    <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner shadow">

        <div class="carousel-item active">
            <img class="d-block w-100" src="public/assets/images/hotel_frente.jpg" alt="hotel">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="public/assets/images/hall_de_entrada.jpg" alt="entrada">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="public/assets/images/quartos.jpg" alt="quarto">
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
    </div>
    
</div>`
    return containerHero;
}