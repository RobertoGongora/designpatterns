<?php

namespace Rob\DesignPatterns;

abstract class Duck {
    public FlyBehavior $flyBehavior;
    public QuackBehavior $quackBehavior;

    public function __construct() {

    }

    public abstract function display();

    public function performFly(): void {
        $this->flyBehavior->fly();
    }

    public function performQuack(): void {
        $this->quackBehavior->quack();
    }

    public function swim(): void {
        echo "All ducks float, even decoys!";
    }

    public function setFlyBehavior(FlyBehavior $behavior): void {
        $this->flyBehavior = $behavior;
    }

    public function setQuackBehavior(QuackBehavior $behavior): void {
        $this->quackBehavior = $behavior;
    }
}