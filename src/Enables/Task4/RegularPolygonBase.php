<?php

namespace Enables\Task4;

abstract class RegularPolygonBase implements RegularShapeInterface {

    protected $side;

    public function setSide($side) {
        $this->side = $side;
    }

    public function getPerimeter() {
        return $this->getNumberOfSides()*$this->side;
    }

    public function getArea() {
        return ($this->side**2)*$this->getAreaCoefficient();
    }

    abstract public function getAreaCoefficient();
    abstract public function getNumberOfSides();
}

