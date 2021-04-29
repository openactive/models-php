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
     * @var Number|null
     */
    protected $childMinAge;

    /**
     * Maximal age of the child.
     *
     *
     * @var Number|null
     */
    protected $childMaxAge;

    /**
     * @return Number|null
     */
    public function getChildMinAge()
    {
        return $this->childMinAge;
    }

    /**
     * @param Number|null $childMinAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChildMinAge($childMinAge)
    {
        $types = [
            "Number",
            "null",
        ];

        $childMinAge = self::checkTypes($childMinAge, $types);

        $this->childMinAge = $childMinAge;
    }

    /**
     * @return Number|null
     */
    public function getChildMaxAge()
    {
        return $this->childMaxAge;
    }

    /**
     * @param Number|null $childMaxAge
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setChildMaxAge($childMaxAge)
    {
        $types = [
            "Number",
            "null",
        ];

        $childMaxAge = self::checkTypes($childMaxAge, $types);

        $this->childMaxAge = $childMaxAge;
    }

}
