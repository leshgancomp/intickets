<?php

namespace ExploitIt\Intickets\Models;

class Schema
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var \ExploitIt\Intickets\Types\SchemaFragmentsArr
     */
    private $schema_fragments_arr;

    /**
     * @var \ExploitIt\Intickets\Types\SchemaSeatsArr
     */
    private $schema_seats_arr;

    /**
     * @var int
     */
    private $hall_id;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return \ExploitIt\Intickets\Types\SchemaFragmentsArr
     */
    public function getSchemaFragmentsArr() : \ExploitIt\Intickets\Types\SchemaFragmentsArr
    {
        return $this->schema_fragments_arr;
    }

    /**
     * @return \ExploitIt\Intickets\Types\SchemaSeatsArr
     */
    public function getSchemaSeatsArr() : \ExploitIt\Intickets\Types\SchemaSeatsArr
    {
        return $this->schema_seats_arr;
    }

    /**
     * @return int
     */
    public function getHallId() : int
    {
        return $this->hall_id;
    }


}

