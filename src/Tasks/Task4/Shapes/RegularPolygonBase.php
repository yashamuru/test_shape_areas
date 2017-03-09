<?php

namespace Tasks\Task4\Shapes;

abstract class RegularPolygonBase implements RegularShapeInterface {

    protected $side;

    public function setSide($side) {
        $this->side = $side;
    }

    public function getPerimeter() {
        return $this->getNumberOfSides()*$this->side;
    }

    public function getArea() {
        return pow($this->side,2)*$this->getAreaCoefficient();
    }

    abstract public function getAreaCoefficient();
    abstract public function getNumberOfSides();
}

