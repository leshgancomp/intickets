<?php

namespace ExploitIt\Intickets\Response;

class GetFullDescriptionResponseObj
{

    /**
     * @var string
     */
    private $description;

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }


}

