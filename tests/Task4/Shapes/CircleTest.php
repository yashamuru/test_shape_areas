<?php

namespace Tests\Task4\Shapes;

use PHPUnit\Framework\TestCase;
use Enables\Task4\Shapes\Circle;


class CircleTest extends BaseRegularShapeTestCase
{
    public function testPerimeter() {
        $circle = new Circle();

        $circle->setSide(0);
        $this->assertEquals(0, $circle->getPerimeter());
        //Or alternatively using the parent's class method:
        $this->checkPerimeter($circle, 3, 18.85);

        $this->checkPerimeter($circle, 10, 62.83);
    }

    public function testArea() {
        $circle = new Circle();

        $this->checkArea($circle, 0, 0);
        $this->checkArea($circle, 2, 12.57);
        $this->checkArea($circle, 10, 314.16);
    }
}
