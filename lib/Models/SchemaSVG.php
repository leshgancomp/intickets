<?php

namespace ExploitIt\Intickets\Models;

class SchemaSVG
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $svg;

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
    public function getSvg() : string
    {
        return ($this->svg?$this->svg:"");
    }


}

