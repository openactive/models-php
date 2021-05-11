<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MathSolver extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MathSolver";
    }

    public static function fieldList() {
        $fields = [
            "mathExpression" => "mathExpression",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A mathematical expression (e.g. 'x^2-3x=0') that may be solved for a specific variable, simplified, or transformed. This can take many formats, e.g. LaTeX, Ascii-Math, or math as you would write with a keyboard.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\SolveMathAction
     */
    protected $mathExpression;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\SolveMathAction
     */
    public function getMathExpression()
    {
        return $this->mathExpression;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\SolveMathAction $mathExpression
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMathExpression($mathExpression)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\SolveMathAction",
        ];

        $mathExpression = self::checkTypes($mathExpression, $types);

        $this->mathExpression = $mathExpression;
    }

}
