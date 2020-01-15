<?php

namespace app\abstractFactory\pizza;

class VeggiePizza extends Pizza
{
    public function prepare(): void
    {
        echo 'Preparing ' . $this->getName() . "\n";
        $this->dough = $this->ingredientsFactory->createDough();
        $this->sauce = $this->ingredientsFactory->createSauce();
        $this->cheese = $this->ingredientsFactory->createCheese();
        $this->veggies = $this->ingredientsFactory->createVeggies();
    }
}
