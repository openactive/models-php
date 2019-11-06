<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AggregateRating extends \OpenActive\Models\SchemaOrg\Rating
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AggregateRating";
    }

    /**
     * The item that is being reviewed/rated.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $itemReviewed;

    /**
     * The count of total number of reviews.
     *
     *
     * @var int|null
     */
    protected $reviewCount;

    /**
     * The count of total number of ratings.
     *
     *
     * @var int|null
     */
    protected $ratingCount;

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $itemReviewed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemReviewed($itemReviewed)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $itemReviewed = self::checkTypes($itemReviewed, $types);

        $this->itemReviewed = $itemReviewed;
    }

    /**
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * @param int|null $reviewCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewCount($reviewCount)
    {
        $types = array(
            "int",
            "null",
        );

        $reviewCount = self::checkTypes($reviewCount, $types);

        $this->reviewCount = $reviewCount;
    }

    /**
     * @return int|null
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @param int|null $ratingCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRatingCount($ratingCount)
    {
        $types = array(
            "int",
            "null",
        );

        $ratingCount = self::checkTypes($ratingCount, $types);

        $this->ratingCount = $ratingCount;
    }

}
