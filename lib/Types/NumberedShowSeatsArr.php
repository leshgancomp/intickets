<?php

namespace ExploitIt\Intickets\Types;

class NumberedShowSeatsArr
{

    /**
     * @var \ExploitIt\Intickets\Models\NumberedShowSeat[]
     */
    private $numbered_show_seat;

    /**
     * @return \ExploitIt\Intickets\Models\NumberedShowSeat[]
     */
    public function getNumberedShowSeat() : array
    {
        if ($this->numbered_show_seat instanceof \ExploitIt\Intickets\Models\NumberedShowSeat){
            return [$this->numbered_show_seat];
        }
        return $this->numbered_show_seat;
    }


}

