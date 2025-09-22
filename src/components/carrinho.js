export default function carrinho(){
    const divCard = document.createElement('div');
    divCard.innerHTML = 
    `
   <table class="table table-bordered align-middle">
  <thead class="bg-primary text-white text-center">
    <tr>
      <th scope="col" style="width: 20%;">Quarto</th>
      <th scope="col" style="width: 20%;">Quantas pessoas?</th>
      <th scope="col" style="width: 20%;">Preço da diaria</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td class="text-start">Quarto de luxo</td>
      <td><i class="bi bi-people-fill"></i> 3</td>
      <td><span class="fw-bold">R$ 200,00</span></td>
    </tr>
    <tr>
      <td class="text-start">Quarto de luxo</td>
      <td><i class="bi bi-people-fill"></i> 2</td>
      <td><span class="fw-bold">R$ 150,00</span></td>
    </tr>
    <tr>
      <td class="text-start">Quarto de luxo</td>
      <td><i class="bi bi-people-fill"></i> 1</td>
      <td><span class="fw-bold">R$ 100,00</span></td>
    </tr>
  </tbody>
</table>

<div class="text-end mt-3">
  <button type="button" class="btn btn-primary">
    Reservar agora
  </button>
</div>  
    `
    return divCard;
}