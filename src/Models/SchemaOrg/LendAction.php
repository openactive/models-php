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
    static public function getType()
    {
        return "schema:LendAction";
    }

    /**
     * A sub property of participant. The person that borrows the object being lent.
     *
     *
     * @var Person
     */
    protected $borrower;

    /**
     * @return Person
     */
    public function getBorrower()
    {
        return $this->borrower;
    }

    /**
     * @param Person $borrower
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBorrower($borrower)
    {
        $types = array(
            "Person",
        );

        $borrower = self::checkTypes($borrower, $types);

        $this->borrower = $borrower;
    }

}
