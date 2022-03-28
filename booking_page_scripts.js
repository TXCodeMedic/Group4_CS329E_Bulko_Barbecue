//------------------------------------------------------------------------------------------------
//                                      Booking Page Functions
//                                           Main Functions
function checkForm() {

}

function calculateTotalCost(potatoSkinOrder, jalapenoPoppersOrder, brisketOrder, ribsOrder, sausageOrder, macAndCheeseOrder, greenBeansOrder, grilledCornOrder) {
 var preTaxSum = 0;
 preTaxSum += potatoSkinCalc(potatoSkinOrder);
 preTaxSum += jalapenoPoppersCalc(jalapenoPoppersOrder);
 preTaxSum += brisketCalc(brisketOrder);
 preTaxSum += beefRibsCalc(ribsOrder);
 preTaxSum += sausagesCalc(sausageOrder);
 preTaxSum += macAndCheeseCalc(macAndCheeseOrder);
 preTaxSum += greenBeansCalc(greenBeansOrder);
 preTaxSum += grilledCornCalc(grilledCornOrder);
 var plusTax = parseFloat(preTaxSum * (6.25 / 100)).toFixed(2);
 var totalSum = parseFloat(parseFloat(preTaxSum) + parseFloat(plusTax)).toFixed(2);
 printResults(preTaxSum, plusTax, totalSum)
}
//                                  Helper Functions
function potatoSkinCalc(potatoSkinOrder) {
 return parseFloat(potatoSkinOrder * 8.00);
}
function jalapenoPoppersCalc(jalapenoPoppersOrder) {
 return parseFloat(jalapenoPoppersOrder * 7.50);
}
function brisketCalc(brisketOrder) {
 return parseFloat(brisketOrder * 15.00);
}
function beefRibsCalc(ribsOrder) {
 return parseFloat(ribsOrder * 20.00);
}
function sausagesCalc(sausageOrder) {
 return parseFloat(sausageOrder * 12.00);
}
function macAndCheeseCalc(macAndCheeseOrder) {
 return parseFloat(macAndCheeseOrder * 6.00);
}
function greenBeansCalc(greenBeansOrder) {
 return parseFloat(greenBeansOrder * 5.00);
}
function grilledCornCalc(grilledCornOrder) {
 return parseFloat(grilledCornOrder * 5.00);
}
function printResults(preTaxSum, plusTax, totalSum) {
 var preTaxSumOutput = document.getElementById('preTaxSum')
 var plusTaxOutput = document.getElementById('plusTax')
 var totalSumOutput = document.getElementById('totalSum')

 preTaxSumOutput.innerHTML = ('$' + preTaxSum)
 plusTaxOutput.innerHTML = ('$' + plusTax)
 totalSumOutput.innerHTML = ('$' + totalSum)
}
function verifyInputs() {

}
//                                     Event Listeners
var orderTally = document.getElementById('orderForm');
orderTally.addEventListener('submit', (event) => {
 event.preventDefault();

 var potatoSkinOrder = document.getElementById('potatoSkinOrder');
 var jalapenoPoppersOrder = document.getElementById('jalapenoPoppersOrder');
 var brisketOrder = document.getElementById('brisketOrder');
 var ribsOrder = document.getElementById('ribsOrder');
 var sausageOrder = document.getElementById('sausageOrder');
 var macAndCheeseOrder = document.getElementById('macAndCheeseOrder');
 var greenBeansOrder = document.getElementById('greenBeansOrder');
 var grilledCornOrder = document.getElementById('grilledCornOrder');

 potatoSkinOrder = potatoSkinOrder.value
 jalapenoPoppersOrder = jalapenoPoppersOrder.value
 brisketOrder = brisketOrder.value
 ribsOrder = ribsOrder.value
 sausageOrder = sausageOrder.value
 macAndCheeseOrder = macAndCheeseOrder.value
 greenBeansOrder = greenBeansOrder.value
 grilledCornOrder = grilledCornOrder.value

 // ADD IN FURTHER CODE TO LOOK AT DATE/TIME AVAILABILITY AND CHECK FORM BEFORE CALCULATING COST
 calculateTotalCost(potatoSkinOrder, jalapenoPoppersOrder, brisketOrder, ribsOrder, sausageOrder, macAndCheeseOrder, greenBeansOrder, grilledCornOrder);
 //if (checkForm == true) {
 // calculateTotalCost(potatoSkinOrder, jalapenoPoppersOrder, brisketOrder, ribsOrder, sausageOrder, macAndCheeseOrder, greenBeansOrder, grilledCornOrder);
 //}
 //else if (checkForm == false) {
 //return window.alert('Fill in the form')
})
