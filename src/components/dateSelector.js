export default function dateSelector(){
const containerSelector = document.createElement('div');
containerSelector.innerHTML = 
`
<div class="container">
  <form class="row g-2 align-items-center justify-content-center">
  
    <!-- Destino -->
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
        <input type="text" class="form-control" placeholder="Para onde você vai?">
      </div>
    </div>

    <!-- Datas -->
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
        <input type="text" class="form-control" placeholder="20 de set. - 22 de set.">
      </div>
    </div>

    <!-- Viajantes -->
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-text"><i class="bi bi-person"></i></span>
        <input type="text" class="form-control" placeholder="2 viajantes, 1 quarto">
      </div>
    </div>

    <!-- Botão -->
    <div class="col-md-2 d-grid">
      <button class="btn btn-dark" type="submit">Buscar</button>
    </div>
  </form>
</div>
`
return containerSelector;
}