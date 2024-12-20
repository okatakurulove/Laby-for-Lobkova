<?php
class Product {
    private $name;
    private $description;
    private $price;
    private $country;

    public function __construct($name, $description, $price, $country) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->country = $country;
    }

    public function about_product() {
        return "Название: $this->namenОписание: $this->descriptionnЦена: $this->pricenСтрана производства: $this->country";
    }

    public function new_information($name, $description, $country) {
        $this->name = $name;
        $this->description = $description;
        $this->country = $country;
    }

    public function new_cost($price) {
        $this->price = $price;
    }
}
?>