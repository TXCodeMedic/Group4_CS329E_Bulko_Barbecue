<?php

$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$address = $_POST['address'];
$venueInformation = $_POST['venueInformation'];
$potatoSkinOrder = $_POST['potatoSkinOrder'];
$jalapenoPoppersOrder = $_POST['jalapenoPoppersOrder'];
$brisketOrder = $_POST['brisketOrder'];
$sausageOrder = $_POST['sausageOrder'];
$ribsOrder = $_POST['ribsOrder'];
$macAndCheeseOrder = $_POST['macAndCheeseOrder'];
$greenBeansOrder = $_POST['greenBeansOrder'];
$grilledCornOrder = $_POST['grilledCornOrder'];
$cost_pre_tax = 0;
$totalCost = 0;
$orderDate = ($month . ' ' .  $day . ' ' . $year );

echo 'year: ' .  $year . '<br>';
echo 'Thank you for the order!' . '<br>' . 'Here is a reciept!' . '<br>';

echo ('<h1>' .  'Order Summary' . '</h1>' );
echo '<br>';
echo ('Date of order: ' . $orderDate . '<br>' );
echo ('Address: ' . $address . '<br>');
echo ('Type of Venue: ' . $venueInformation . '<br>');
echo ('_____________________________________________________' . '<br>');
if (intval($potatoSkinOrder) >= 1){
	echo ('Num. of Potato Skins Ordered: ' . $potatoSkinOrder . '<br>');
	$cost_pre_tax += (intval($potatoSkinOrder) * 8);
}
if (intval($jalapenoPoppersOrder) >= 1){
	echo ('Num. of Jalapeno Poppers Ordered: ' . $jalapenoPoppersOrder . '<br>');
	$cost_pre_tax += (intval($jalapenoPoppersOrder) * 7.5);
}
if (intval($brisketOrder) >= 1){
	echo ('Num. of Brisket Ordered: ' . $brisketOrder . '<br>');
	$cost_pre_tax += (intval($brisketOrder) * 15);
}
if (intval($sausageOrder) >= 1){
	echo ('Num. of Sausages Ordered: ' . $sausagesOrder . '<br>');
	$cost_pre_tax += (intval($sausageOrder) * 12);
}
if (intval($ribsOrder) >= 1){
	echo ('Num. of Beef Ribs Ordered: ' . $ribOrder . '<br>');
	$cost_pre_tax += (intval($ribsOrder) * 20);
}
if (intval($macAndCheeseOrder) >= 1){
	echo ('Num. of Mac & Cheese Ordered: ' . $macAndCheeseOrder . '<br>');
	$cost_pre_tax += (intval($macAndCheeseOrder) * 6);
}
if (intval($greenBeansOrder) >= 1){
	echo ('Num. of Green Beans Ordered: ' . $greenBeansOrder . '<br>');
	$cost_pre_tax += (intval($greenBeansOrder) * 5);
}
if (intval($grilledCornOrder) >= 1){
	echo ('Num. of Grilled Corn Ordered: ' . $grilledCornOrder . '<br>');
	$cost_pre_tax += (intval($grilledCornOrder) * 5);
}
echo '_____________________________________________________' . '<br>' ;

$tax =($cost_pre_tax * (6.25/100));
$totalCost = ($cost_pre_tax + $tax);
echo 'Cost before taxes: ' . $cost_pre_tax . '<br>';
echo 'Taxes: ' . number_format((float)$tax,2,'.','')  . '<br>';
echo 'Total Cost: ' . number_format((float)$totalCost,2, '.', '');
