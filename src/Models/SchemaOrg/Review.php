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
            "associatedReview" => "associatedReview",
            "positiveNotes" => "positiveNotes",
            "associatedClaimReview" => "associatedClaimReview",
            "reviewBody" => "reviewBody",
            "itemReviewed" => "itemReviewed",
            "reviewAspect" => "reviewAspect",
            "reviewRating" => "reviewRating",
            "negativeNotes" => "negativeNotes",
            "associatedMediaReview" => "associatedMediaReview",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An associated [[Review]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $associatedReview;

    /**
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
     * 
     * In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described.
     * 
     * The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most positive is at the beginning of the list).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\ListItem|string
     */
    protected $positiveNotes;

    /**
     * An associated [[ClaimReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $associatedClaimReview;

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
     * @var \OpenActive\Models\SchemaOrg\Thing|string
     */
    protected $itemReviewed;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     *
     * @var string
     */
    protected $reviewAspect;

    /**
     * The rating given in this review. Note that reviews can themselves be rated. The ```reviewRating``` applies to rating given by the review. The [[aggregateRating]] property applies to the review itself, as a creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating|string
     */
    protected $reviewRating;

    /**
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry 
     * 
     * In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described. Since product descriptions 
     * tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]].
     * 
     * The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the beginning of the list).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\ListItem|string
     */
    protected $negativeNotes;

    /**
     * An associated [[MediaReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $associatedMediaReview;

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
     * @return \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\ListItem|string
     */
    public function getPositiveNotes()
    {
        return $this->positiveNotes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\ListItem|string $positiveNotes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPositiveNotes($positiveNotes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\WebContent",
            "\OpenActive\Models\SchemaOrg\ListItem",
            "string",
        ];

        $positiveNotes = self::checkTypes($positiveNotes, $types);

        $this->positiveNotes = $positiveNotes;
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
     * @return \OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\ListItem|string
     */
    public function getNegativeNotes()
    {
        return $this->negativeNotes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\WebContent|\OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\ListItem|string $negativeNotes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNegativeNotes($negativeNotes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\WebContent",
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\ListItem",
            "string",
        ];

        $negativeNotes = self::checkTypes($negativeNotes, $types);

        $this->negativeNotes = $negativeNotes;
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

}
