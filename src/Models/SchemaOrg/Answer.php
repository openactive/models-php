<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Answer extends \OpenActive\Models\SchemaOrg\Comment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Answer";
    }

    public static function fieldList() {
        $fields = [
            "answerExplanation" => "answerExplanation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A step-by-step or full explanation about Answer. Can outline how this Answer was achieved or contain more broad clarification or statement about it. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Comment|\OpenActive\Models\SchemaOrg\WebContent|string
     */
    protected $answerExplanation;

    /**
     * @return \OpenActive\Models\SchemaOrg\Comment|\OpenActive\Models\SchemaOrg\WebContent|string
     */
    public function getAnswerExplanation()
    {
        return $this->answerExplanation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Comment|\OpenActive\Models\SchemaOrg\WebContent|string $answerExplanation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAnswerExplanation($answerExplanation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Comment",
            "\OpenActive\Models\SchemaOrg\WebContent",
            "string",
        ];

        $answerExplanation = self::checkTypes($answerExplanation, $types);

        $this->answerExplanation = $answerExplanation;
    }

}
