<?php

namespace Smartpath\Helpers;

class Direction
{
    protected $direction = 0.0;

    public function change($value)
    {
        $this->direction = $value;
    }

    public function add($value)
    {
        $this->direction += $value;
    }
}