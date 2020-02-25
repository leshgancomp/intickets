<?php

namespace ExploitIt\Intickets\Request;

class GetShowsRequestObj
{

    /**
     * @var int
     */
    private $show_id;

    /**
     * @var int
     */
    private $event_id;

    /**
     * @var int
     */
    private $hall_id;

    /**
     * @var \DateTimeInterface
     */
    private $since_date;

    /**
     * @var \DateTimeInterface
     */
    private $to_date;

    /**
     * @var bool
     */
    private $with_events = true;

    /**
     * @var bool
     */
    private $with_halls;

    /**
     * @var string
     */
    private $city;
    
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\GetShowsResponseObj
     */
    public function call(){
        return $this->soapClient->getShows($this);
    }

    /**
     * @return GetShowsRequestObj
     */
    public function setShowId(int $show_id) : GetShowsRequestObj
    {
        $this->show_id = $show_id;
        return $this;
    }

    /**
     * @return GetShowsRequestObj
     */
    public function setEventId(int $event_id) : GetShowsRequestObj
    {
        $this->event_id = $event_id;
        return $this;
    }

    /**
     * @return GetShowsRequestObj
     */
    public function setHallId(int $hall_id) : GetShowsRequestObj
    {
        $this->hall_id = $hall_id;
        return $this;
    }

    /**
     * Дата начала ОТ
     * 
     * @param DateTimeInterface $since_date Дата начала ОТ
     * @return GetShowsRequestObj
     */
    public function setSinceDate(\DateTimeInterface $since_date) : GetShowsRequestObj
    {
        $this->since_date = $since_date->format('Y-m-d');
        return $this;
    }

    /**
     * Дата начала ПО
     * 
     * @param DateTimeInterface $to_date Дата начала ПО
     * @return GetShowsRequestObj
     */
    public function setToDate(\DateTimeInterface $to_date) : GetShowsRequestObj
    {
        $this->to_date = $to_date->format('Y-m-d');
        return $this;
    }

    /**
     * @return GetShowsRequestObj
     */
    public function setIsWithEvents(bool $with_events) : GetShowsRequestObj
    {
        $this->with_events = $with_events;
        return $this;
    }

    /**
     * @return GetShowsRequestObj
     */
    public function setIsWithHalls(bool $with_halls) : GetShowsRequestObj
    {
        $this->with_halls = $with_halls;
        return $this;
    }

    /**
     * @return GetShowsRequestObj
     */
    public function setCity(string $city) : GetShowsRequestObj
    {
        $this->city = $city;
        return $this;
    }


}

