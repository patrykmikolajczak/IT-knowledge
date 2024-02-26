<?php

// Interfejs komponentu bazowego
interface Coffee {
    public function getCost();
    public function getDescription();
}

// Konkretny komponent bazowy
class SimpleCoffee implements Coffee {
    public function getCost() {
        return 10;
    }

    public function getDescription() {
        return "Prosta kawa";
    }
}

// Abstrakcyjny dekorator
abstract class CoffeeDecorator implements Coffee {
    protected $decoratedCoffee;

    public function __construct(Coffee $coffee) {
        $this->decoratedCoffee = $coffee;
    }

    public function getCost() {
        return $this->decoratedCoffee->getCost();
    }

    public function getDescription() {
        return $this->decoratedCoffee->getDescription();
    }
}

// Konkretny dekorator: Mleko
class Milk extends CoffeeDecorator {
    public function __construct(Coffee $coffee) {
        parent::__construct($coffee);
    }

    public function getCost() {
        return $this->decoratedCoffee->getCost() + 5;
    }

    public function getDescription() {
        return $this->decoratedCoffee->getDescription() . ', Mleko';
    }
}

// Konkretny dekorator: Cukier
class Sugar extends CoffeeDecorator {
    public function __construct(Coffee $coffee) {
        parent::__construct($coffee);
    }

    public function getCost() {
        return $this->decoratedCoffee->getCost() + 2;
    }

    public function getDescription() {
        return $this->decoratedCoffee->getDescription() . ', Cukier';
    }
}

// Użycie
$simpleCoffee = new SimpleCoffee();
echo $simpleCoffee->getDescription() . ": $" . $simpleCoffee->getCost() . "<br>";

$milkCoffee = new Milk($simpleCoffee);
echo $milkCoffee->getDescription() . ": $" . $milkCoffee->getCost() . "<br>";

$sugarCoffee = new Sugar($simpleCoffee);
echo $sugarCoffee->getDescription() . ": $" . $sugarCoffee->getCost() . "<br>";

$milkSugarCoffee = new Milk(new Sugar($simpleCoffee));
echo $milkSugarCoffee->getDescription() . ": $" . $milkSugarCoffee->getCost() . "<br>";

?>
