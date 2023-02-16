<?php


class ShopProduct
{
    public string $title;
    public string $producerMainName = "";
    public string $producerFirstName = "";
    public float $price = 0;

    public function __construct(string $title, string $producerMainName, string $producerFirstName, float $price)
    {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }

    public function getProduct(): string
    {
        return $this->producerFirstName . " " . $this->producerMainName . " " . $this->title ;
    }
}
