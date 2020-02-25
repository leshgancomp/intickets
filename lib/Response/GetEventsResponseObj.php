<?php

namespace ExploitIt\Intickets\Response;

class GetEventsResponseObj
{

    /**
     * @var \ExploitIt\Intickets\Types\EventsArr[]
     */
    private $events_arr;

    /**
     * @return \ExploitIt\Intickets\Types\EventsArr[]
     */
    public function getEventsArr() : array
    {
        return $this->events_arr->getEvent();
    }


}

