<?php

include_once('./src/conversor.php');

use PHPUnit\Framework\TestCase;

class ConversorTest extends TestCase {
 
    public function testEurosADolares()
    {

        $conversion = new Conversor();
        $this->assertEquals($conversion->eurosADolares(10), 10.835);
    }

}

?>