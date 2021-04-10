<?php

use PHPUnit\Framework\TestCase;
use Bezrukov\MyLog;

class MyLogTest extends TestCase
{

    public function testWrite()
    {

        $this->assertEquals('', MyLog::write("Testing"));
        $this->assertEquals('', MyLog::write(1234));
        $this->assertEquals('', MyLog::write("Поставьте 3 пожалуйста"));

    }

    public function testMyLog()
    {
        $this->assertEquals('', MyLog::log("Bezrukov"));
        $this->assertEquals('', MyLog::log(1546786));
        $this->assertEquals('', MyLog::log(false));
    }

    public function testMyLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('', MyLog::log("Поставьте 3 пожалуйста"));
        $this->assertEquals('', MyLog::log(null));
    }

}
