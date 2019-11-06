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

    /**
     * A sub property of participant. The person/organization being supported.
     *
     *
     * @var Person|Organization
     */
    protected $endorsee;

    /**
     * @return Person|Organization
     */
    public function getEndorsee()
    {
        return $this->endorsee;
    }

    /**
     * @param Person|Organization $endorsee
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndorsee($endorsee)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $endorsee = self::checkTypes($endorsee, $types);

        $this->endorsee = $endorsee;
    }

}
