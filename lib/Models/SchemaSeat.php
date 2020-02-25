<?php

namespace ExploitIt\Intickets\Models;

class SchemaSeat
{

    /**
     * @var int
     */
    private $id;

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
    private $grid_x;

    /**
     * @var int
     */
    private $grid_y;

    /**
     * @var int
     */
    private $schema_fragment_id;

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
    public function getGridX() : int
    {
        return $this->grid_x;
    }

    /**
     * @return int
     */
    public function getGridY() : int
    {
        return $this->grid_y;
    }

    /**
     * @return int
     */
    public function getSchemaFragmentId() : int
    {
        return $this->schema_fragment_id;
    }


}

