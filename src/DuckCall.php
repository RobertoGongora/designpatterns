<?php

namespace Rob\DesignPatterns;

class DuckCall {
    public QuackBehavior $quackBehavior;

    public function __construct(QuackBehavior $quackBehavior) {
        $this->setQuackBehavior($quackBehavior);
    }

    public function performQuack(): void {
        $this->quackBehavior->quack();
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior) {
        $this->quackBehavior = $quackBehavior;
    }
}