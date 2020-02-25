<?php

namespace ExploitIt\Intickets\Types;

class TicketIdsArr
{

    /**
     * @var int
     */
    private $ticket_id;

    /**
     * @return int
     */
    public function getTicketId() : int
    {
        return $this->ticket_id;
    }


}

