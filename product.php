<?php

// Module 4 Assignment

class Product
{
    // TODO: Add properties 
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price)
    {
        // TODO: Initialize properties 
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // TODO: Add getFormattedPrice method
    private function getFormattedPrice()
    {
        $formattedPrice = number_format($this->price, 2, '.', ',');
        // $formattedPrice = sprintf("%.2f", $this->price);
        return $formattedPrice;
    }

    // TODO: Add showDetails method 
    public function showDetails()
    {
        echo "- ID: " . $this->id . "\n";
        echo "- Name: " . $this->name . "\n";
        echo "- Price: $" . $this->getFormattedPrice();
    }
}

// Test the Product class 
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
