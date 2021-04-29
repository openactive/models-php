<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Question extends \OpenActive\Models\SchemaOrg\Comment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Question";
    }

    public static function fieldList() {
        $fields = [
            "suggestedAnswer" => "suggestedAnswer",
            "answerCount" => "answerCount",
            "acceptedAnswer" => "acceptedAnswer",
            "eduQuestionType" => "eduQuestionType",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Answer|\OpenActive\Models\SchemaOrg\ItemList
     */
    protected $suggestedAnswer;

    /**
     * The number of answers this question has received.
     *
     *
     * @var int|null
     */
    protected $answerCount;

    /**
     * The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Answer|\OpenActive\Models\SchemaOrg\ItemList
     */
    protected $acceptedAnswer;

    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice", "Open ended", "Flashcard".
     *
     *
     * @var string
     */
    protected $eduQuestionType;

    /**
     * @return \OpenActive\Models\SchemaOrg\Answer|\OpenActive\Models\SchemaOrg\ItemList
     */
    public function getSuggestedAnswer()
    {
        return $this->suggestedAnswer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Answer|\OpenActive\Models\SchemaOrg\ItemList $suggestedAnswer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSuggestedAnswer($suggestedAnswer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Answer",
            "\OpenActive\Models\SchemaOrg\ItemList",
        ];

        $suggestedAnswer = self::checkTypes($suggestedAnswer, $types);

        $this->suggestedAnswer = $suggestedAnswer;
    }

    /**
     * @return int|null
     */
    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    /**
     * @param int|null $answerCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAnswerCount($answerCount)
    {
        $types = [
            "int",
            "null",
        ];

        $answerCount = self::checkTypes($answerCount, $types);

        $this->answerCount = $answerCount;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Answer|\OpenActive\Models\SchemaOrg\ItemList
     */
    public function getAcceptedAnswer()
    {
        return $this->acceptedAnswer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Answer|\OpenActive\Models\SchemaOrg\ItemList $acceptedAnswer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcceptedAnswer($acceptedAnswer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Answer",
            "\OpenActive\Models\SchemaOrg\ItemList",
        ];

        $acceptedAnswer = self::checkTypes($acceptedAnswer, $types);

        $this->acceptedAnswer = $acceptedAnswer;
    }

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
