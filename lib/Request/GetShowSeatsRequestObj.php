<?php

namespace ExploitIt\Intickets\Request;

class GetShowSeatsRequestObj
{

    /**
     * @var int
     */
    private $show_id;

    /**
     * @var int
     */
    private $schema_fragment_id;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\GetShowSeatsResponseObj
     */
    public function call(){
        return $this->soapClient->getShowSeats($this);
    }

    /**
     * @return GetShowSeatsRequestObj
     */
    public function setShowId(int $show_id) : GetShowSeatsRequestObj
    {
        $this->show_id = $show_id;
        return $this;
    }

    /**
     * @return GetShowSeatsRequestObj
     */
    public function setSchemaFragmentId(int $schema_fragment_id) : GetShowSeatsRequestObj
    {
        $this->schema_fragment_id = $schema_fragment_id;
        return $this;
    }


}

