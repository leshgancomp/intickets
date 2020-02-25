<?php

namespace ExploitIt\Intickets\Types;

class NumberedShowSeatToLockArr
{

    /**
     * @var \ExploitIt\Intickets\Models\NumberedShowSeatToLock[]
     */
    private $numbered_show_seat_to_lock;

    /**
     * @return \ExploitIt\Intickets\Models\NumberedShowSeatToLock[]
     */
    public function getNumberedShowSeatToLock() : array
    {
        if ($this->numbered_show_seat_to_lock instanceof \ExploitIt\Intickets\Models\NumberedShowSeatToLock){
            return [$this->numbered_show_seat_to_lock];
        }
        return $this->numbered_show_seat_to_lock;
    }


}

