<?php

namespace Enables\Task4;


class PolygonCalculator {

    public function parseItem($type, $side) {

        $instance = $this->getInstance($type);
        $instance->setSide($side);

        $perimeter = round($instance->getPerimeter(),2);
        $area      = $this->formatNumber(round($instance->getArea(),2));

        return "A {$type} with side length {$side} u has a perimeter of {$perimeter} u and an area of {$area} u^2";
    }

    public function formatNumber($num) {
        //Add the trailing 0 if needed:
        if (is_int($num)) {
            return $num;
        }else if (round($num,1) == $num) {
            return $num .= 0;
        }else {
            return $num;
        }
    }

    private function getInstance($type) {

        switch($type) {
            case 'circle':
                return new Circle();
            break;
            case 'square':
                return new Square();
            break;
            case 'triangle':
                return new RegularTriangle();
            break;
            case 'pentagon':
                return new RegularPentagon();
            break;
        }

        throw new \InvalidArgumentException('Unknown type'.$type);
    }
}

