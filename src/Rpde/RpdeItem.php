<?php

namespace OpenActive\Rpde;

use OpenActive\BaseModel;

/**
 *
 */
class RpdeItem extends BaseModel
{
    /**
     * @var \OpenActive\Rpde\RpdeState
     */
    protected $state;

    /**
     * @var \OpenActive\Rpde\RpdeKind
     */
    protected $kind;

    /**
     * @var array
     */
    protected $data;

    /**
     * @return RpdeState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param \OpenActive\Rpde\RpdeState
     * @return void
     */
    public function setState($state)
    {
        $types = array(
            "\OpenActive\Rpde\RpdeState",
        );

        $state = self::checkTypes($state, $types);

        $this->state = $state;
    }

    /**
     * @return \OpenActive\Rpde\RpdeKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param \OpenActive\Rpde\RpdeKind
     * @return void
     */
    public function setKind($kind)
    {
        $types = array(
            "\OpenActive\Rpde\RpdeKind",
        );

        $kind = self::checkTypes($kind, $types);

        $this->kind = $kind;
    }

    /**
     * @return int
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param int
     * @return void
     */
    public function setModified($modified)
    {
        $types = array(
            "int",
        );

        $modified = self::checkTypes($modified, $types);

        $this->modified = $modified;
    }

    /**
     * @return \OpenActive\BaseModel[]|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \OpenActive\BaseModel[]|null
     * @return void
     */
    public function setData($data)
    {
        $types = array(
            "\OpenActive\BaseModel[]",
            "null",
        );

        $data = self::checkTypes($data, $types);

        $this->data = $data;
    }
}
