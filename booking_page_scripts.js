//------------------------------------------------------------------------------------------------
//                                      Booking Page Functions
//                                           Main Functions
function checkTextEntries(address, venueInformation) {
 if (address == '') {
  return false
 }
 if (venueInformation == '') {
  return false
 }
 return true
}

function checkItems(potatoSkinOrder, jalapenoPoppersOrder, brisketOrder, ribsOrder, sausageOrder, macAndCheeseOrder, greenBeansOrder, grilledCornOrder) {
 if (potatoSkinOrder < 0) {
  return false
 }
 if (jalapenoPoppersOrder < 0) {
  return false
 }
 if (brisketOrder < 0) {
  return false
 }
 if (ribsOrder < 0) {
  return false
 }
 if (sausageOrder < 0) {
  return false
 }
 if (macAndCheeseOrder < 0) {
  return false
 }
 if (greenBeansOrder < 0) {
  return false
 }
 if (grilledCornOrder < 0) {
  return false
 }
 return true
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
// ----------------------------------------------------------------------------------------------------------------------
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
// ----------------------------------------------------------------------------------------------------------------------------
//                                     Event Listeners
// Calculating Cost of Item Event Listener
var calculateOrder = document.getElementById('calculate')

calculateOrder.addEventListener('click', event => {
 var potatoSkinOrder = document.getElementById('potatoSkinOrder')
 var jalapenoPoppersOrder = document.getElementById('jalapenoPoppersOrder')
 var brisketOrder = document.getElementById('brisketOrder')
 var ribsOrder = document.getElementById('ribsOrder')
 var sausageOrder = document.getElementById('sausageOrder')
 var macAndCheeseOrder = document.getElementById('macAndCheeseOrder')
 var greenBeansOrder = document.getElementById('greenBeansOrder')
 var grilledCornOrder = document.getElementById('grilledCornOrder')

 var potatoSkinOrder = potatoSkinOrder.value
 var jalapenoPoppersOrder = jalapenoPoppersOrder.value
 var brisketOrder = brisketOrder.value
 var ribsOrder = ribsOrder.value
 var sausageOrder = sausageOrder.value
 var macAndCheeseOrder = macAndCheeseOrder.value
 var greenBeansOrder = greenBeansOrder.value
 var grilledCornOrder = grilledCornOrder.value

 if (checkItems(potatoSkinOrder, jalapenoPoppersOrder, brisketOrder, ribsOrder, sausageOrder, macAndCheeseOrder, greenBeansOrder, grilledCornOrder) == true) {
  calculateTotalCost(potatoSkinOrder, jalapenoPoppersOrder, brisketOrder, ribsOrder, sausageOrder, macAndCheeseOrder, greenBeansOrder, grilledCornOrder)
 }
 else {
  window.alert("Make sure there are no negative values in the order form")
 }
})

// Submitting the Order Event Listener
var submitOrder = document.getElementById('enter')

submitOrder.addEventListener('click', event => {
 var address = document.getElementById('address')
 var venueInformation = document.getElementById('venueInformation')
 var specialInstructions = document.getElementById('specialInstructions')
 var potatoSkinOrder = document.getElementById('potatoSkinOrder')
 var jalapenoPoppersOrder = document.getElementById('jalapenoPoppersOrder')
 var brisketOrder = document.getElementById('brisketOrder')
 var ribsOrder = document.getElementById('ribsOrder')
 var sausageOrder = document.getElementById('sausageOrder')
 var macAndCheeseOrder = document.getElementById('macAndCheeseOrder')
 var greenBeansOrder = document.getElementById('greenBeansOrder')
 var grilledCornOrder = document.getElementById('grilledCornOrder')

 var address = address.value
 var venueInformation = venueInformation.value
 var specialInstructions = specialInstructions.value
 var potatoSkinOrder = potatoSkinOrder.value
 var jalapenoPoppersOrder = jalapenoPoppersOrder.value
 var brisketOrder = brisketOrder.value
 var ribsOrder = ribsOrder.value
 var sausageOrder = sausageOrder.value
 var macAndCheeseOrder = macAndCheeseOrder.value
 var greenBeansOrder = greenBeansOrder.value
 var grilledCornOrder = grilledCornOrder.value

 if (checkItems(potatoSkinOrder, jalapenoPoppersOrder, brisketOrder, ribsOrder, sausageOrder, macAndCheeseOrder, greenBeansOrder, grilledCornOrder) == true) {
  if (checkTextEntries(address, venueInformation) == true) {
   submitOrder.type = 'submit'
   submitOrder.submit
  }
  else {
   window.alert('Fill out Address and Venue Information')
  }
 }
 else {
  window.alert('There can be no negative values in the Order')
 }
})
