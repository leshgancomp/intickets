<?php

namespace ExploitIt\Intickets\Types;

class ShowFragmentsArr
{

    /**
     * @var \ExploitIt\Intickets\Models\ShowFragment[]
     */
    private $show_fragment;

    /**
     * @return \ExploitIt\Intickets\Models\ShowFragment[]
     */
    public function getShowFragment() : array
    {
        if ($this->show_fragment instanceof \ExploitIt\Intickets\Models\ShowFragment){
            return [$this->show_fragment];
        }
        return $this->show_fragment;
    }


}

