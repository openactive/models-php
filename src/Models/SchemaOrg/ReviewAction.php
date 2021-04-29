<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReviewAction extends \OpenActive\Models\SchemaOrg\AssessAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReviewAction";
    }

    public static function fieldList() {
        $fields = [
            "resultReview" => "resultReview",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of result. The review that resulted in the performing of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $resultReview;

    /**
     * @return \OpenActive\Models\SchemaOrg\Review
     */
    public function getResultReview()
    {
        return $this->resultReview;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review $resultReview
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setResultReview($resultReview)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
        ];

        $resultReview = self::checkTypes($resultReview, $types);

        $this->resultReview = $resultReview;
    }

}
