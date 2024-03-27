<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Rating extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Rating";
    }

    public static function fieldList() {
        $fields = [
            "ratingExplanation" => "ratingExplanation",
            "author" => "author",
            "ratingValue" => "ratingValue",
            "reviewAspect" => "reviewAspect",
            "worstRating" => "worstRating",
            "bestRating" => "bestRating",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A short explanation (e.g. one to two sentences) providing background context and other information that led to the conclusion expressed in the rating. This is particularly applicable to ratings associated with "fact check" markup using [[ClaimReview]].
     *
     *
     * @var string
     */
    protected $ratingExplanation;

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $author;

    /**
     * The rating for the content.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *
     *
     * @var string|Number|null
     */
    protected $ratingValue;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     *
     * @var string
     */
    protected $reviewAspect;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     *
     *
     * @var string|Number|null
     */
    protected $worstRating;

    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
     *
     *
     * @var string|Number|null
     */
    protected $bestRating;

    /**
     * @return string
     */
    public function getRatingExplanation()
    {
        return $this->ratingExplanation;
    }

    /**
     * @param string $ratingExplanation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRatingExplanation($ratingExplanation)
    {
        $types = [
            "string",
        ];

        $ratingExplanation = self::checkTypes($ratingExplanation, $types);

        $this->ratingExplanation = $ratingExplanation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization|string $author
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthor($author)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $author = self::checkTypes($author, $types);

        $this->author = $author;
    }

    /**
     * @return string|Number|null
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * @param string|Number|null $ratingValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRatingValue($ratingValue)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $ratingValue = self::checkTypes($ratingValue, $types);

        $this->ratingValue = $ratingValue;
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
     * @return string|Number|null
     */
    public function getWorstRating()
    {
        return $this->worstRating;
    }

    /**
     * @param string|Number|null $worstRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorstRating($worstRating)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $worstRating = self::checkTypes($worstRating, $types);

        $this->worstRating = $worstRating;
    }

    /**
     * @return string|Number|null
     */
    public function getBestRating()
    {
        return $this->bestRating;
    }

    /**
     * @param string|Number|null $bestRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBestRating($bestRating)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $bestRating = self::checkTypes($bestRating, $types);

        $this->bestRating = $bestRating;
    }

}
