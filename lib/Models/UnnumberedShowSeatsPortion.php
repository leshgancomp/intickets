<?php

namespace ExploitIt\Intickets\Models;

class UnnumberedShowSeatsPortion
{

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $cost;

    /**
     * @var int
     */
    private $schema_fragment_id;

    /**
     * @var int
     */
    private $show_id;

    /**
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getCost() : int
    {
        return $this->cost;
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
    public function getShowId() : int
    {
        return $this->show_id;
    }


}

