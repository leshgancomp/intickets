<?php

namespace ExploitIt\Intickets\Request;

class GetOrderRequestObj
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
     * @return \ExploitIt\Intickets\Response\GetOrderResponseObj
     */
    public function call(){
        return $this->soapClient->getOrder($this);
    }

    /**
     * @return GetOrderRequestObj
     */
    public function setOrderId(int $order_id) : GetOrderRequestObj
    {
        $this->order_id = $order_id;
        return $this;
    }


}

