<?php

namespace ExploitIt\Intickets\Models;

class ShowSeats
{

    /**
     * @var \ExploitIt\Intickets\Types\NumberedShowSeatsArr
     */
    private $numbered_show_seats_arr;

    /**
     * @var \ExploitIt\Intickets\Types\UnnumberedShowSeatsPortionsArr
     */
    private $unnumbered_show_seats_portions_arr;

    /**
     * @return \ExploitIt\Intickets\Types\NumberedShowSeatsArr
     */
    public function getNumberedShowSeatsArr() : \ExploitIt\Intickets\Types\NumberedShowSeatsArr
    {
        return $this->numbered_show_seats_arr;
    }

    /**
     * @return \ExploitIt\Intickets\Types\UnnumberedShowSeatsPortionsArr
     */
    public function getUnnumberedShowSeatsPortionsArr() : \ExploitIt\Intickets\Types\UnnumberedShowSeatsPortionsArr
    {
        return $this->unnumbered_show_seats_portions_arr;
    }


}

