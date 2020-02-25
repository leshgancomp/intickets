<?php

namespace ExploitIt\Intickets\Response;

class GetHallsResponseObj
{

    /**
     * @var \ExploitIt\Intickets\Types\HallsArr[]
     */
    private $halls_arr;

    /**
     * @return \ExploitIt\Intickets\Types\HallsArr[]
     */
    public function getHallsArr() : array
    {
        return $this->halls_arr->getHall();
    }


}

