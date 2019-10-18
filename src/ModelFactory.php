<?php

namespace OpenActive;

class ModelFactory
{
    public static $MAPPING = [
        "organization" => Models\Organization::class,
        "person" => Models\Person::class,
        "place" => Models\Place::class
    ];

    public static function deserialize($data)
    {
        $type = $data['type'];

        if (array_key_exists($type, self::$MAPPING)) {
            $klass = self::$MAPPING[$type];

            return $klass::deserialize($data);
        }
    }
}
