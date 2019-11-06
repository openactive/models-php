<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReplaceAction extends \OpenActive\Models\SchemaOrg\UpdateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReplaceAction";
    }

    /**
     * A sub property of object. The object that is being replaced.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $replacee;

    /**
     * A sub property of object. The object that replaces.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $replacer;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getReplacee()
    {
        return $this->replacee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $replacee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReplacee($replacee)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $replacee = self::checkTypes($replacee, $types);

        $this->replacee = $replacee;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getReplacer()
    {
        return $this->replacer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $replacer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReplacer($replacer)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $replacer = self::checkTypes($replacer, $types);

        $this->replacer = $replacer;
    }

}
