<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Claim extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Claim";
    }

    public static function fieldList() {
        $fields = [
            "firstAppearance" => "firstAppearance",
            "appearance" => "appearance",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates the first known occurence of a [[Claim]] in some [[CreativeWork]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $firstAppearance;

    /**
     * Indicates an occurence of a [[Claim]] in some [[CreativeWork]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $appearance;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getFirstAppearance()
    {
        return $this->firstAppearance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $firstAppearance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFirstAppearance($firstAppearance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $firstAppearance = self::checkTypes($firstAppearance, $types);

        $this->firstAppearance = $firstAppearance;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $appearance
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAppearance($appearance)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $appearance = self::checkTypes($appearance, $types);

        $this->appearance = $appearance;
    }

}
