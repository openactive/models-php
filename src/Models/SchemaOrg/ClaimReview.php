<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ClaimReview extends \OpenActive\Models\SchemaOrg\Review
{
    /**
     * A short summary of the specific claims reviewed in a ClaimReview.
     *
     *
     * @var string
     */
    protected $claimReviewed;

    /**
     * @return string
     */
    public function getClaimReviewed()
    {
        return $this->claimReviewed;
    }

    /**
     * @param string $claimReviewed
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setClaimReviewed($claimReviewed)
    {
        $types = array(
            "string",
        );

        $claimReviewed = self::checkTypes($claimReviewed, $types);

        $this->claimReviewed = $claimReviewed;
    }

}
