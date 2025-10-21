export async function finisherOrder(item){
    const url = "api/pedido/reserva";
    const body = {
     /*por enquanto para conseguimos testar o cliente id sera setado
     no codigo amanha o jeff trataea o token que valida o cliente no back-end,

     /*





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

    let data = null;
    try{
        //retorno em jason() da rerquisição armazenado em data
        data = await response.json();

    }catch{
        data = null;
    }
    if(!data){
        const message =  'Erro ao enviar pedido: ${res.status}';
        return {ok: false, raw: data, message};{
        }
    }
    return{
        ok: true,
        raw: data
    }
}