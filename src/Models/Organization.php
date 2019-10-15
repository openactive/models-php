<?php

namespace OpenActive\Model;

class Organization extends BaseModel
{
    protected $email;
    protected $founder;
    protected $founding_date;
    protected $logo;
    protected $url;
    protected $founding_location;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function getFounder()
    {
        return $this->founder;
    }

    public function setFounder($founder)
    {
        return $this->founder = $founder;
    }

    public function getFoundingDate()
    {
        return $this->founding_date;
    }

    public function setFoundingDate($founding_date)
    {
        return $this->founding_date = $founding_date;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        return $this->logo = $logo;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        return $this->url = $url;
    }

    public function getFoundingLocation()
    {
        return $this->founding_location;
    }

    public function setFoundingLocation($founding_location)
    {
        return $this->founding_location = $founding_location;
    }
}
