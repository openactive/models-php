<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BorrowAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * A sub property of participant. The person that lends the object being borrowed.
     *
     *
     * @var Person|Organization
     */
    protected $lender;

    /**
     * @return Person|Organization
     */
    public function getLender()
    {
        return $this->lender;
    }

    /**
     * @param Person|Organization $lender
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLender($lender)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $lender = self::checkTypes($lender, $types);

        $this->lender = $lender;
    }

}
