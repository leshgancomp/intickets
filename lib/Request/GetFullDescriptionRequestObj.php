<?php

namespace ExploitIt\Intickets\Request;

class GetFullDescriptionRequestObj
{

    /**
     * @var int
     */
    private $id;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\GetFullDescriptionResponseObj
     */
    public function call(){
        return $this->soapClient->getFullDescription($this);
    }

    /**
     * @return GetFullDescriptionRequestObj
     */
    public function setId(int $id) : GetFullDescriptionRequestObj
    {
        $this->id = $id;
        return $this;
    }


}

