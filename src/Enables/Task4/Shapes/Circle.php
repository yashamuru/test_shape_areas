<?php

namespace Enables\Task4\Shapes;

class Circle implements RegularShapeInterface {

    protected $radius;

    //For the sake of simplicity we're using setSide everywhere and it's added into the interface.
    //For the Circle it's just an alias to setRadius
    public function setSide($side) {
        $this->setRadius($side);
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pow($this->radius,2)*pi();
    }

    public function getPerimeter() {
        return 2*pi()*$this->radius;
    }
}

