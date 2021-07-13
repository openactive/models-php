<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AskAction extends \OpenActive\Models\SchemaOrg\CommunicateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AskAction";
    }

    public static function fieldList() {
        $fields = [
            "question" => "question",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of object. A question.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Question|string
     */
    protected $question;

    /**
     * @return \OpenActive\Models\SchemaOrg\Question|string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Question|string $question
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setQuestion($question)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Question",
            "string",
        ];

        $question = self::checkTypes($question, $types);

        $this->question = $question;
    }

}
