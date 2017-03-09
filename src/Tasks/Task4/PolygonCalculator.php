<?php

namespace Tasks\Task4;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Tasks\Task4\Shapes\Circle;
use Tasks\Task4\Shapes\RegularPentagon;
use Tasks\Task4\Shapes\RegularTriangle;
use Tasks\Task4\Shapes\Square;

class PolygonCalculator {

    const TYPE_CIRCLE = 'circle';
    const TYPE_SQUARE = 'square';
    const TYPE_TRIANGLE = 'triangle';
    const TYPE_PENTAGON = 'pentagon';

    /**
     * The basic function for outputting the result of the task.
     *
     * @param $type
     * @param $side
     * @return string
     */
    public function parseItem($type, $side) {

        $instance = $this->getInstance($type);
        $instance->setSide($side);

        $perimeter = $instance->getPerimeter();
        $area      = $instance->getArea();

        return $this->formatItem($type, $side, $perimeter, $area);
    }

    /**
     * A function to format the result into the required format.
     *
     * @param $type - One of the allowed types we have
     * @param $side - The side (as passed in the CSV).
     * @param $perimeter - The perimeter.
     * @param $area - The area surface.
     *
     * @return string - The properly formatted result.
     */
    private function formatItem($type, $side, $perimeter, $area) {
        $area = $this->formatNumber($area);
        $perimeter = $this->formatNumber($perimeter);

        if ($type == self::TYPE_CIRCLE) {
            $sideName = "radius";
        }else {
            $sideName = "side length";
        }

        return "A {$type} with {$sideName} {$side} u has a perimeter of {$perimeter} u and an area of {$area} u^2";
    }

    /**
     * A function to perform basic number-formatting on the numbers.
     * Right now it does:
     *      - Add trailing zeros (in case of floats like 5.1)
     *
     * @param $num
     * @return float|string
     */
    public function formatNumber($num) {
        $num = round($num, 2);

        //Add the trailing 0 if needed:
        if (round($num,1) == $num && strpos($num, '.') !== false) {
            $num .= '0';
         }
         return (string)$num;
    }

    /**
     * Instantiates the corresponding shape instance by the provided type.
     *
     * @param $type
     * @throws InvalidArgumentException - In case the type is not one of the available ones.
     * @return Circle|RegularPentagon|RegularTriangle|Square
     */
    private function getInstance($type) {

        switch($type) {
            case self::TYPE_CIRCLE:
                return new Circle();
            break;
            case self::TYPE_SQUARE:
                return new Square();
            break;
            case self::TYPE_TRIANGLE:
                return new RegularTriangle();
            break;
            case self::TYPE_PENTAGON:
                return new RegularPentagon();
            break;
        }

        throw new \InvalidArgumentException('Unknown type'.$type);
    }
}

