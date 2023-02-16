<?php
require_once('ShopProduct.php');
require_once('ShopProductWriter.php');

$product = new ShopProduct(
    "Собачье сердце",
    "Михаил",
    "Булгаков",
    20
);

$write = new ShopProductWriter();
$write->write($product);



