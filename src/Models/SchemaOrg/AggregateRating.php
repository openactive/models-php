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

    public static function fieldList() {
        $fields = [
            "reviewCount" => "reviewCount",
            "itemReviewed" => "itemReviewed",
            "ratingCount" => "ratingCount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The count of total number of reviews.
     *
     *
     * @var int|null
     */
    protected $reviewCount;

    /**
     * The item that is being reviewed/rated.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $itemReviewed;

    /**
     * The count of total number of ratings.
     *
     *
     * @var int|null
     */
    protected $ratingCount;

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
        $types = [
            "int",
            "null",
        ];

        $reviewCount = self::checkTypes($reviewCount, $types);

        $this->reviewCount = $reviewCount;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing|string
     */
    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing|string $itemReviewed
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemReviewed($itemReviewed)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
            "string",
        ];

        $itemReviewed = self::checkTypes($itemReviewed, $types);

        $this->itemReviewed = $itemReviewed;
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
        $types = [
            "int",
            "null",
        ];

        $ratingCount = self::checkTypes($ratingCount, $types);

        $this->ratingCount = $ratingCount;
    }

}
