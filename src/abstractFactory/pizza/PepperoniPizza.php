<?php

namespace app\abstractFactory\pizza;

use app\abstractFactory\ingredient\IDough;

class PepperoniPizza extends Pizza
{
    public function prepare(): void
    {
        echo 'Preparing ' . $this->getName() . "\n";
        $this->dough = $this->ingredientsFactory->createDough();
        $this->sauce = $this->ingredientsFactory->createSauce();
        $this->cheese = $this->ingredientsFactory->createCheese();
        $this->pepperoni = $this->ingredientsFactory->createPepperoni();
    }
}
