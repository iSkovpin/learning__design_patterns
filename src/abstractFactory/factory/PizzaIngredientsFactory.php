<?php

namespace app\abstractFactory\factory;

use app\abstractFactory\ingredient\ICheese;
use app\abstractFactory\ingredient\IClam;
use app\abstractFactory\ingredient\IDough;
use app\abstractFactory\ingredient\IPepperoni;
use app\abstractFactory\ingredient\ISauce;
use app\abstractFactory\ingredient\IVeggie;

/**
 * Abstract ingredients factory.
 */
abstract class PizzaIngredientsFactory
{
    /**
     * @return IDough
     */
    abstract public function createDough(): IDough;

    /**
     * @return ISauce
     */
    abstract public function createSauce(): ISauce;

    /**
     * @return ICheese
     */
    abstract public function createCheese(): ICheese;

    /**
     * @return IVeggie[]
     */
    abstract public function createVeggies(): iterable;

    /**
     * @return IPepperoni
     */
    abstract public function createPepperoni(): IPepperoni;

    /**
     * @return IClam
     */
    abstract public function createClam(): IClam;
}
