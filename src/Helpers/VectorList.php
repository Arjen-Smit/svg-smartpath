<?php

namespace Smartpath\Helpers;

use Smartpath\Helpers\Vector;

class VectorList
{
    protected $vectors = [];

    public function add(Vector $vector) {
        $this->vectors[] = $vector;
    }

    public function toPath() {
        $path = "";
        $x = 0;
        $y = 0;
        $vector_origin = null;
        $vector_destination = null;

        foreach($this->vectors as $vector) {
            $vector_origin = $vector_destination;
            $vector_destination = $vector;
            $path .= $this->line($vector_origin, $vector_destination);
        }

        return $path;
    }

    public function line($vector_from, $vector_to) {

        if ($vector_from === null and $vector_to instanceof Vector) {
            return "M" . $vector_to->getX(). " " . $vector_to->getY();
        }

        if ($vector_from instanceof Vector && $vector_to instanceof Vector) {
            if ($vector_from->getY() === $vector_to->getY() && $vector_from->getX() === $vector_to->getX() ) {
                return "";
            }
            if ($vector_from->getY() === $vector_to->getY() ) {
                return "H" . $vector_to->getX();
            }
            if ($vector_from->getX() === $vector_to->getX() ) {
                return "V" . $vector_to->getY();
            }
            return "L" . $vector_to->getX() . " " .$vector_to->getY();
        }
    }


}
