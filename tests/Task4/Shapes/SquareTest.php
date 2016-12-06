<?php

namespace Tests\Task4\Shapes;

use PHPUnit\Framework\TestCase;
use Enables\Task4\Shapes\Square;

class SquareTest extends BaseRegularShapeTestCase {

    public function testPerimeter() {
        $square = new Square();

        $this->checkPerimeter($square, 0, 0);
        $this->checkPerimeter($square, 3, 12);
        $this->checkPerimeter($square, 10, 40);
    }

    public function testArea() {
        $square = new Square();

        $this->checkArea($square, 0, 0);
        $this->checkArea($square, 12, 144);
        $this->checkArea($square, 25.7, 660.49);
    }
}
