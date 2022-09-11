<?php

namespace Rob\DesignPatterns;

class FlyWithWings implements FlyBehavior {
    public function fly(): void {
        echo "I'm flying!\n";
    }
}