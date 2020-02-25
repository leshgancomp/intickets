<?php

namespace ExploitIt\Intickets\Types;

class SchemaFragmentsArr
{

    /**
     * @var \ExploitIt\Intickets\Models\SchemaFragment[]
     */
    private $schema_fragment;

    /**
     * @return \ExploitIt\Intickets\Models\SchemaFragment[]
     */
    public function getSchemaFragment() : array
    {
        if ($this->schema_fragment instanceof \ExploitIt\Intickets\Models\SchemaFragment){
            return [$this->schema_fragment];
        }
        return $this->schema_fragment;
    }


}

