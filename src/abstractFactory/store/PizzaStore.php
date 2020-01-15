<?php

namespace app\abstractFactory\store;

use app\abstractFactory\factory\PizzaIngredientsFactory;

abstract class PizzaStore
{
    protected PizzaIngredientsFactory $ingredientsFactory;

    public function __construct(PizzaIngredientsFactory $ingredientsFactory)
    {
        $this->ingredientsFactory = $ingredientsFactory;
    }
}
