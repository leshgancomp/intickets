<?php

namespace ExploitIt\Intickets\Request;

class GetSchemaRequestObj
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
     * @return \ExploitIt\Intickets\Response\GetSchemaResponseObj
     */
    public function call(){
        return $this->soapClient->getSchema($this);
    }

    /**
     * @return GetSchemaRequestObj
     */
    public function setSchemaId(int $schema_id) : GetSchemaRequestObj
    {
        $this->schema_id = $schema_id;
        return $this;
    }


}

