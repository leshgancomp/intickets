<?php

namespace ExploitIt\Intickets\Request;

class PayOrderRequestObj
{

    /**
     * @var int
     */
    private $order_id;

    /**
     * @var int
     */
    private $payment_amount;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\PayOrderResponseObj
     */
    public function call(){
        return $this->soapClient->payOrder($this);
    }

    /**
     * @return PayOrderRequestObj
     */
    public function setOrderId(int $order_id) : PayOrderRequestObj
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return PayOrderRequestObj
     */
    public function setPaymentAmount(int $payment_amount) : PayOrderRequestObj
    {
        $this->payment_amount = $payment_amount;
        return $this;
    }


}

