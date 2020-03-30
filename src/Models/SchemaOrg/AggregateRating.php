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
            "itemReviewed" => "itemReviewed",
            "reviewCount" => "reviewCount",
            "ratingCount" => "ratingCount",
        ];

        return array_merge(parent::fieldList(), $fields);
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
     * @var null|int
     */
    protected $reviewCount;

    /**
     * The count of total number of ratings.
     *
     *
     * @var null|int
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
     * @return null|int
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * @param null|int $reviewCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewCount($reviewCount)
    {
        $types = array(
            "null",
            "int",
        );

        $reviewCount = self::checkTypes($reviewCount, $types);

        $this->reviewCount = $reviewCount;
    }

    /**
     * @return null|int
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @param null|int $ratingCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRatingCount($ratingCount)
    {
        $types = array(
            "null",
            "int",
        );

        $ratingCount = self::checkTypes($ratingCount, $types);

        $this->ratingCount = $ratingCount;
    }

}
