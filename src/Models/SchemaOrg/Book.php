<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Book extends \OpenActive\Models\SchemaOrg\CreativeWork
{
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
     * The format of the book.
     *
     *
     * @var Schema.NET.BookFormatType|null
     */
    protected $bookFormat;

    /**
     * The illustrator of the book.
     *
     *
     * @var Person
     */
    protected $illustrator;

    /**
     * The number of pages in the book.
     *
     *
     * @var int|null
     */
    protected $numberOfPages;

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIsbn($isbn)
    {
        $types = array(
            "string",
        );

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBookEdition($bookEdition)
    {
        $types = array(
            "string",
        );

        $bookEdition = self::checkTypes($bookEdition, $types);

        $this->bookEdition = $bookEdition;
    }

    /**
     * @return Schema.NET.BookFormatType|null
     */
    public function getBookFormat()
    {
        return $this->bookFormat;
    }

    /**
     * @param Schema.NET.BookFormatType|null $bookFormat
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBookFormat($bookFormat)
    {
        $types = array(
            "Schema.NET.BookFormatType",
            "null",
        );

        $bookFormat = self::checkTypes($bookFormat, $types);

        $this->bookFormat = $bookFormat;
    }

    /**
     * @return Person
     */
    public function getIllustrator()
    {
        return $this->illustrator;
    }

    /**
     * @param Person $illustrator
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIllustrator($illustrator)
    {
        $types = array(
            "Person",
        );

        $illustrator = self::checkTypes($illustrator, $types);

        $this->illustrator = $illustrator;
    }

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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setNumberOfPages($numberOfPages)
    {
        $types = array(
            "int",
            "null",
        );

        $numberOfPages = self::checkTypes($numberOfPages, $types);

        $this->numberOfPages = $numberOfPages;
    }

}
