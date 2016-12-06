<?php

namespace Enables\Task4;

class RegularPentagon extends RegularPolygonBase implements RegularShapeInterface {

    public function getNumberOfSides()
    {
        return 5;
    }

    public function getAreaCoefficient() {
        return (sqrt(5*(5+2*sqrt(5)))/4);
    }

}

