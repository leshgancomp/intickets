<?php

namespace ExploitIt\Intickets\Response;

class GetShowsResponseObj
{

    /**
     * @var \ExploitIt\Intickets\Types\ShowsArr[]
     */
    private $shows_arr;

    /**
     * @var \ExploitIt\Intickets\Types\EventsArr[]
     */
    private $events_arr;

    /**
     * @var \ExploitIt\Intickets\Types\HallsArr[]
     */
    private $halls_arr;

    /**
     * Список сеансов
     * 
     * @return \ExploitIt\Intickets\Types\ShowsArr[]
     */
    public function getShowsArr(): array
    {
        return $this->shows_arr->getShow();
    }

    /**
     * Список мероприятий
     * 
     * @return \ExploitIt\Intickets\Types\EventsArr[]
     */
    public function getEventsArr() : array
    {
        return $this->events_arr->getEvent();
    }

    /**
     * Список залов
     * 
     * @return \ExploitIt\Intickets\Types\HallsArr[]
     */
    public function getHallsArr() : array
    {
        return $this->halls_arr->getHall();
    }


}

