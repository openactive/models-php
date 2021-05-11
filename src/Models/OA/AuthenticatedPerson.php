<?php

namespace OpenActive\Models\OA;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.] 
 * This type is derived from https://schema.org/Person, which means that any of this type's properties within schema.org may also be used.
 *
 */
class AuthenticatedPerson extends \OpenActive\Models\OA\Person
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "beta:AuthenticatedPerson";
    }

    public static function fieldList() {
        $fields = [
            "accessToken" => "beta:accessToken",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * [NOTICE: This is a beta property, and is highly likely to change in future versions of this library.]
     * Token indicating the Broker's authorisation to book on behalf of a Customer.
     * 
     * If you are using this property, please join the discussion at proposal [#120](https://github.com/openactive/open-booking-api/issues/120).
     *
     *
     * @var string
     */
    protected $accessToken;

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessToken($accessToken)
    {
        $types = [
            "string",
        ];

        $accessToken = self::checkTypes($accessToken, $types);

        $this->accessToken = $accessToken;
    }

}
