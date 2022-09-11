<?php

namespace Rob\DesignPatterns;

class MuteQuack implements QuackBehavior {
    public function quack(): void {
        echo "<< Silence >>";
    }
}