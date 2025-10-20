/* 
requisito: usuario loga > filta quartos em um intervalo de tempo
(data de check-in ate check-out) > vclica em quarto para reserva-lo
> abre um peddido > quarto que clicou para reservar passa a fazer
parte desse pedido > usuario segue navegando > pode fazer mais reservas
no memso pedido > finaliza o pedido

*/

const key = "hotel_cart";
export function setcart(){
    localStorage.setItem(key, JSON.stringify(cart));
}

export function getCArt(){
    try{
        const raw = localStorage.getItem(key);
        return raw ? JSON.parse(raw) : {status: "draft", items:[]};
    } catch (error) {
        return {status: "draft", items: []};
    }
}

export function addItemToCart(items){
    const cart = getCArt();
    cart.items.push(items);
    setcart(cart);
    return cart;
}

export function removeItemFromHotel_cart(i){
    const hotel_cart = getCArt();
    hotel_cart.items.splice(i, 1);
    setcart(hotel_cart);
    return hotel_cart;
}

export function clearHotel_Cart(){
    setcart({
        status: "draft",
        items: {}
    });
}

export function getTotalsItems(){
    const {items} = getCArt();
    const total = items.reduce((acc, it) =>
    acc + Number(it.subtotal || 0), 0
    );
    return{
        toal,
        qtde_items: items.length
    }

}