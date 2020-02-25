<?php

namespace ExploitIt\Intickets\Types;

class TicketsArr
{

    /**
     * @var \ExploitIt\Intickets\Models\Ticket[]
     */
    private $ticket;

    /**
     * @return \ExploitIt\Intickets\Models\Ticket[]
     */
    public function getTicket() : array
    {
        if ($this->ticket instanceof \ExploitIt\Intickets\Models\Ticket){
            return [$this->ticket];
        }
        return $this->ticket;
    }


}

