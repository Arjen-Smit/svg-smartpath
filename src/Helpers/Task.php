<?php

namespace Smartpath\Helpers;

class Task
{
    private $task;
    private $coords;

    public function __construct($task, $coords)
    {
        $this->setTask($task)->setCoords($coords);
    }

    public function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    public function getTask()
    {
        return $this->task;
    }

    public function setCoords($coords)
    {
        $this->coords = $coords;

        return $this;
    }

    public function getCoords()
    {
        return $this->coords;
    }

    public function toString()
    {
        return "" . $this->getTask() . $this->getCoords();
    }

    public function runTask($lastVector = null)
    {
        if ($lastVector === null) {
            $lastVector = new Vector();
        }
        
    }

}