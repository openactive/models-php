<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Book extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Book";
    }

    public static function fieldList() {
        $fields = [
            "numberOfPages" => "numberOfPages",
            "bookFormat" => "bookFormat",
            "illustrator" => "illustrator",
            "isbn" => "isbn",
            "bookEdition" => "bookEdition",
            "abridged" => "abridged",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The number of pages in the book.
     *
     *
     * @var int|null
     */
    protected $numberOfPages;

    /**
     * The format of the book.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BookFormatType|null
     */
    protected $bookFormat;

    /**
     * The illustrator of the book.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $illustrator;

    /**
     * The ISBN of the book.
     *
     *
     * @var string
     */
    protected $isbn;

    /**
     * The edition of the book.
     *
     *
     * @var string
     */
    protected $bookEdition;

    /**
     * Indicates whether the book is an abridged edition.
     *
     *
     * @var bool|null
     */
    protected $abridged;

    /**
     * @return int|null
     */
    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    /**
     * @param int|null $numberOfPages
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfPages($numberOfPages)
    {
        $types = [
            "int",
            "null",
        ];

        $numberOfPages = self::checkTypes($numberOfPages, $types);

        $this->numberOfPages = $numberOfPages;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\BookFormatType|null
     */
    public function getBookFormat()
    {
        return $this->bookFormat;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\BookFormatType|null $bookFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBookFormat($bookFormat)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\BookFormatType",
            "null",
        ];

        $bookFormat = self::checkTypes($bookFormat, $types);

        $this->bookFormat = $bookFormat;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getIllustrator()
    {
        return $this->illustrator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $illustrator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIllustrator($illustrator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $illustrator = self::checkTypes($illustrator, $types);

        $this->illustrator = $illustrator;
    }

    /**
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsbn($isbn)
    {
        $types = [
            "string",
        ];

        $isbn = self::checkTypes($isbn, $types);

        $this->isbn = $isbn;
    }

    /**
     * @return string
     */
    public function getBookEdition()
    {
        return $this->bookEdition;
    }

    /**
     * @param string $bookEdition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBookEdition($bookEdition)
    {
        $types = [
            "string",
        ];

        $bookEdition = self::checkTypes($bookEdition, $types);

        $this->bookEdition = $bookEdition;
    }

    /**
     * @return bool|null
     */
    public function getAbridged()
    {
        return $this->abridged;
    }

    /**
     * @param bool|null $abridged
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbridged($abridged)
    {
        $types = [
            "bool",
            "null",
        ];

        $abridged = self::checkTypes($abridged, $types);

        $this->abridged = $abridged;
    }

}
