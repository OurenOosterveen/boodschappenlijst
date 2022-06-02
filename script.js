const productPrices = document.getElementsByClassName("productPrice");
const productQuantities = document.getElementsByClassName("productQuantity");
const productTotals = document.getElementsByClassName("productTotalCost");

Object.entries(productQuantities).forEach(product => {
    product[1].addEventListener('change', (event) => {
        updateTable();
        announceListAltered();
    })
});

updateTable = function(){
    let total = 0;

    for (let i = 0; i < productPrices.length; i++){
        let price = productPrices[i].innerHTML;
        let amount = productQuantities[i].value;
        let subTotal = Number(price * amount).toFixed(2);
        total = Number(total) + Number(subTotal);
        productTotals[i].innerHTML = subTotal;
    }
    document.getElementById("totalCost").innerHTML = Number(total).toFixed(2);
}

updateTable();

announceListAltered = function() {
    console.log('Aantal producten is gewijzigd');
}
