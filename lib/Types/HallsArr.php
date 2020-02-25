<?php

namespace ExploitIt\Intickets\Types;

class HallsArr
{

    /**
     * @var \ExploitIt\Intickets\Models\Hall[]
     */
    private $hall;

    /**
     * @return \ExploitIt\Intickets\Models\Hall[]
     */
    public function getHall() : array
    {
        if ($this->hall instanceof \ExploitIt\Intickets\Models\Hall){
            return [$this->hall];
        }
        return $this->hall;
    }


}

