<?php

namespace ExploitIt\Intickets\Request;

class GetSchemaSvgRequestObj
{

    /**
     * @var int
     */
    private $schema_id;
    
    private $soapClient;
    
    public function __construct($soapClient) {
        $this->soapClient = $soapClient;
    }
    
    /**
     * 
     * @return \ExploitIt\Intickets\Response\GetSchemaSvgResponseObj
     */
    public function call(){
        return $this->soapClient->getSchemaSVG($this);
    }

    /**
     * @return GetSchemaRequestObj
     */
    public function setSchemaId(int $schema_id) : GetSchemaSvgRequestObj
    {
        $this->schema_id = $schema_id;
        return $this;
    }


}

