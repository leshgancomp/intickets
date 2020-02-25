<?php

namespace ExploitIt\Intickets\Request;

class ProlongOrderRequestObj
{

    /**
     * @var int
     */
    private $order_id;

    /**
     * @var \DateTimeInterface
     */
    private $order_expiration_datetime;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\ProlongOrderResponseObj
     */
    public function call(){
        return $this->soapClient->prolongOrder($this);
    }

    /**
     * @return ProlongOrderRequestObj
     */
    public function setOrderId(int $order_id) : ProlongOrderRequestObj
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return ProlongOrderRequestObj
     */
    public function setOrderExpirationDatetime(\DateTimeInterface $order_expiration_datetime) : ProlongOrderRequestObj
    {
        $this->order_expiration_datetime = $order_expiration_datetime->format('c');
        return $this;
    }


}

