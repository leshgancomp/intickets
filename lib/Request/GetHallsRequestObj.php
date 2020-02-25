<?php

namespace ExploitIt\Intickets\Request;

class GetHallsRequestObj
{

    /**
     * @var int
     */
    private $hall_id;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\GetHallsResponseObj
     */
    public function call(){
        return $this->soapClient->getHalls($this);
    }

    /**
     * @return GetHallsRequestObj
     */
    public function setHallId(int $hall_id) : GetHallsRequestObj
    {
        $this->hall_id = $hall_id;
        return $this;
    }


}

