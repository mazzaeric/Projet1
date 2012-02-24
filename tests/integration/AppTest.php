<?php 


class AppTest extends phpRack_Test
{
    public function testPhpVersion()
    {
        $this->assert->php->version->atLeast('5.3');
    }
    
    public function testSimpleXmlLoaded()
    {
        $this->assert->php->extensions->isLoaded('simplexml');
    }
    
    public function testPhpConfig()
    {
        $this->assert->php->ini('memory_limit')->atLeast('479M');
    }
    
    public function testPort80IsOpened()
    {
        $this->assert->network->ports->isOpen(80, '127.0.0.1');
    }
}