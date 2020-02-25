<?php

namespace ExploitIt\Intickets\Models;

class Order
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTimeInterface
     */
    private $expiration_datetime;

    /**
     * @var \DateTimeInterface
     */
    private $payment_datetime;

    /**
     * @var int
     */
    private $tickets_quantity;

    /**
     * @var int
     */
    private $total_cost;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDatetime() : \DateTimeInterface
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:sP', $this->expiration_datetime);
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPaymentDatetime() : \DateTimeInterface
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:sP', $this->payment_datetime);
    }

    /**
     * @return int
     */
    public function getTicketsQuantity() : int
    {
        return $this->tickets_quantity;
    }

    /**
     * @return int
     */
    public function getTotalCost() : int
    {
        return $this->total_cost;
    }


}

