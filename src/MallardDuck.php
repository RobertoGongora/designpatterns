<?php

namespace Rob\DesignPatterns;

class MallardDuck extends Duck {
    public function __construct() {
        $this->quackBehavior = new Quacke();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display(): void {
        echo "I'm a real Mallard Duck!";
    }
}