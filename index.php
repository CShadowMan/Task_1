<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <h1>Best sellers</h1>
     <div class="container" id="resource-slider">
     <button class='arrow prev'><img src="images/prev.svg" alt="prev"></button>
    <button class='arrow next'><img src="images/next.svg" alt="next"></button>
    </div>
    <div class="slider"></div>
</body>
</html>
<?php

require_once('vendor/autoload.php');
require_once('products.php');

$smarty = new Smarty();

$smarty->registerPlugin('function', 'displayPrice', 'display_price');
$smarty->assign([
    'products' => $products
]);
$smarty->display('index.tpl');

function display_price($params, $smarty, $cur = '€')
{
    $price = $params['price'];

    return number_format($price, 2) . '' . $cur;
}
