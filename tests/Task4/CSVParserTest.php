<?php

namespace Tests\Task4\Shapes;

use Enables\Task4\PolygonCalculator;
use Enables\Task4\CSVParser;


class CSVParserTest extends BaseRegularShapeTestCase
{
    public function testProcessCSV() {

        $fileLocation = 'tests/Task4/testingCSV.csv';

        $polygonCalculator = $this->prophesize(PolygonCalculator::class);
        $polygonCalculator->parseItem(\Prophecy\Argument::type('string'),\Prophecy\Argument::type('string'))->willReturnArgument(0);

        $csvParser = new CSVParser();
        $csvParser->setCalculator($polygonCalculator->reveal());

        $result = $csvParser->processCSV($fileLocation);

        $expected  = join(PHP_EOL, array('triangle','circle','square','pentagon'));
        //Say we want the result to return one last ending-line.
        $expected .= PHP_EOL;

        $this->assertEquals($expected, $result);
    }

}

