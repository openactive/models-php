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
            "childMinAge" => "childMinAge",
            "childMaxAge" => "childMaxAge",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Minimal age of the child.
     *
     *
     * @var float|null
     */
    protected $childMinAge;

    /**
     * Maximal age of the child.
     *
     *
     * @var float|null
     */
    protected $childMaxAge;

    /**
     * @return float|null
     */
    public function getChildMinAge()
    {
        return $this->childMinAge;
    }

    /**
     * @param float|null $childMinAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChildMinAge($childMinAge)
    {
        $types = array(
            "float",
            "null",
        );

        $childMinAge = self::checkTypes($childMinAge, $types);

        $this->childMinAge = $childMinAge;
    }

    /**
     * @return float|null
     */
    public function getChildMaxAge()
    {
        return $this->childMaxAge;
    }

    /**
     * @param float|null $childMaxAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChildMaxAge($childMaxAge)
    {
        $types = array(
            "float",
            "null",
        );

        $childMaxAge = self::checkTypes($childMaxAge, $types);

        $this->childMaxAge = $childMaxAge;
    }

}
