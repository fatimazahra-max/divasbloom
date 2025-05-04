// start product_details page -> increase, decrease items 
var increaseBtn = document.getElementsByClassName('btn-increase');
var decreaseBtn = document.getElementsByClassName('btn-decrease');
var itemsToBuy = document.getElementById('num_of_items');

function increaseValueBtn() {
    let numero = Number(itemsToBuy.value) + 1;
    itemsToBuy.value = numero;
}

function decreaseValueBtn() {

    let numero = Number(itemsToBuy.value) - 1;
    numero = numero < 0 ? 0 : numero;
    itemsToBuy.value = numero;
}

// add event listeners
for (let i = 0; i < increaseBtn.length; i++) {
    increaseBtn[i].addEventListener('click', increaseValueBtn);
}

for (let i = 0; i < decreaseBtn.length; i++) {
    decreaseBtn[i].addEventListener('click', decreaseValueBtn);
}
// end product_details page -> increase, decrease items 
