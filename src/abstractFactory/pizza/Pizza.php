<?php

namespace app\abstractFactory\pizza;

use app\abstractFactory\factory\PizzaIngredientsFactory;
use app\abstractFactory\ingredient\ICheese;
use app\abstractFactory\ingredient\IClam;
use app\abstractFactory\ingredient\IDough;
use app\abstractFactory\ingredient\IPepperoni;
use app\abstractFactory\ingredient\ISauce;

abstract class Pizza
{
    protected PizzaIngredientsFactory  $ingredientsFactory;
    protected string                   $name    = 'Unknown pizza';
    protected ?IDough                  $dough;
    protected ?ISauce                  $sauce;
    protected iterable                 $veggies = [];
    protected ?ICheese                 $cheese;
    protected ?IPepperoni              $pepperoni;
    protected ?IClam                   $clam;

    abstract public function prepare(): void;

    public function __construct(PizzaIngredientsFactory $ingredientsFactory)
    {
        $this->ingredientsFactory = $ingredientsFactory;
        $this->prepare();
    }

    public function bake(): void
    {
        echo 'Bake for 25 minutes' . "\n";
    }

    public function cut(): void
    {
        echo 'Cutting pizza into slices' . "\n";
    }

    public function box(): void
    {
        echo 'Put pizza into a pretty box' . "\n";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
