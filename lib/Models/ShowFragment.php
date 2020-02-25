<?php

namespace ExploitIt\Intickets\Models;

class ShowFragment
{

    /**
     * @var int
     */
    private $available_seats_quantity;

    /**
     * @var int
     */
    private $min_cost;

    /**
     * @var int
     */
    private $max_cost;

    /**
     * @var string
     */
    private $schema_fragment_name;

    /**
     * @var int
     */
    private $schema_fragment_id;

    /**
     * @var bool
     */
    private $only_fully;

    /**
     * @return int
     */
    public function getAvailableSeatsQuantity() : int
    {
        return $this->available_seats_quantity;
    }

    /**
     * @return int
     */
    public function getMinCost() : int
    {
        return $this->min_cost;
    }

    /**
     * @return int
     */
    public function getMaxCost() : int
    {
        return $this->max_cost;
    }

    /**
     * @return string
     */
    public function getSchemaFragmentName() : string
    {
        return $this->schema_fragment_name;
    }

    /**
     * @return int
     */
    public function getSchemaFragmentId() : int
    {
        return $this->schema_fragment_id;
    }

    /**
     * @return bool
     */
    public function isOnlyFully() : bool
    {
        return $this->only_fully;
    }


}

