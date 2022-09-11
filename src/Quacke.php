<?php

namespace Rob\DesignPatterns;

class Quacke implements QuackBehavior {
    public function quack(): void {
        echo "Quack\n";
    }
}