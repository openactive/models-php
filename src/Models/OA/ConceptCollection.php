<?php

namespace OpenActive\Models\OA;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class ConceptCollection extends \OpenActive\Models\OA\Collection
{
    /**
     * @return string[]|null
     */
    static public function getType()
    {
        return "beta:ConceptCollection";
    }

}
