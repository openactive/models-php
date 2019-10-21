<?php

namespace OpenActive\Rpde;

use OpenActive\BaseModel;

/**
 *
 */
class RpdeItem extends BaseModel
{
    /**
     * @var RpdeState
     */
    protected $state;

    /**
     * @var RpdeKind
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
     * @param RpdeState
     * @return void
     */
    public function setState($state)
    {
        $types = array(
            "RpdeState",
        );

        $state = self::checkTypes($state, $types);

        $this->state = $state;
    }

    /**
     * @return RpdeKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param RpdeKind
     * @return void
     */
    public function setKind($kind)
    {
        $types = array(
            "RpdeKind",
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
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array
     * @return void
     */
    public function setData($data)
    {
        $types = array(
            "array",
        );

        $data = self::checkTypes($data, $types);

        $this->data = $data;
    }
}
