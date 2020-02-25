<?php

namespace ExploitIt\Intickets\Request;

class GetEventsRequestObj
{

    /**
     * @var int
     */
    private $event_id;
    
    private $soapClient;
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\GetEventsResponseObj
     */
    public function call(){
        return $this->soapClient->getEvents($this);
    }
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }

    /**
     * @return GetEventsRequestObj
     */
    public function setEventId(int $event_id) : GetEventsRequestObj
    {
        $this->event_id = $event_id;
        return $this;
    }


}

