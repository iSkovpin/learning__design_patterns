<?php

namespace app\abstractFactory\factory;

use app\abstractFactory\ingredient\FreshClams;
use app\abstractFactory\ingredient\Garlic;
use app\abstractFactory\ingredient\ICheese;
use app\abstractFactory\ingredient\IClam;
use app\abstractFactory\ingredient\IDough;
use app\abstractFactory\ingredient\IPepperoni;
use app\abstractFactory\ingredient\ISauce;
use app\abstractFactory\ingredient\MarinaraSauce;
use app\abstractFactory\ingredient\Mushroom;
use app\abstractFactory\ingredient\Onion;
use app\abstractFactory\ingredient\RedPepper;
use app\abstractFactory\ingredient\RegianoCheese;
use app\abstractFactory\ingredient\SlicedPepperoni;
use app\abstractFactory\ingredient\ThinCrustDough;

/**
 * Ingredients factory for New York.
 */
class NYPizzaIngredientsFactory extends PizzaIngredientsFactory
{
    public function createDough(): IDough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): ISauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): ICheese
    {
        return new RegianoCheese();
    }

    public function createVeggies(): iterable
    {
        return [new Garlic(), new Onion(), new Mushroom(), new RedPepper()];
    }

    public function createPepperoni(): IPepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): IClam
    {
        return new FreshClams();
    }
}
