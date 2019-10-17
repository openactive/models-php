<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class EndorseAction extends \OpenActive\Models\SchemaOrg\ReactAction
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
