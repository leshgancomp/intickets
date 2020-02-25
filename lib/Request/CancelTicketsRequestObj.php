<?php

namespace ExploitIt\Intickets\Request;

class CancelTicketsRequestObj
{

    /**
     * @var int
     */
    private $order_id;

    /**
     * @var \ExploitIt\Intickets\Types\TicketIdsArr
     */
    private $ticket_ids_arr;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\CancelTicketsResponseObj
     */
    public function call(){
        return $this->soapClient->cancelTickets($this);
    }

    /**
     * @return CancelTicketsRequestObj
     */
    public function setOrderId(int $order_id) : CancelTicketsRequestObj
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return CancelTicketsRequestObj
     */
    public function setTicketIdsArr(\ExploitIt\Intickets\Types\TicketIdsArr $ticket_ids_arr) : CancelTicketsRequestObj
    {
        $this->ticket_ids_arr = $ticket_ids_arr;
        return $this;
    }


}

