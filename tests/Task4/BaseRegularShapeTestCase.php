<?php

namespace Tests\Task4;

use PHPUnit\Framework\TestCase;
use Enables\Task4\RegularShapeInterface;

class BaseRegularShapeTestCase extends TestCase
{
    protected $precision = 2;

    protected function checkArea(RegularShapeInterface $object, $side, $expected) {
        $object->setSide($side);
        $this->assertEquals(round($expected, $this->precision), round($object->getArea(), $this->precision));
    }

    protected function checkPerimeter(RegularShapeInterface $object, $side, $expected) {
        $object->setSide($side);
        $this->assertEquals(round($expected, $this->precision), round($object->getPerimeter(), $this->precision));
    }

}
