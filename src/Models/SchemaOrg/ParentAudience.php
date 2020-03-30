<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ParentAudience extends \OpenActive\Models\SchemaOrg\PeopleAudience
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ParentAudience";
    }

    public static function fieldList() {
        $fields = [
            "childMaxAge" => "childMaxAge",
            "childMinAge" => "childMinAge",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Maximal age of the child.
     *
     *
     * @var null|float
     */
    protected $childMaxAge;

    /**
     * Minimal age of the child.
     *
     *
     * @var null|float
     */
    protected $childMinAge;

    /**
     * @return null|float
     */
    public function getChildMaxAge()
    {
        return $this->childMaxAge;
    }

    /**
     * @param null|float $childMaxAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChildMaxAge($childMaxAge)
    {
        $types = array(
            "null",
            "float",
        );

        $childMaxAge = self::checkTypes($childMaxAge, $types);

        $this->childMaxAge = $childMaxAge;
    }

    /**
     * @return null|float
     */
    public function getChildMinAge()
    {
        return $this->childMinAge;
    }

    /**
     * @param null|float $childMinAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChildMinAge($childMinAge)
    {
        $types = array(
            "null",
            "float",
        );

        $childMinAge = self::checkTypes($childMinAge, $types);

        $this->childMinAge = $childMinAge;
    }

}
