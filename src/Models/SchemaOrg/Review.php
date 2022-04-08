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
            "reviewRating" => "reviewRating",
            "itemReviewed" => "itemReviewed",
            "negativeNotes" => "negativeNotes",
            "reviewAspect" => "reviewAspect",
            "associatedClaimReview" => "associatedClaimReview",
            "positiveNotes" => "positiveNotes",
            "associatedReview" => "associatedReview",
            "associatedMediaReview" => "associatedMediaReview",
            "reviewBody" => "reviewBody",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The ```reviewRating``` applies to rating given by the review. The [[aggregateRating]] property applies to the review itself, as a creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating|string
     */
    protected $reviewRating;

    /**
     * The item that is being reviewed/rated.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $itemReviewed;

    /**
     * Indicates, in the context of a [[Review]] (e.g. framed as 'pro' vs 'con' considerations), negative considerations - either as unstructured text, or a list.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ListItem|string|\OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\ItemList
     */
    protected $negativeNotes;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     *
     * @var string
     */
    protected $reviewAspect;

    /**
     * An associated [[ClaimReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $associatedClaimReview;

    /**
     * Indicates, in the context of a [[Review]] (e.g. framed as 'pro' vs 'con' considerations), positive considerations - either as unstructured text, or a list.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|string|\OpenActive\Models\SchemaOrg\ListItem|\OpenActive\Models\SchemaOrg\ItemList
     */
    protected $positiveNotes;

    /**
     * An associated [[Review]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $associatedReview;

    /**
     * An associated [[MediaReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $associatedMediaReview;

    /**
     * The actual body of the review.
     *
     *
     * @var string
     */
    protected $reviewBody;

    /**
     * @return \OpenActive\Models\SchemaOrg\Rating|string
     */
    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating|string $reviewRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviewRating($reviewRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Rating",
            "string",
        ];

        $reviewRating = self::checkTypes($reviewRating, $types);

        $this->reviewRating = $reviewRating;
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
     * @return \OpenActive\Models\SchemaOrg\ListItem|string|\OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\ItemList
     */
    public function getNegativeNotes()
    {
        return $this->negativeNotes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ListItem|string|\OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\ItemList $negativeNotes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNegativeNotes($negativeNotes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ListItem",
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
            "\OpenActive\Models\SchemaOrg\ItemList",
        ];

        $negativeNotes = self::checkTypes($negativeNotes, $types);

        $this->negativeNotes = $negativeNotes;
    }

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
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getAssociatedClaimReview()
    {
        return $this->associatedClaimReview;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $associatedClaimReview
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedClaimReview($associatedClaimReview)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $associatedClaimReview = self::checkTypes($associatedClaimReview, $types);

        $this->associatedClaimReview = $associatedClaimReview;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\WebContent|string|\OpenActive\Models\SchemaOrg\ListItem|\OpenActive\Models\SchemaOrg\ItemList
     */
    public function getPositiveNotes()
    {
        return $this->positiveNotes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|string|\OpenActive\Models\SchemaOrg\ListItem|\OpenActive\Models\SchemaOrg\ItemList $positiveNotes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPositiveNotes($positiveNotes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
            "\OpenActive\Models\SchemaOrg\ListItem",
            "\OpenActive\Models\SchemaOrg\ItemList",
        ];

        $positiveNotes = self::checkTypes($positiveNotes, $types);

        $this->positiveNotes = $positiveNotes;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getAssociatedReview()
    {
        return $this->associatedReview;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $associatedReview
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedReview($associatedReview)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $associatedReview = self::checkTypes($associatedReview, $types);

        $this->associatedReview = $associatedReview;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getAssociatedMediaReview()
    {
        return $this->associatedMediaReview;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $associatedMediaReview
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedMediaReview($associatedMediaReview)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $associatedMediaReview = self::checkTypes($associatedMediaReview, $types);

        $this->associatedMediaReview = $associatedMediaReview;
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

}
