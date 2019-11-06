<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SocialMediaPosting extends \OpenActive\Models\SchemaOrg\Article
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SocialMediaPosting";
    }

    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $sharedContent;

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getSharedContent()
    {
        return $this->sharedContent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $sharedContent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSharedContent($sharedContent)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $sharedContent = self::checkTypes($sharedContent, $types);

        $this->sharedContent = $sharedContent;
    }

}
