<?php

require_once 'vendor/autoload.php';

use Rob\DesignPatterns\MallardDuck;
use Rob\DesignPatterns\ModelDuck;
use Rob\DesignPatterns\FlyRocketPowered;
use Rob\DesignPatterns\DuckCall;
use Rob\DesignPatterns\Quacke;
use Rob\DesignPatterns\Squeak;

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();

$call = new DuckCall(new Quacke());
$call->performQuack();
$call->setQuackBehavior(new Squeak());
$call->performQuack();