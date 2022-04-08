<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Quotation extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Quotation";
    }

    public static function fieldList() {
        $fields = [
            "spokenByCharacter" => "spokenByCharacter",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The (e.g. fictional) character, Person or Organization to whom the quotation is attributed within the containing CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $spokenByCharacter;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getSpokenByCharacter()
    {
        return $this->spokenByCharacter;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $spokenByCharacter
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpokenByCharacter($spokenByCharacter)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $spokenByCharacter = self::checkTypes($spokenByCharacter, $types);

        $this->spokenByCharacter = $spokenByCharacter;
    }

}
