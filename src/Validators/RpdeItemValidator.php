<?php

namespace OpenActive\Validators;

use OpenActive\Concerns\TypeChecker;
use OpenActive\Rpde\RpdeItem;

class RpdeItemValidator implements ValidatorInterface
{
    use TypeChecker;

    public function run($value)
    {
        if ($value instanceof RpdeItem) {
            return true;
        }
        if (is_object($value)) {
            $value = (array) $value;
        }

        if (!isset($value['state'], $value['kind'], $value['id'], $value['modified'])) {
            return false;
        }

        if ('deleted' === $value['state']) {
            return true;
        }

        return isset($value['data']);
    }

    public function coerce($value)
    {
        if ($value instanceof RpdeItem) {
            return $value;
        }
        return new RpdeItem($value);
    }
}
