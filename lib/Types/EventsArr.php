<?php

namespace ExploitIt\Intickets\Types;

class EventsArr
{

    /**
     * @var \ExploitIt\Intickets\Models\Event[]
     */
    private $event;

    /**
     * Мероприятие
     * 
     * @return \ExploitIt\Intickets\Models\Event[]
     */
    public function getEvent() : array
    {
        if ($this->event instanceof \ExploitIt\Intickets\Models\Event){
            return [$this->event];
        }
        return $this->event;
    }


}

