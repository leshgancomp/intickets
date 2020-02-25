<?php

namespace ExploitIt\Intickets\Response;

class GetSchemaResponseObj
{

    /**
     * @var \ExploitIt\Intickets\Models\Schema
     */
    private $schema;

    /**
     * @return \ExploitIt\Intickets\Types\Schema
     */
    public function getSchema() : \ExploitIt\Intickets\Models\Schema
    {
        return $this->schema;
    }

}

