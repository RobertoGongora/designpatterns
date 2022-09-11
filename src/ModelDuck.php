<?php

namespace Rob\DesignPatterns;

class ModelDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quacke();
    }

    public function display()
    {
        echo "I'm a model duck.";
    }
}