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

    public static function fieldList() {
        $fields = [
            "candidate" => "candidate",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of object. The candidate subject of this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $candidate;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $candidate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCandidate($candidate)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $candidate = self::checkTypes($candidate, $types);

        $this->candidate = $candidate;
    }

}
