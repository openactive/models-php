<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class LendAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
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
     * @throws \Exception If the provided argument is not of a supported type.
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
