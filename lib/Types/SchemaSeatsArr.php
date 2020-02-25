<?php

namespace ExploitIt\Intickets\Types;

class SchemaSeatsArr
{

    /**
     * @var \ExploitIt\Intickets\Models\SchemaSeat[]
     */
    private $schema_seat;

    /**
     * @return \ExploitIt\Intickets\Models\SchemaSeat[]
     */
    public function getSchemaSeat() : array
    {
        if ($this->schema_seat instanceof \ExploitIt\Intickets\Models\SchemaSeat){
            return [$this->schema_seat];
        }
        return $this->schema_seat;
    }


}

