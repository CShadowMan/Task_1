<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <h1>Best sellers</h1>
    <div class="row resources ">
     <div class="container" id="resource-slider">
     <button class='arrow prev'><img src="images/prev.svg" alt="prev"></button>
    <button class='arrow next'><img src="images/next.svg" alt="next"></button>
    </div>
         <div class="resource-slider-frame">

         <div class="resource-slider-item">
        <div class="resource-slider-inset">
 <div class="resource">
            <img src="images/p/1.jpg" alt="1jpg">
            <footer class="hmt small">Cena</footer>
        </div>
        </div>
        </div>
         <div class="resource-slider-item">
        <div class="resource-slider-inset">
        <div class="resource">
           <img src="images/p/2.jpg" alt="2jpg">
            <footer class="hmt small">cena</footer>
        </div>
        </div>
        </div>
         <div class="resource-slider-item">
        <div class="resource-slider-inset">
    <div class="resource">
           <img src="images/p/3.jpg" alt="3jpg">
            <footer class="hmt small">cena</footer>
        </div>
        </div>
        </div>
         <div class="resource-slider-item">
        <div class="resource-slider-inset">
    <div class="resource">
           <img src="images/p/4.jpg" alt="4jpg">
            <footer class="hmt small">cena</footer>
        </div>
        </div>
        </div>
         <div class="resource-slider-item">
        <div class="resource-slider-inset">
    <div class="resource">
           <img src="images/p/5.jpg" alt="5jpg">
            <footer class="hmt small">cena</footer>
        </div>
        </div>
        </div>
         <div class="resource-slider-item">
        <div class="resource-slider-inset">
    <div class="resource">
           <img src="images/p/6.jpg" alt="6jpg">
            <footer class="hmt small">cena</footer>
        </div>
        </div>
        </div>
        </div>
        </div>
    
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
