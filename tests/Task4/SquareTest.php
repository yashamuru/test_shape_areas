<?php

namespace Tests\Task4;

use PHPUnit\Framework\TestCase;
use Enables\Task4\Square;

class SquareTest extends BaseRegularShapeTestCase
{
    public function testPerimeter() {
        $square = new Square();

        $square->setSide(0);
        $this->assertEquals(0, $square->getPerimeter());

        $square->setSide(3);
        $this->assertEquals(12, $square->getPerimeter());

        $square->setSide(10);
        $this->assertEquals(40, $square->getPerimeter());
    }

    public function testArea() {
        $square = new Square();

        $square->setSide(0);
        $this->assertEquals(0, $square->getArea());

        $square->setSide(12);
        $this->assertEquals(144, $square->getArea());

        $square->setSide(25.7);
        $this->assertEquals(660.49, round($square->getArea(),2));
    }
}
