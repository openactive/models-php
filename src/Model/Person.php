<?php

namespace OpenActive\Model;

class Person extends BaseModel
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }
}
