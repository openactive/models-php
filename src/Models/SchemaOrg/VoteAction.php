<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class VoteAction extends \OpenActive\Models\SchemaOrg\ChooseAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:VoteAction";
    }

    /**
     * A sub property of object. The candidate subject of this action.
     *
     *
     * @var Person
     */
    protected $candidate;

    /**
     * @return Person
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param Person $candidate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCandidate($candidate)
    {
        $types = array(
            "Person",
        );

        $candidate = self::checkTypes($candidate, $types);

        $this->candidate = $candidate;
    }

}
