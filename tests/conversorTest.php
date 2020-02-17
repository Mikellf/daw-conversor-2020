<?php

include_once('./src/conversor.php');

use PHPUnit\Framework\TestCase;

class ConversorTest extends TestCase {
 
    public function testEurosADolares()
    {

        $conversion = new Conversor();
        $this->assertEquals($conversor->eurosADolares(1, 1.0835), 1.0835);
    }

    public function testEurosAYenes()
    {

        $conversion = new Conversor();
        $this->assertEquals($conversor->eurosAYenes(1, 119.05), 119.05);
    }
    }

?>