<?php

namespace ExploitIt\Intickets\Request;

class UnLockSeatsRequestObj
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
     * @return \ExploitIt\Intickets\Response\UnLockSeatsResponseObj
     */
    public function call(){
        return $this->soapClient->unLockSeats($this);
    }

    /**
     * @return UnLockSeatsRequestObj
     */
    public function setOrderId(int $order_id) : UnLockSeatsRequestObj
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return UnLockSeatsRequestObj
     */
    public function setNumberedShowSeatToLockArr(\ExploitIt\Intickets\Types\NumberedShowSeatToLockArr $numbered_show_seat_to_lock_arr) : UnLockSeatsRequestObj
    {
        $this->numbered_show_seat_to_lock_arr = $numbered_show_seat_to_lock_arr;
        return $this;
    }

    /**
     * @return UnLockSeatsRequestObj
     */
    public function setUnnumberedShowSeatsPortionsArr(\ExploitIt\Intickets\Types\UnnumberedShowSeatsPortionsArr $unnumbered_show_seats_portions_arr) : UnLockSeatsRequestObj
    {
        $this->unnumbered_show_seats_portions_arr = $unnumbered_show_seats_portions_arr;
        return $this;
    }


}

