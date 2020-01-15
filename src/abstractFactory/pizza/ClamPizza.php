<?php

namespace app\abstractFactory\pizza;

class ClamPizza extends Pizza
{
    public function prepare(): void
    {
        echo 'Preparing ' . $this->getName() . "\n";
        $this->dough = $this->ingredientsFactory->createDough();
        $this->sauce = $this->ingredientsFactory->createSauce();
        $this->cheese = $this->ingredientsFactory->createCheese();
        $this->clam = $this->ingredientsFactory->createClam();
    }
}
