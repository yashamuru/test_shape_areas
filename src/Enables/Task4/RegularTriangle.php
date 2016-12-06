<?php

namespace Enables\Task4;

class RegularTriangle extends RegularShapeBase implements RegularShapeInterface {

    public function getArea() {
        return sqrt(3)*($this->side**2)/4;
    }

    public function getPerimeter() {
        return 3*$this->side;
    }
}

