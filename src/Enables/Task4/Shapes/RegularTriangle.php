<?php

namespace Enables\Task4\Shapes;

class RegularTriangle extends RegularPolygonBase implements RegularShapeInterface {

    public function getNumberOfSides()
    {
        return 3;
    }

    public function getAreaCoefficient() {
        return (sqrt(3)/4);
    }

}

