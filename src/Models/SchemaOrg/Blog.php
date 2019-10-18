<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Blog extends \OpenActive\Models\SchemaOrg\CreativeWork
{
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
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     *
     *
     * @var string
     */
    protected $issn;

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBlogPosts($blogPosts)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BlogPosting",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBlogPost($blogPost)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BlogPosting",
        );

        $blogPost = self::checkTypes($blogPost, $types);

        $this->blogPost = $blogPost;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIssn($issn)
    {
        $types = array(
            "string",
        );

        $issn = self::checkTypes($issn, $types);

        $this->issn = $issn;
    }

}
