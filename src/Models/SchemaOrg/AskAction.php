<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class AskAction extends \OpenActive\Models\SchemaOrg\CommunicateAction
{
    /**
     * A sub property of object. A question.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Question
     */
    protected $question;

    /**
     * @return \OpenActive\Models\SchemaOrg\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Question $question
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setQuestion($question)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Question",
        );

        $question = self::checkTypes($question, $types);

        $this->question = $question;
    }

}
