<?php

namespace Tests\Task4\Shapes;

use Enables\Task4\PolygonCalculator;


class PolygonCalculatorTest extends BaseRegularShapeTestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testParseItemUnknownType() {
        $calculator = new PolygonCalculator();
        $calculator->parseItem("tsvetan.nenov", 3.5);
    }

    //Added the trailing 0 in the first test ( 10.5 becomes 10.50 ).
    public function testParseItem() {
        $calculator = new PolygonCalculator();
        $this->assertEquals($calculator->parseItem('triangle', 3.5), 'A triangle with side length 3.5 u has a perimeter of 10.50 u and an area of 5.30 u^2');
        $this->assertEquals($calculator->parseItem('circle', 2), 'A circle with radius 2 u has a perimeter of 12.57 u and an area of 12.57 u^2');
    }

    public function testFormatNumber() {
        $calculator = new PolygonCalculator();

        $this->assertEquals("3.30", $calculator->formatNumber(3.3) );
        $this->assertEquals("33", $calculator->formatNumber(33) );
        $this->assertEquals("192.12", $calculator->formatNumber(192.12) );
    }

}

