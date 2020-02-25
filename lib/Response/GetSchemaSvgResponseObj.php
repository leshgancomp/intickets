<?php

namespace ExploitIt\Intickets\Response;

class GetSchemaSvgResponseObj
{

    /**
     * @var \ExploitIt\Intickets\Models\SchemaSVG
     */
    private $schema;

    /**
     * @return \ExploitIt\Intickets\Types\Schema
     */
    public function getSchema() : \ExploitIt\Intickets\Models\SchemaSVG
    {
        return $this->schema;
    }

}

