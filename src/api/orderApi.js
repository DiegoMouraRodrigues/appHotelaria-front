export async function finisherOrder(item){
    const url = "api/pedido/reserva";
    const body = {
        /*por enquanto ate termos um front para usuario setar
        front para usuairo setar forma de pagamento que desejar*/
        pagamento: "pix", 
        quartos: items.map(it => (
            {
                id: it.roomID,
                inicio: it.checkin,
                fim: it.checkOut
            }
        ))
    };

const res = await fetch(url,{
       method: "POST",
        headers: {
            "Accept": "application/json",
            "Content-Type": "application/json"
        }
    });
    
    if(!res.ok){
        const message =  'Erro ao enviar pedido: ${res.status}';
        throw new error(message);
    }
    return res.json();
}