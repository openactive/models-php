<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LegislationObject extends \OpenActive\Models\SchemaOrg\MediaObject
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LegislationObject";
    }

    public static function fieldList() {
        $fields = [
            "legislationLegalValue" => "legislationLegalValue",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The legal value of this legislation file. The same legislation can be written in multiple files with different legal values. Typically a digitally signed PDF have a "stronger" legal value than the HTML file of the same act.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\LegalValueLevel|null
     */
    protected $legislationLegalValue;

    /**
     * @return \OpenActive\Enums\SchemaOrg\LegalValueLevel|null
     */
    public function getLegislationLegalValue()
    {
        return $this->legislationLegalValue;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\LegalValueLevel|null $legislationLegalValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLegislationLegalValue($legislationLegalValue)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\LegalValueLevel",
            "null",
        ];

        $legislationLegalValue = self::checkTypes($legislationLegalValue, $types);

        $this->legislationLegalValue = $legislationLegalValue;
    }

}
