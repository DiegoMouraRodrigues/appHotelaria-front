export default function dateSelector(){
const divDate = document.createElement('div');
divDate.className = 'divDate';

const dateCheckIn = document.createElement('input');
dateCheckIn.type = 'date';
dateCheckIn.className = 'card p-3 m-0 shadow-lg';

const dateCheckInOut = document.createElement('input');
dateCheckInOut.type = 'date';
dateCheckInOut.className = 'card p-3 m-0 shadow-lg ';

const guestAmount = document.createElement('select');
guestAmount.className = 'card p-3 shadow-lg';
guestAmount.innerHTML = 
`
<option value="">Quantas Pessoas?</option>
<option value="1">1 pessoa</option>
<option value="2">2 pessoas</option>
<option value="3">3 pessoas</option>
<option value="4">4 pessoas</option>
<option value="5">5 ou mais pessoas</option>
`;

const btnSearchRoom = document.createElement('button');
btnSearchRoom.type = 'submit';
btnSearchRoom.textContent = 'pesquisar';
btnSearchRoom.className = 'btn btn-primary';


divDate.appendChild(dateCheckIn);
divDate.appendChild(dateCheckInOut);
divDate.appendChild(guestAmount);
divDate.appendChild(btnSearchRoom);

return divDate;

}