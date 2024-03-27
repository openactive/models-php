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
            "bookEdition" => "bookEdition",
            "bookFormat" => "bookFormat",
            "abridged" => "abridged",
            "isbn" => "isbn",
            "illustrator" => "illustrator",
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
     * The edition of the book.
     *
     *
     * @var string
     */
    protected $bookEdition;

    /**
     * The format of the book.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BookFormatType|null
     */
    protected $bookFormat;

    /**
     * Indicates whether the book is an abridged edition.
     *
     *
     * @var bool|null
     */
    protected $abridged;

    /**
     * The ISBN of the book.
     *
     *
     * @var string
     */
    protected $isbn;

    /**
     * The illustrator of the book.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $illustrator;

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

}
