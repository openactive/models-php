<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Rating extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * The rating for the content.<br/><br/>
     * 
     * Usage guidelines:<br/><br/>
     * 
     * <ul>
     * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
     * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
     * </ul>
     * 
     *
     *
     * @var decimal|string|null
     */
    protected $ratingValue;

    /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
     *
     *
     * @var string|decimal|null
     */
    protected $bestRating;

    /**
     * This Review or Rating is relevant to this part or facet of the itemReviewed.
     *
     *
     * @var string
     */
    protected $reviewAspect;

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     *
     * @var Person|Organization
     */
    protected $author;

    /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     *
     *
     * @var decimal|string|null
     */
    protected $worstRating;

    /**
     * @return decimal|string|null
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * @param decimal|string|null $ratingValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRatingValue($ratingValue)
    {
        $types = array(
            "decimal",
            "string",
            "null",
        );

        $ratingValue = self::checkTypes($ratingValue, $types);

        $this->ratingValue = $ratingValue;
    }

    /**
     * @return string|decimal|null
     */
    public function getBestRating()
    {
        return $this->bestRating;
    }

    /**
     * @param string|decimal|null $bestRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBestRating($bestRating)
    {
        $types = array(
            "string",
            "decimal",
            "null",
        );

        $bestRating = self::checkTypes($bestRating, $types);

        $this->bestRating = $bestRating;
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
        $types = array(
            "string",
        );

        $reviewAspect = self::checkTypes($reviewAspect, $types);

        $this->reviewAspect = $reviewAspect;
    }

    /**
     * @return Person|Organization
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param Person|Organization $author
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthor($author)
    {
        $types = array(
            "Person",
            "Organization",
        );

        $author = self::checkTypes($author, $types);

        $this->author = $author;
    }

    /**
     * @return decimal|string|null
     */
    public function getWorstRating()
    {
        return $this->worstRating;
    }

    /**
     * @param decimal|string|null $worstRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorstRating($worstRating)
    {
        $types = array(
            "decimal",
            "string",
            "null",
        );

        $worstRating = self::checkTypes($worstRating, $types);

        $this->worstRating = $worstRating;
    }

}
