<?php

namespace ExploitIt\Intickets\Models;

class Hall
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $short_description;

    /**
     * @var string
     */
    private $img_link;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getShortDescription() : string
    {
        return $this->short_description;
    }

    /**
     * @return string
     */
    public function getImgLink() : string
    {
        return $this->img_link;
    }


}

