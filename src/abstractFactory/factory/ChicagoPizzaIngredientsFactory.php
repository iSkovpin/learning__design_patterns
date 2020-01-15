<?php

namespace app\abstractFactory\factory;

use app\abstractFactory\ingredient\BlackOlives;
use app\abstractFactory\ingredient\EggPlant;
use app\abstractFactory\ingredient\FrozenClams;
use app\abstractFactory\ingredient\ICheese;
use app\abstractFactory\ingredient\IClam;
use app\abstractFactory\ingredient\IDough;
use app\abstractFactory\ingredient\IPepperoni;
use app\abstractFactory\ingredient\ISauce;
use app\abstractFactory\ingredient\MozzarellaCheese;
use app\abstractFactory\ingredient\PlumTomatoSauce;
use app\abstractFactory\ingredient\SlicedPepperoni;
use app\abstractFactory\ingredient\Spinach;
use app\abstractFactory\ingredient\ThickCrustDough;

/**
 * Ingredients factory for Chicago.
 */
class ChicagoPizzaIngredientsFactory extends PizzaIngredientsFactory
{
    public function createDough(): IDough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): ISauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): ICheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): iterable
    {
        return [new BlackOlives(), new Spinach(), new EggPlant()];
    }

    public function createPepperoni(): IPepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): IClam
    {
        return new FrozenClams();
    }
}
