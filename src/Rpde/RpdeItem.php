<?php

namespace OpenActive\Rpde;

use OpenActive\Concerns\TypeChecker;
use OpenActive\Contracts\TypeCheckerInterface;
use OpenActive\Helpers\Str;

/**
 *
 */
class RpdeItem implements TypeCheckerInterface
{
    use TypeChecker;

    /**
     * @var \OpenActive\Rpde\RpdeState
     */
    protected $state;

    /**
     * @var \OpenActive\Rpde\RpdeKind
     */
    protected $kind;

    /**
     * @var string|int
     */
    protected $id;

    /**
     * @var int
     */
    protected $modified;

    /**
     * @var \OpenActive\BaseModel
     */
    protected $data;

    /**
     * Create a new model instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            // Make sure setter method is cased properly
            $setterName = "set" . Str::pascal($key);

            if (method_exists($this, $setterName) === true) {
                $this->$setterName($value);
            }
        }
    }


    public static function fieldList() {
        return [
            'state' => 'state',
            'kind' => 'kind',
            'id' => 'id',
            'modified' => 'modified',
            'data' => 'data'
        ];
    }

    /**
     * @return \OpenActive\Rpde\RpdeState
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
     * @return string|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string|int
     * @return void
     */
    public function setId($id)
    {
        $types = array(
            "string",
            "int",
        );

        $id = self::checkTypes($id, $types);

        $this->id = $id;
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
     * @return \OpenActive\BaseModel|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \OpenActive\BaseModel|null
     * @return void
     */
    public function setData($data)
    {
        $types = array(
            "\OpenActive\BaseModel",
            "null",
        );

        $data = self::checkTypes($data, $types);

        $this->data = $data;
    }
}
