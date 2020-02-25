<?php

namespace ExploitIt\Intickets\Response;

class CancelOrderResponseObj
{

    /**
     * @var \ExploitIt\Intickets\Models\Order
     */
    private $order;

    /**
     * @return \ExploitIt\Intickets\Models\Order
     */
    public function getOrder() : \ExploitIt\Intickets\Models\Order
    {
        return $this->order;
    }


}

