<?php

namespace QuantumCA\Sdk\Requests;

use ArrayAccess;
use ArrayObject;

abstract class AbstractRequest implements ArrayAccess
{
    public function offsetExists($offset)
    {
        return isset($this->{$offset});
    }

    public function offsetGet($offset)
    {
        return $this->{$offset};
    }

    public function offsetSet($offset, $value)
    {
        $this->{$offset} = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->{$offset});
    }
    
    public function toArray()
    {
        return (array) $this;
    }
}
