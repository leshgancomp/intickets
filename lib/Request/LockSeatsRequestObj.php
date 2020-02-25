<?php

namespace ExploitIt\Intickets\Request;

class LockSeatsRequestObj
{

    /**
     * @var int
     */
    private $order_id;

    /**
     * @var \ExploitIt\Intickets\Types\NumberedShowSeatToLockArr
     */
    private $numbered_show_seat_to_lock_arr;

    /**
     * @var \ExploitIt\Intickets\Types\UnnumberedShowSeatsPortionsArr
     */
    private $unnumbered_show_seats_portions_arr;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\LockSeatsResponseObj
     */
    public function call(){
        return $this->soapClient->lockSeats($this);
    }

    /**
     * @return LockSeatsRequestObj
     */
    public function setOrderId(int $order_id) : LockSeatsRequestObj
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return LockSeatsRequestObj
     */
    public function setNumberedShowSeatToLockArr(\ExploitIt\Intickets\Types\NumberedShowSeatToLockArr $numbered_show_seat_to_lock_arr) : LockSeatsRequestObj
    {
        $this->numbered_show_seat_to_lock_arr = $numbered_show_seat_to_lock_arr;
        return this;
    }

    /**
     * @return LockSeatsRequestObj
     */
    public function setUnnumbered_show_seats_portions_arr(\ExploitIt\Intickets\Types\UnnumberedShowSeatsPortionsArr $unnumbered_show_seats_portions_arr) : LockSeatsRequestObj
    {
        $this->unnumbered_show_seats_portions_arr = $unnumbered_show_seats_portions_arr;
        return $this;
    }


}

