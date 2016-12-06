<?php

namespace Enables\Task4\Shapes;

class Square extends RegularPolygonBase {

    public function getNumberOfSides() {
        return 4;
    }

    public function getAreaCoefficient() {
        return 1;
    }

}

