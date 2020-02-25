<?php

namespace ExploitIt\Intickets\Models;

class NumberedShowSeat
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
    private $show_id;

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
    public function getShowId() : int
    {
        return $this->show_id;
    }


}

