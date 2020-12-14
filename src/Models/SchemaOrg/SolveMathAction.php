<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SolveMathAction extends \OpenActive\Models\SchemaOrg\Action
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SolveMathAction";
    }

    public static function fieldList() {
        $fields = [
            "eduQuestionType" => "eduQuestionType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice", "Open ended", "Flashcard".
     *
     *
     * @var string
     */
    protected $eduQuestionType;

    /**
     * @return string
     */
    public function getEduQuestionType()
    {
        return $this->eduQuestionType;
    }

    /**
     * @param string $eduQuestionType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEduQuestionType($eduQuestionType)
    {
        $types = [
            "string",
        ];

        $eduQuestionType = self::checkTypes($eduQuestionType, $types);

        $this->eduQuestionType = $eduQuestionType;
    }

}
