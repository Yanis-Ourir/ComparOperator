<?php

class Destination
{
    private $id;
    private $location;
    private $price;
    private $tourOperatorId;

    public function __construct($data)
    {
    }

    /* SETTERS */

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setTourOperatorId($tourOperatorId)
    {
        $this->tourOperatorId = $tourOperatorId;
    }

    /* FIN SETTERS */

    /* GETTERS */

    public function getId()
    {
        return $this->id;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getTourOpeatorId()
    {
        return $this->id;
    }

    /* FIN GETTERS */
}
