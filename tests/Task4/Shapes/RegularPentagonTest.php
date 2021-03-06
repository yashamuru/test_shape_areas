<?php

namespace Tests\Task4\Shapes;

use PHPUnit\Framework\TestCase;
use Tasks\Task4\Shapes\RegularPentagon;

class RegularPentagonTest extends BaseRegularShapeTestCase {

    public function testPerimeter() {
        $pentagon = new RegularPentagon();

        $this->checkPerimeter($pentagon, 0, 0);
        $this->checkPerimeter($pentagon, 5, 25);
        $this->checkPerimeter($pentagon, 6.16, 30.8);
    }

    public function testArea() {
        $pentagon = new RegularPentagon();

        $this->checkArea($pentagon, 0, 0);
        $this->checkArea($pentagon, 6.16, 65.28);
        $this->checkArea($pentagon, 13, 290.76);
    }
}
