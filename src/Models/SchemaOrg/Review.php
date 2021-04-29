<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Review extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Review";
    }

    public static function fieldList() {
        $fields = [
            "reviewAspect" => "reviewAspect",
            "reviewBody" => "reviewBody",
            "itemReviewed" => "itemReviewed",
            "reviewRating" => "reviewRating",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     *
     * @var string
     */
    protected $reviewAspect;

    /**
     * The actual body of the review.
     *
     *
     * @var string
     */
    protected $reviewBody;

    /**
     * The item that is being reviewed/rated.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $itemReviewed;

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The ```reviewRating``` applies to rating given by the review. The [[aggregateRating]] property applies to the review itself, as a creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating
     */
    protected $reviewRating;

    /**
     * @return string
     */
    public function getReviewAspect()
    {
        return $this->reviewAspect;
    }

    /**
     * @param string $reviewAspect
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewAspect($reviewAspect)
    {
        $types = [
            "string",
        ];

        $reviewAspect = self::checkTypes($reviewAspect, $types);

        $this->reviewAspect = $reviewAspect;
    }

    /**
     * @return string
     */
    public function getReviewBody()
    {
        return $this->reviewBody;
    }

    /**
     * @param string $reviewBody
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewBody($reviewBody)
    {
        $types = [
            "string",
        ];

        $reviewBody = self::checkTypes($reviewBody, $types);

        $this->reviewBody = $reviewBody;
    }

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
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $itemReviewed = self::checkTypes($itemReviewed, $types);

        $this->itemReviewed = $itemReviewed;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Rating
     */
    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating $reviewRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewRating($reviewRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Rating",
        ];

        $reviewRating = self::checkTypes($reviewRating, $types);

        $this->reviewRating = $reviewRating;
    }

}
