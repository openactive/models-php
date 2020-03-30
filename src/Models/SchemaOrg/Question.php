<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Question extends \OpenActive\Models\SchemaOrg\CreativeWork
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
            "answerCount" => "answerCount",
            "acceptedAnswer" => "acceptedAnswer",
            "upvoteCount" => "upvoteCount",
            "suggestedAnswer" => "suggestedAnswer",
            "downvoteCount" => "downvoteCount",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of answers this question has received.
     *
     *
     * @var null|int
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
     * The number of upvotes this question, answer or comment has received from the community.
     *
     *
     * @var null|int
     */
    protected $upvoteCount;

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Answer|\OpenActive\Models\SchemaOrg\ItemList
     */
    protected $suggestedAnswer;

    /**
     * The number of downvotes this question, answer or comment has received from the community.
     *
     *
     * @var null|int
     */
    protected $downvoteCount;

    /**
     * @return null|int
     */
    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    /**
     * @param null|int $answerCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAnswerCount($answerCount)
    {
        $types = array(
            "null",
            "int",
        );

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Answer",
            "\OpenActive\Models\SchemaOrg\ItemList",
        );

        $acceptedAnswer = self::checkTypes($acceptedAnswer, $types);

        $this->acceptedAnswer = $acceptedAnswer;
    }

    /**
     * @return null|int
     */
    public function getUpvoteCount()
    {
        return $this->upvoteCount;
    }

    /**
     * @param null|int $upvoteCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUpvoteCount($upvoteCount)
    {
        $types = array(
            "null",
            "int",
        );

        $upvoteCount = self::checkTypes($upvoteCount, $types);

        $this->upvoteCount = $upvoteCount;
    }

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Answer",
            "\OpenActive\Models\SchemaOrg\ItemList",
        );

        $suggestedAnswer = self::checkTypes($suggestedAnswer, $types);

        $this->suggestedAnswer = $suggestedAnswer;
    }

    /**
     * @return null|int
     */
    public function getDownvoteCount()
    {
        return $this->downvoteCount;
    }

    /**
     * @param null|int $downvoteCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDownvoteCount($downvoteCount)
    {
        $types = array(
            "null",
            "int",
        );

        $downvoteCount = self::checkTypes($downvoteCount, $types);

        $this->downvoteCount = $downvoteCount;
    }

}
