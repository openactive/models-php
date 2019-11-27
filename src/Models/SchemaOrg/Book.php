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
            "illustrator" => "illustrator",
            "bookFormat" => "bookFormat",
            "bookEdition" => "bookEdition",
            "isbn" => "isbn",
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
     * The illustrator of the book.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $illustrator;

    /**
     * The format of the book.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\BookFormatType|null
     */
    protected $bookFormat;

    /**
     * The edition of the book.
     *
     *
     * @var string
     */
    protected $bookEdition;

    /**
     * The ISBN of the book.
     *
     *
     * @var string
     */
    protected $isbn;

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
        $types = array(
            "int",
            "null",
        );

        $numberOfPages = self::checkTypes($numberOfPages, $types);

        $this->numberOfPages = $numberOfPages;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getIllustrator()
    {
        return $this->illustrator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $illustrator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIllustrator($illustrator)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $illustrator = self::checkTypes($illustrator, $types);

        $this->illustrator = $illustrator;
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
        $types = array(
            "\OpenActive\Enums\SchemaOrg\BookFormatType",
            "null",
        );

        $bookFormat = self::checkTypes($bookFormat, $types);

        $this->bookFormat = $bookFormat;
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
        $types = array(
            "string",
        );

        $bookEdition = self::checkTypes($bookEdition, $types);

        $this->bookEdition = $bookEdition;
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
        $types = array(
            "string",
        );

        $isbn = self::checkTypes($isbn, $types);

        $this->isbn = $isbn;
    }

}
