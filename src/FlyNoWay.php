<?php

namespace Rob\DesignPatterns;

class FlyNoWay implements FlyBehavior {
    public function fly(): void {
        echo "I can't fly.\n";
    }
}