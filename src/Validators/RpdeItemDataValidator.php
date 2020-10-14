<?php

namespace OpenActive\Validators;

use OpenActive\BaseModel;

class RpdeItemDataValidator implements ValidatorInterface
{
    public function run($value)
    {
        if ($value instanceof BaseModel) {
            return true;
        }
        if (null === $value) {
            return true;
        }
        if (is_object($value)) {
            $value = (array) $value;
        }
        return isset($value['@type'])
            && null !== $this->getValidClass($value['@type']);
    }

    public function coerce($value)
    {
        if ($value instanceof BaseModel) {
            return $value;
        }
        if (null === $value) {
            return $value;
        }

        $class = $this->getValidClass($value['@type']);
        if (null === $class) {
            throw new \InvalidArgumentException(sprintf('Invalid type %s given, no instantiable class', $value['@type']));
        }
        return new $class($value);
    }

    private function getValidClass($type)
    {
        $classOa = sprintf('\\OpenActive\\Models\\OA\\%s', $type);
        $classSchema = sprintf('\\OpenActive\\Models\\SchemaOrg\\%s', $type);

        if (class_exists($classOa)) {
            return $classOa;
        }
        if (class_exists($classSchema)) {
            return $classSchema;
        }
        return null;
    }
}
