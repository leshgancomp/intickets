<?php

namespace ExploitIt\Intickets\Types;

class ShowsArr
{

    /**
     * @var \ExploitIt\Intickets\Models\Show[]
     */
    private $show;

    /**
     * @return \ExploitIt\Intickets\Models\Show[]
     */
    public function getShow() : array
    {
        if ($this->show instanceof \ExploitIt\Intickets\Models\Show){
            return [$this->show];
        }
        return $this->show;
    }


}

