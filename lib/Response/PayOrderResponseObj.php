<?php

namespace ExploitIt\Intickets\Response;

class PayOrderResponseObj
{

    /**
     * @var \ExploitIt\Intickets\Models\Order
     */
    private $order;

    /**
     * @var \ExploitIt\Intickets\Types\TicketsArr[]
     */
    private $tickets_arr;

    /**
     * @return \ExploitIt\Intickets\Models\Order
     */
    public function getOrder() : \ExploitIt\Intickets\Models\Order
    {
        return $this->order;
    }

    /**
     * @return \ExploitIt\Intickets\Types\TicketsArr[]
     */
    public function getTicketsArr() : array
    {
        return $this->tickets_arr->getTicket();
    }


}

