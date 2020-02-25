<?php

namespace ExploitIt\Intickets\Types;

class UnnumberedShowSeatsPortionsArr
{

    /**
     * @var \ExploitIt\Intickets\Models\UnnumberedShowSeatsPortion
     */
    private $unnumbered_show_seats_portion;

    /**
     * @return \ExploitIt\Intickets\Models\UnnumberedShowSeatsPortion
     */
    public function getUnnumberedShowSeatsPortion() : array
    {
        if ($this->unnumbered_show_seats_portion instanceof \ExploitIt\Intickets\Models\UnnumberedShowSeatsPortion){
            return [$this->unnumbered_show_seats_portion];
        }
        return $this->unnumbered_show_seats_portion;
    }


}

