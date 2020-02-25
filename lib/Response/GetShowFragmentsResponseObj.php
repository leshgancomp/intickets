<?php

namespace ExploitIt\Intickets\Response;

class GetShowFragmentsResponseObj
{

    /**
     * @var \ExploitIt\Intickets\Types\ShowFragmentsArr[]
     */
    private $show_fragments_arr;

    /**
     * @return \ExploitIt\Intickets\Types\ShowFragmentsArr[]
     */
    public function getShowFragmentsArr(): array
    {
        return $this->show_fragments_arr->getShowFragment();
    }

}

