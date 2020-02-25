<?php

namespace ExploitIt\Intickets\Models;

class SchemaFragment
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $unnumbered;

    /**
     * @var int
     */
    private $unnumbered_seats_quantity;

    /**
     * @var int
     */
    private $schema_id;

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
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isUnnumbered() : bool
    {
        return $this->unnumbered;
    }

    /**
     * @return int
     */
    public function getUnnumberedSeatsQuantity() : int
    {
        return $this->unnumbered_seats_quantity;
    }

    /**
     * @return int
     */
    public function getSchemaId() : int
    {
        return $this->schema_id;
    }


}

