<?php

//interfaz que va contener los objetos que voy a decorar
interface Coffee {
    public function cost();
    public function description();
}

//objetos que voy a decorar
class SimpleCoffee implements Coffee {
    public function cost() {
        return 5;
    }

    public function description() {
        return "Cafe simple";
    }
}

class AmericanoCoffee implements Coffee {
    public function cost() {
        return 7;
    }

    public function description() {
        return "Cafe Americano";
    }
}

//decorador principal
abstract class CoffeeDecorator implements Coffee{
    protected Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function cost()
    {
        return $this->coffee->cost(); //costo del cafe simple (5)
    }

    public function description()
    {
        return $this->coffee->description(); //descripcion del cafe simple
    }
}

//decoradores
class MilkDecorator extends CoffeeDecorator {
    //sobreescribimos
    public function cost()
    {
        return $this->coffee->cost() + 0.50;
    }

    public function description()
    {
        return $this->coffee->description() . " con leche";
    }
}

class ChocolateDecorator extends CoffeeDecorator {
    public function cost()
    {
        return $this->coffee->cost() + 1.00;
    }

    public function description()
    {
        return $this->coffee->description() . " con chocolate";
    }
}

//decorador extra


//haciendo el cafe
$cafesito1 = new SimpleCoffee();
//crear decorador
$cafesito1 = new MilkDecorator($cafesito1); //interactua el decorador principal, hija

echo $cafesito1->description() . " cuesta $" . $cafesito1->cost() . PHP_EOL;

echo "<br>";
$cafesito2 = new SimpleCoffee();
$cafesito2 = new MilkDecorator($cafesito2); //contructor del padre
$cafesito2 = new ChocolateDecorator($cafesito2); //contructor del padre
echo $cafesito2->description() . " cuesta $" . $cafesito2->cost() . PHP_EOL;

echo "<br>";
$cafesito3 = new SimpleCoffee();
echo $cafesito3->description() . " cuesta $" . $cafesito3->cost() . PHP_EOL;