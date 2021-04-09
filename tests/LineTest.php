<?php

use PHPUnit\Framework\TestCase;
use Bezrukov\BezrukovException;
use Bezrukov\Line;

class LineTest extends TestCase
{
    public function testLine()
    {
        $line = new Line();
        $this->assertEquals([7], $line->line(2, -14));
        $this->assertEquals([-22], $line->line(4, 88));
    }

    public function testLineException()
    {
        $line = new Line();
        $this->expectExceptionMessage('This line equation does not exist!');
        $this->expectException(BezrukovException::class);
        $line->line(0, 4);
        $line->line(0, 2);
    }
}