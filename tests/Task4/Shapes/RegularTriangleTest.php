<?php

namespace Tests\Task4\Shapes;

use PHPUnit\Framework\TestCase;
use Enables\Task4\Shapes\RegularTriangle;

class RegularTriangleTest extends BaseRegularShapeTestCase
{
    public function testPerimeter() {
        $triangle = new RegularTriangle();

        $this->checkPerimeter($triangle, 0, 0);
        $this->checkPerimeter($triangle, 3, 9);
        $this->checkPerimeter($triangle, 10, 30);
    }

    public function testArea() {
        $triangle = new RegularTriangle();

        $this->checkArea($triangle, 0, 0);
        $this->checkArea($triangle, 4, 6.93);
        $this->checkArea($triangle, 21.67, 203.34);
        $this->checkArea($triangle, 24.3, 255.69);
        $this->checkArea($triangle, 35.6, 548.78);
    }

}
