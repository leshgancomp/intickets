<?php

namespace ExploitIt\Intickets\Request;

class RefundTicketsRequestObj
{

    /**
     * @var int
     */
    private $order_id;

    /**
     * @var \ExploitIt\Intickets\Types\TicketIdsArr
     */
    private $ticket_ids_arr;

    /**
     * @var int
     */
    private $refund_amount;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\RefundTicketsResponseObj
     */
    public function call(){
        return $this->soapClient->refundTickets($this);
    }

    /**
     * @return RefundTicketsRequestObj
     */
    public function setOrderId(int $order_id) : RefundTicketsRequestObj
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return RefundTicketsRequestObj
     */
    public function setTicketIdsArr(\ExploitIt\Intickets\Types\TicketIdsArr $ticket_ids_arr) : RefundTicketsRequestObj
    {
        $this->ticket_ids_arr = $ticket_ids_arr;
        return $this;
    }

    /**
     * @return RefundTicketsRequestObj
     */
    public function setRefundAmount(int $refund_amount) : RefundTicketsRequestObj
    {
        $this->refund_amount = $refund_amount;
        return $this;
    }


}

