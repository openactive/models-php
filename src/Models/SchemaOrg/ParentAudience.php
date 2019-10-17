<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class ParentAudience extends \OpenActive\Models\SchemaOrg\PeopleAudience
{
    /**
     * Maximal age of the child.
     *
     *
     * @var decimal|null
     */
    protected $childMaxAge;

    /**
     * Minimal age of the child.
     *
     *
     * @var decimal|null
     */
    protected $childMinAge;

    /**
     * @return decimal|null
     */
    public function getChildMaxAge()
    {
        return $this->childMaxAge;
    }

    /**
     * @param decimal|null $childMaxAge
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setChildMaxAge($childMaxAge)
    {
        $types = array(
            "decimal",
            "null",
        );

        $childMaxAge = self::checkTypes($childMaxAge, $types);

        $this->childMaxAge = $childMaxAge;
    }

    /**
     * @return decimal|null
     */
    public function getChildMinAge()
    {
        return $this->childMinAge;
    }

    /**
     * @param decimal|null $childMinAge
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setChildMinAge($childMinAge)
    {
        $types = array(
            "decimal",
            "null",
        );

        $childMinAge = self::checkTypes($childMinAge, $types);

        $this->childMinAge = $childMinAge;
    }

}
