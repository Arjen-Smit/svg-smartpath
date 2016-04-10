<?php

namespace Smartpath;

use Smartpath\Helpers\Vector;
use Smartpath\Helpers\VectorList;
use Smartpath\Helpers\Task;

class Smartpath
{
    protected $closedPath = false;
    protected $taskList = [];
    protected $vectorList = null;

    public function __construct() {
        $this->vectorList = new VectorList();
    }

    public static function loadPath($path)
    {
        $smartpath = new Smartpath();

        $matches = [];
        $pattern = '#([A-Za-z])([.-\s0-9]+)#';

        $smartpath->setClosedPath(substr($path, -1) === 'Z');

        preg_match_all($pattern, $path, $matches);

        if (count($matches) === 3) {
            foreach($matches[1] as $key => $value) {
                $smartpath->addTask(new Task($value, trim($matches[2][$key])));
            }
        }

        return $smartpath;
    }

    public function setClosedPath(bool $bool) {
        $this->closedPath = $bool;
    }

    public function addTask(Task $task) {
        $this->taskList[] = $task;
    }

    public function toString()
    {
        $closed = "";
        if ($this->closedPath) {
            $closed = "Z";
        }

        return $this->render() . $closed;
    }

    protected function render() {

        $currentVector = null;
        foreach($this->taskList as $task) {
            if ($task instanceof Task) {
                $currentVector = $task->runTask($currentVector);
                $this->vectorList->add($currentVector);
            }
        }


        $this->vectorList->add(new Vector(30, 30));
        $this->vectorList->add(new Vector(130, 30));
        $this->vectorList->add(new Vector(130, 130));
        $this->vectorList->add(new Vector(30, 130));

        return $this->vectorList->toPath();
    }
}

//
//G = Go Move
//R = Rotate CW