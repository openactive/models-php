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
     * Indicates the first known occurence of a <a class="localLink" href="https://schema.org/Claim">Claim</a> in some <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $firstAppearance;

    /**
     * Indicates an occurence of a <a class="localLink" href="https://schema.org/Claim">Claim</a> in some <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a>.
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $appearance = self::checkTypes($appearance, $types);

        $this->appearance = $appearance;
    }

}
