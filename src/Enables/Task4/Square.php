<?php

namespace Enables\Task4;

class Square extends RegularShapeBase  implements RegularShapeInterface {

    public function getArea() {
        return $this->side**2;
    }

    public function getPerimeter() {
        return $this->side*4;
    }
}

