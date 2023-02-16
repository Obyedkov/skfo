<?php

class ShopProductWriter
{
    public function write($shopProduct)
    {
        $str = $shopProduct-> title . ": "
            . $shopProduct->getProduct()
            . " (" . $shopProduct->price . ")\n";
        print $str;
    }
}
