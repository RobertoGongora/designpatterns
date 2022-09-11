<?php

namespace Rob\DesignPatterns;

class FlyRocketPowered implements FlyBehavior {
    public function fly(): void
    {
        echo "I'm flying with a rocket!\n";
    }
}