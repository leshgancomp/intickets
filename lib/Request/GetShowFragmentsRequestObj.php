<?php

namespace ExploitIt\Intickets\Request;

class GetShowFragmentsRequestObj
{

    /**
     * @var int
     */
    private $show_id;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\GetShowFragmentsResponseObj
     */
    public function call(){
        return $this->soapClient->getShowFragments($this);
    }

    /**
     * @return GetShowFragmentsRequestObj
     */
    public function setShowId(int $show_id) : GetShowFragmentsRequestObj
    {
        $this->show_id = $show_id;
        return $this;
    }


}

