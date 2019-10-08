<?php

namespace OpenActive\Model;

class BaseModel
{
    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public static function deserialize($data)
    {
        $class = get_called_class();
        $self = new $class([]);

        foreach ($data as $key => $value) {
            $attr_name = self::snakeName($key);

            if (is_scalar($value)) {
                $self->$attr_name = $value;
            } else {
                $self->$attr_name = ModelFactory::deserialize($value);
            }
        }
        return $self;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            $method = 'get' . self::canonicalizeName($name);
            return $this->$method();
        }
    }

    public function __set($name, $value)
    {
        if (property_exists($this, "_${name}")) {
            $method = 'set' . self::canonicalizeName($name);
            $this->$method($value);
        }
    }

    public function __isset($name)
    {
        if ($this->__get($name) === null) {
            return false;
        }
    }

    public static function canonicalizeName($name)
    {
        return preg_replace_callback(
            '/(?:^|_)([a-z])/',
            static function ($matches) {
                return strtoupper($matches[1]);
            },
            $name
        );
    }

    public static function snakeName($name)
    {
        return strtolower(preg_replace_callback(
            '/(?<=[a-z])([A-Z])/',
            static function ($matches) {
                return '_' . $matches[1];
            },
            $name
        ));
    }
}
