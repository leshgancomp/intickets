<?php

namespace ExploitIt\Intickets\Models;

class NumberedShowSeatToLock
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $cost;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCost() : int
    {
        return $this->cost;
    }
    
    /**
     * 
     * @param type $id
     * @return $this
     */
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    
    /**
     * 
     * @param type $cost
     * @return $this
     */
    public function setCost($cost){
        $this->cost = $cost;
        return $this;
    }


}

