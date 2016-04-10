<?php

namespace Smartpath\Helpers;

use Smartpath\Helpers\Vector;
use Smartpath\Helpers\Direction;

class Line
{
    protected $start;
    protected $end;
    protected $direction;

    public function setStart(Vector $vector)
    {
        $this->start = $vector;

        return $this;
    }

    public function setEnd(Vector $vector)
    {
        $this->end = $vector;

        return $this;
    }

    public function setDirection (Direction $direction)
    {
        $this->direction = $direction;

        return $this;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function solveMissing()
    {

    }
}