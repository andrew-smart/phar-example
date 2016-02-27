<?php

use App\App;

class AppTest extends \PHPUnit_Framework_TestCase
{
    public function testRun()
    {
        $app = new App();
        $this->assertEquals('Hello!', $app->run());
    }
}
