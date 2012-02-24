<?php 

class MainTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionTestWorksFine()
    {
        require_once '../../library/function.php';
        $result = test(5);
        
        // Assertions 
        $this->assertInternalType('integer', $result);
        $this->assertEquals(11, $result);
    }
}