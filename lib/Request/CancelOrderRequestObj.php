<?php

namespace ExploitIt\Intickets\Request;

class CancelOrderRequestObj
{

    /**
     * @var int
     */
    private $order_id;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\CancelOrderResponseObj
     */
    public function call(){
        return $this->soapClient->cancelOrder($this);
    }

    /**
     * @return CancelOrderRequestObj
     */
    public function setOrderId(int $order_id) : CancelOrderRequestObj
    {
        $this->order_id = $order_id;
        return $this;
    }


}

