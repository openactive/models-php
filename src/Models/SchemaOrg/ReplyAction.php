<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ReplyAction extends \OpenActive\Models\SchemaOrg\CommunicateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ReplyAction";
    }

    public static function fieldList() {
        $fields = [
            "resultComment" => "resultComment",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of result. The Comment created or sent as a result of this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Comment|string
     */
    protected $resultComment;

    /**
     * @return \OpenActive\Models\SchemaOrg\Comment|string
     */
    public function getResultComment()
    {
        return $this->resultComment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Comment|string $resultComment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setResultComment($resultComment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Comment",
            "string",
        ];

        $resultComment = self::checkTypes($resultComment, $types);

        $this->resultComment = $resultComment;
    }

}
