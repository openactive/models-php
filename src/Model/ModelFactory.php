<?php

namespace OpenActive\Model;

class ModelFactory
{
    public static $MAPPING = [
        "organization" => Organization::class,
        "person" => Person::class,
        "place" => Place::class
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
