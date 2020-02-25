<?php

namespace ExploitIt\Intickets\Models;

class Ticket
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $cost;

    /**
     * @var string
     */
    private $row;

    /**
     * @var string
     */
    private $seat;

    /**
     * @var string
     */
    private $schema_fragment_name;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var \DateTimeInterface
     */
    private $refund_datetime;

    /**
     * @var int
     */
    private $schema_fragment_id;

    /**
     * @var int
     */
    private $schema_seat_id;

    /**
     * @var int
     */
    private $show_seat_id;

    /**
     * @var int
     */
    private $show_id;

    /**
     * @var int
     */
    private $order_id;

    /**
     * @var int
     */
    private $kpop_queue_id;

    /**
     * @var int
     */
    private $kpop_number_in_queue;

    /**
     * @var string
     */
    private $tax_mode;

    /**
     * @var int
     */
    private $tax_amount;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCost() : int
    {
        return $this->cost;
    }

    /**
     * @return string
     */
    public function getRow() : string
    {
        return $this->row;
    }

    /**
     * @return string
     */
    public function getSeat() : string
    {
        return $this->seat;
    }

    /**
     * @return string
     */
    public function getSchemaFragmentName() : string
    {
        return $this->schema_fragment_name;
    }

    /**
     * @return string
     */
    public function getBarcode() : string
    {
        return $this->barcode;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getRefundDatetime() : \DateTimeInterface
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:sP', $this->refund_datetime);
    }

    /**
     * @return int
     */
    public function getSchemaFragmentId() : int
    {
        return $this->schema_fragment_id;
    }

    /**
     * @return int
     */
    public function getSchemaSeatId() : int
    {
        return $this->schema_seat_id;
    }

    /**
     * @return int
     */
    public function getShowSeatId() : int
    {
        return $this->show_seat_id;
    }

    /**
     * @return int
     */
    public function getShowId() : int
    {
        return $this->show_id;
    }

    /**
     * @return int
     */
    public function getOrderId() : int
    {
        return $this->order_id;
    }

    /**
     * @return int
     */
    public function getKpopQueueId() : int
    {
        return $this->kpop_queue_id;
    }

    /**
     * @return int
     */
    public function getKpopNumberInQueue() : int
    {
        return $this->kpop_number_in_queue;
    }

    /**
     * @return string
     */
    public function getTaxMode() : string
    {
        return $this->tax_mode;
    }

    /**
     * @return int
     */
    public function getTaxAmount() : int
    {
        return $this->tax_amount;
    }


}

