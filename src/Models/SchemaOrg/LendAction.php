<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LendAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:LendAction";
    }

    public static function fieldList() {
        $fields = [
            "borrower" => "borrower",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of participant. The person that borrows the object being lent.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $borrower;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getBorrower()
    {
        return $this->borrower;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $borrower
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBorrower($borrower)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $borrower = self::checkTypes($borrower, $types);

        $this->borrower = $borrower;
    }

}
