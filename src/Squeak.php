<?php

namespace Rob\DesignPatterns;

class Squeak implements QuackBehavior {
    public function quack(): void {
        echo "Squeak\n";
    }
}