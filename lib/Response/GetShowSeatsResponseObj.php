<?php

namespace ExploitIt\Intickets\Response;

class GetShowSeatsResponseObj
{

    /**
     * @var \ExploitIt\Intickets\Models\ShowSeats
     */
    private $show_seats;

    /**
     * @return \ExploitIt\Intickets\Types\ShowSeats
     */
    public function getShowSeats() : \ExploitIt\Intickets\Models\ShowSeats
    {
        return $this->show_seats;
    }

}

