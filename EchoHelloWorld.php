<?php

namespace Megidmegid\hello-world;

class EchoHelloWorld
{
    private $_needEcho;
    public function __construct($param)
    {
        $this->_needEcho = 'Hello world';
        if (!empty($param) && is_string($param)) {
            $this->_needEcho = $param;
        }
    }
    
    public function echo()
    {
        echo $this->_needEcho;
    }
}
