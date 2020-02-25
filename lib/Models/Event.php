<?php

namespace ExploitIt\Intickets\Models;

class Event
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
    private $age_category;

    /**
     * @var string
     */
    private $short_description;

    /**
     * @var string
     */
    private $img_link;

    /**
     * @var string
     */
    private $organizer_taxpayer_number;

    /**
     * @var string
     */
    private $organizer_name;

    /**
     * @var string
     */
    private $organizer_address;

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
    public function getAgeCategory() : string
    {
        return $this->age_category;
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

    /**
     * @return string
     */
    public function getOrganizerTaxpayerNumber() : string
    {
        return $this->organizer_taxpayer_number;
    }

    /**
     * @return string
     */
    public function getOrganizerName() : string
    {
        return $this->organizer_name;
    }

    /**
     * @return string
     */
    public function getOrganizerAddress() : string
    {
        return $this->organizer_address;
    }


}

