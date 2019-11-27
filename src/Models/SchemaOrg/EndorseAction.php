<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class EndorseAction extends \OpenActive\Models\SchemaOrg\ReactAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:EndorseAction";
    }

    public static function fieldList() {
        $fields = [
            "endorsee" => "endorsee",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of participant. The person/organization being supported.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $endorsee;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getEndorsee()
    {
        return $this->endorsee;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $endorsee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndorsee($endorsee)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $endorsee = self::checkTypes($endorsee, $types);

        $this->endorsee = $endorsee;
    }

}
