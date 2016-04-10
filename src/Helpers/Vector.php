<?php

namespace Smartpath\Helpers;

class Vector
{
    protected $x;
    protected $y;

    public function __construct($x = null, $y = null) {
        if ($x !== null && $y !== null) {
            $this->setX($x)->setY($y);
        }
    }

    public function setX($x)
    {
        $this->x = round($x,4);

        return $this;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = round($y,4);

        return $this;
    }

    public function getY()
    {
        return $this->y;
    }
}
