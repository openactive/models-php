<?php

namespace OpenActive\Model;

class Place extends BaseModel
{
    protected $address;

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        return $this->address = $address;
    }
}
