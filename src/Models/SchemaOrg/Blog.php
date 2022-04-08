<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Blog extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Blog";
    }

    public static function fieldList() {
        $fields = [
            "blogPosts" => "blogPosts",
            "issn" => "issn",
            "blogPost" => "blogPost",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Indicates a post that is part of a [[Blog]]. Note that historically, what we term a "Blog" was once known as a "weblog", and that what we term a "BlogPosting" is now often colloquially referred to as a "blog".
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BlogPosting|string
     */
    protected $blogPosts;

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     *
     *
     * @var string
     */
    protected $issn;

    /**
     * A posting that is part of this blog.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BlogPosting|string
     */
    protected $blogPost;

    /**
     * @return \OpenActive\Models\SchemaOrg\BlogPosting|string
     */
    public function getBlogPosts()
    {
        return $this->blogPosts;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BlogPosting|string $blogPosts
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBlogPosts($blogPosts)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BlogPosting",
            "string",
        ];

        $blogPosts = self::checkTypes($blogPosts, $types);

        $this->blogPosts = $blogPosts;
    }

    /**
     * @return string
     */
    public function getIssn()
    {
        return $this->issn;
    }

    /**
     * @param string $issn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIssn($issn)
    {
        $types = [
            "string",
        ];

        $issn = self::checkTypes($issn, $types);

        $this->issn = $issn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BlogPosting|string
     */
    public function getBlogPost()
    {
        return $this->blogPost;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BlogPosting|string $blogPost
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBlogPost($blogPost)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BlogPosting",
            "string",
        ];

        $blogPost = self::checkTypes($blogPost, $types);

        $this->blogPost = $blogPost;
    }

}
