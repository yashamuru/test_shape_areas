<?php

namespace Enables\Task4\Shapes;

class Circle implements RegularShapeInterface {

    protected $radius;

    //I finally decided to let the Circle having radius instead of side.
    public function setSide($side)
    {
        $this->setRadius($side);
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return ($this->radius**2)*pi();
    }

    public function getPerimeter() {
        return 2*pi()*$this->radius;
    }
}

