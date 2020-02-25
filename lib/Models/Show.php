<?php

namespace ExploitIt\Intickets\Models;

class Show
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTimeInterface
     */
    private $start;

    /**
     * @var int
     */
    private $duration_minutes;

    /**
     * @var bool
     */
    private $eticket_allowed;

    /**
     * @var \DateTimeInterface
     */
    private $close_booking_datetime;

    /**
     * @var \DateTimeInterface
     */
    private $max_order_expiration_datetime;

    /**
     * @var int
     */
    private $event_id;

    /**
     * @var int
     */
    private $hall_id;

    /**
     * @var int
     */
    private $schema_id;

    /**
     * @var string
     */
    private $principal_taxpayer_number;

    /**
     * @var string
     */
    private $principal_name;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStart() : \DateTimeInterface
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:s', $this->start);
    }

    /**
     * @return int
     */
    public function getDurationMinutes() : int
    {
        return $this->duration_minutes;
    }

    /**
     * @return bool
     */
    public function isEticketAllowed() : bool
    {
        return $this->eticket_allowed;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCloseBookingDatetime() : \DateTimeInterface
    {
        return \DateTime::createFromFormat('Y-m-d\TH:i:sP', $this->close_booking_datetime);
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMaxOrderExpirationDatetime() : \DateTimeInterface
    {
        //var_dump($this->max_order_expiration_datetime);die;
        return \DateTime::createFromFormat('Y-m-d\TH:i:sP', $this->max_order_expiration_datetime);
    }

    /**
     * @return int
     */
    public function getEventId() : int
    {
        return $this->event_id;
    }

    /**
     * @return int
     */
    public function getHallId() : int
    {
        return $this->hall_id;
    }

    /**
     * @return int
     */
    public function getSchemaId() : int
    {
        return $this->schema_id;
    }

    /**
     * @return string
     */
    public function getPrincipalTaxpayerNumber() : string
    {
        return $this->principal_taxpayer_number;
    }

    /**
     * @return string
     */
    public function getPrincipalName() : string
    {
        return $this->principal_name;
    }


}

