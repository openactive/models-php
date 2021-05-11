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
            "issn" => "issn",
            "blogPosts" => "blogPosts",
            "blogPost" => "blogPost",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     *
     *
     * @var string
     */
    protected $issn;

    /**
     * The postings that are part of this blog.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BlogPosting
     */
    protected $blogPosts;

    /**
     * A posting that is part of this blog.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BlogPosting
     */
    protected $blogPost;

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
     * @return \OpenActive\Models\SchemaOrg\BlogPosting
     */
    public function getBlogPosts()
    {
        return $this->blogPosts;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BlogPosting $blogPosts
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBlogPosts($blogPosts)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BlogPosting",
        ];

        $blogPosts = self::checkTypes($blogPosts, $types);

        $this->blogPosts = $blogPosts;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BlogPosting
     */
    public function getBlogPost()
    {
        return $this->blogPost;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BlogPosting $blogPost
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBlogPost($blogPost)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\BlogPosting",
        ];

        $blogPost = self::checkTypes($blogPost, $types);

        $this->blogPost = $blogPost;
    }

}
