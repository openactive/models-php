<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Product extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Product";
    }

    public static function fieldList() {
        $fields = [
            "isAccessoryOrSparePartFor" => "isAccessoryOrSparePartFor",
            "hasAdultConsideration" => "hasAdultConsideration",
            "gtin12" => "gtin12",
            "nsn" => "nsn",
            "material" => "material",
            "review" => "review",
            "award" => "award",
            "width" => "width",
            "countryOfOrigin" => "countryOfOrigin",
            "pattern" => "pattern",
            "category" => "category",
            "funding" => "funding",
            "mpn" => "mpn",
            "height" => "height",
            "keywords" => "keywords",
            "purchaseDate" => "purchaseDate",
            "hasEnergyConsumptionDetails" => "hasEnergyConsumptionDetails",
            "audience" => "audience",
            "offers" => "offers",
            "productionDate" => "productionDate",
            "itemCondition" => "itemCondition",
            "awards" => "awards",
            "gtin" => "gtin",
            "productID" => "productID",
            "countryOfAssembly" => "countryOfAssembly",
            "color" => "color",
            "aggregateRating" => "aggregateRating",
            "isSimilarTo" => "isSimilarTo",
            "depth" => "depth",
            "countryOfLastProcessing" => "countryOfLastProcessing",
            "isVariantOf" => "isVariantOf",
            "slogan" => "slogan",
            "brand" => "brand",
            "manufacturer" => "manufacturer",
            "hasMeasurement" => "hasMeasurement",
            "isConsumableFor" => "isConsumableFor",
            "logo" => "logo",
            "gtin8" => "gtin8",
            "sku" => "sku",
            "inProductGroupWithID" => "inProductGroupWithID",
            "model" => "model",
            "hasMerchantReturnPolicy" => "hasMerchantReturnPolicy",
            "releaseDate" => "releaseDate",
            "gtin14" => "gtin14",
            "weight" => "weight",
            "size" => "size",
            "additionalProperty" => "additionalProperty",
            "gtin13" => "gtin13",
            "reviews" => "reviews",
            "isFamilyFriendly" => "isFamilyFriendly",
            "isRelatedTo" => "isRelatedTo",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $isAccessoryOrSparePartFor;

    /**
     * Used to tag an item to be intended or suitable for consumption or use by adults only.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\AdultOrientedEnumeration|null
     */
    protected $hasAdultConsideration;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin12;

    /**
     * Indicates the [NATO stock number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]]. 
     *
     *
     * @var string
     */
    protected $nsn;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Product
     */
    protected $material;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $review;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * The width of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance|string
     */
    protected $width;

    /**
     * The country of origin of something, including products as well as creative  works such as movie and TV content.
     * 
     * In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable.
     * 
     * In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $countryOfOrigin;

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to controlled value schemes are also supported.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $pattern;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\CategoryCode|null
     */
    protected $category;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Grant|string
     */
    protected $funding;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $mpn;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $height;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $keywords;

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     *
     * @var Date|null
     */
    protected $purchaseDate;

    /**
     * Defines the energy efficiency Category (also known as "class" or "rating") for a product according to an international energy efficiency standard.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EnergyConsumptionDetails|string
     */
    protected $hasEnergyConsumptionDetails;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $audience;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Offer|\OpenActive\Models\SchemaOrg\Demand|string
     */
    protected $offers;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     *
     * @var Date|null
     */
    protected $productionDate;

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\OfferItemCondition|null
     */
    protected $itemCondition;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties. The GS1 [digital link specifications](https://www.gs1.org/standards/Digital-Link/) express GTINs as URLs. A correct [[gtin]] value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet the other rules for valid GTINs. See also [GS1's GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values is not required or encouraged.
     *    
     *
     *
     * @var string
     */
    protected $gtin;

    /**
     * The product identifier, such as ISBN. For example: ``` meta itemprop="productID" content="isbn:123-456-789" ```.
     *
     *
     * @var string
     */
    protected $productID;

    /**
     * The place where the product was assembled.
     *
     *
     * @var string
     */
    protected $countryOfAssembly;

    /**
     * The color of the product.
     *
     *
     * @var string
     */
    protected $color;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    protected $aggregateRating;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product|string
     */
    protected $isSimilarTo;

    /**
     * The depth of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $depth;

    /**
     * The place where the item (typically [[Product]]) was last processed and tested before importation.
     *
     *
     * @var string
     */
    protected $countryOfLastProcessing;

    /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]], the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]], this property can apply to any [[Product]] included in the group.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductModel|\OpenActive\Models\SchemaOrg\ProductGroup|string
     */
    protected $isVariantOf;

    /**
     * A slogan or motto associated with the item.
     *
     *
     * @var string
     */
    protected $slogan;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Brand|string
     */
    protected $brand;

    /**
     * The manufacturer of the product.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $manufacturer;

    /**
     * A product measurement, for example the inseam of pants, the wheel size of a bicycle, or the gauge of a screw. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $hasMeasurement;

    /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $isConsumableFor;

    /**
     * An associated logo.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    protected $logo;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin8;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $sku;

    /**
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product [[isVariantOf]]. 
     *
     *
     * @var string
     */
    protected $inProductGroupWithID;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductModel|string
     */
    protected $model;

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string
     */
    protected $hasMerchantReturnPolicy;

    /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     *
     *
     * @var Date|null
     */
    protected $releaseDate;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin14;

    /**
     * The weight of the product or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $weight;

    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be more applicable. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Models\SchemaOrg\SizeSpecification
     */
    protected $size;

    /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $additionalProperty;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin13;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $reviews;

    /**
     * Indicates whether this content is family friendly.
     *
     *
     * @var bool|null
     */
    protected $isFamilyFriendly;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product|string
     */
    protected $isRelatedTo;

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|string
     */
    public function getIsAccessoryOrSparePartFor()
    {
        return $this->isAccessoryOrSparePartFor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|string $isAccessoryOrSparePartFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $isAccessoryOrSparePartFor = self::checkTypes($isAccessoryOrSparePartFor, $types);

        $this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\AdultOrientedEnumeration|null
     */
    public function getHasAdultConsideration()
    {
        return $this->hasAdultConsideration;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\AdultOrientedEnumeration|null $hasAdultConsideration
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasAdultConsideration($hasAdultConsideration)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\AdultOrientedEnumeration",
            "null",
        ];

        $hasAdultConsideration = self::checkTypes($hasAdultConsideration, $types);

        $this->hasAdultConsideration = $hasAdultConsideration;
    }

    /**
     * @return string
     */
    public function getGtin12()
    {
        return $this->gtin12;
    }

    /**
     * @param string $gtin12
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin12($gtin12)
    {
        $types = [
            "string",
        ];

        $gtin12 = self::checkTypes($gtin12, $types);

        $this->gtin12 = $gtin12;
    }

    /**
     * @return string
     */
    public function getNsn()
    {
        return $this->nsn;
    }

    /**
     * @param string $nsn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNsn($nsn)
    {
        $types = [
            "string",
        ];

        $nsn = self::checkTypes($nsn, $types);

        $this->nsn = $nsn;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Product
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Product $material
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaterial($material)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\Product",
        ];

        $material = self::checkTypes($material, $types);

        $this->material = $material;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $review
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return string
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param string $award
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAward($award)
    {
        $types = [
            "string",
        ];

        $award = self::checkTypes($award, $types);

        $this->award = $award;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance|string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance|string $width
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
        ];

        $width = self::checkTypes($width, $types);

        $this->width = $width;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Country|string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country|string $countryOfOrigin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Country",
            "string",
        ];

        $countryOfOrigin = self::checkTypes($countryOfOrigin, $types);

        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $pattern
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPattern($pattern)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $pattern = self::checkTypes($pattern, $types);

        $this->pattern = $pattern;
    }

    /**
     * @return string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\CategoryCode|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing|\OpenActive\Models\SchemaOrg\CategoryCode|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "string",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "\OpenActive\Models\SchemaOrg\Thing",
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Grant|string
     */
    public function getFunding()
    {
        return $this->funding;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Grant|string $funding
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunding($funding)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Grant",
            "string",
        ];

        $funding = self::checkTypes($funding, $types);

        $this->funding = $funding;
    }

    /**
     * @return string
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * @param string $mpn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMpn($mpn)
    {
        $types = [
            "string",
        ];

        $mpn = self::checkTypes($mpn, $types);

        $this->mpn = $mpn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $height
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $height = self::checkTypes($height, $types);

        $this->height = $height;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $keywords
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKeywords($keywords)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $keywords = self::checkTypes($keywords, $types);

        $this->keywords = $keywords;
    }

    /**
     * @return Date|null
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * @param Date|null $purchaseDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPurchaseDate($purchaseDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $purchaseDate = self::checkTypes($purchaseDate, $types);

        $this->purchaseDate = $purchaseDate;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\EnergyConsumptionDetails|string
     */
    public function getHasEnergyConsumptionDetails()
    {
        return $this->hasEnergyConsumptionDetails;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\EnergyConsumptionDetails|string $hasEnergyConsumptionDetails
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasEnergyConsumptionDetails($hasEnergyConsumptionDetails)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\EnergyConsumptionDetails",
            "string",
        ];

        $hasEnergyConsumptionDetails = self::checkTypes($hasEnergyConsumptionDetails, $types);

        $this->hasEnergyConsumptionDetails = $hasEnergyConsumptionDetails;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience|string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience|string $audience
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudience($audience)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
            "string",
        ];

        $audience = self::checkTypes($audience, $types);

        $this->audience = $audience;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Offer|\OpenActive\Models\SchemaOrg\Demand|string
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Offer|\OpenActive\Models\SchemaOrg\Demand|string $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Offer",
            "\OpenActive\Models\SchemaOrg\Demand",
            "string",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return Date|null
     */
    public function getProductionDate()
    {
        return $this->productionDate;
    }

    /**
     * @param Date|null $productionDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductionDate($productionDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $productionDate = self::checkTypes($productionDate, $types);

        $this->productionDate = $productionDate;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\OfferItemCondition|null
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\OfferItemCondition|null $itemCondition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setItemCondition($itemCondition)
    {
        $types = [
            "\OpenActive\Enums\SchemaOrg\OfferItemCondition",
            "null",
        ];

        $itemCondition = self::checkTypes($itemCondition, $types);

        $this->itemCondition = $itemCondition;
    }

    /**
     * @return string
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * @param string $awards
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAwards($awards)
    {
        $types = [
            "string",
        ];

        $awards = self::checkTypes($awards, $types);

        $this->awards = $awards;
    }

    /**
     * @return string
     */
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * @param string $gtin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin($gtin)
    {
        $types = [
            "string",
        ];

        $gtin = self::checkTypes($gtin, $types);

        $this->gtin = $gtin;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param string $productID
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductID($productID)
    {
        $types = [
            "string",
        ];

        $productID = self::checkTypes($productID, $types);

        $this->productID = $productID;
    }

    /**
     * @return string
     */
    public function getCountryOfAssembly()
    {
        return $this->countryOfAssembly;
    }

    /**
     * @param string $countryOfAssembly
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCountryOfAssembly($countryOfAssembly)
    {
        $types = [
            "string",
        ];

        $countryOfAssembly = self::checkTypes($countryOfAssembly, $types);

        $this->countryOfAssembly = $countryOfAssembly;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setColor($color)
    {
        $types = [
            "string",
        ];

        $color = self::checkTypes($color, $types);

        $this->color = $color;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AggregateRating|string $aggregateRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AggregateRating",
            "string",
        ];

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product|string
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product|string $isSimilarTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsSimilarTo($isSimilarTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Service",
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $isSimilarTo = self::checkTypes($isSimilarTo, $types);

        $this->isSimilarTo = $isSimilarTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $depth
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDepth($depth)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $depth = self::checkTypes($depth, $types);

        $this->depth = $depth;
    }

    /**
     * @return string
     */
    public function getCountryOfLastProcessing()
    {
        return $this->countryOfLastProcessing;
    }

    /**
     * @param string $countryOfLastProcessing
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCountryOfLastProcessing($countryOfLastProcessing)
    {
        $types = [
            "string",
        ];

        $countryOfLastProcessing = self::checkTypes($countryOfLastProcessing, $types);

        $this->countryOfLastProcessing = $countryOfLastProcessing;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ProductModel|\OpenActive\Models\SchemaOrg\ProductGroup|string
     */
    public function getIsVariantOf()
    {
        return $this->isVariantOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductModel|\OpenActive\Models\SchemaOrg\ProductGroup|string $isVariantOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsVariantOf($isVariantOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ProductModel",
            "\OpenActive\Models\SchemaOrg\ProductGroup",
            "string",
        ];

        $isVariantOf = self::checkTypes($isVariantOf, $types);

        $this->isVariantOf = $isVariantOf;
    }

    /**
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * @param string $slogan
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSlogan($slogan)
    {
        $types = [
            "string",
        ];

        $slogan = self::checkTypes($slogan, $types);

        $this->slogan = $slogan;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Brand|string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Brand|string $brand
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBrand($brand)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Brand",
            "string",
        ];

        $brand = self::checkTypes($brand, $types);

        $this->brand = $brand;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $manufacturer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setManufacturer($manufacturer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $manufacturer = self::checkTypes($manufacturer, $types);

        $this->manufacturer = $manufacturer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getHasMeasurement()
    {
        return $this->hasMeasurement;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $hasMeasurement
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMeasurement($hasMeasurement)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $hasMeasurement = self::checkTypes($hasMeasurement, $types);

        $this->hasMeasurement = $hasMeasurement;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|string
     */
    public function getIsConsumableFor()
    {
        return $this->isConsumableFor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|string $isConsumableFor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsConsumableFor($isConsumableFor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $isConsumableFor = self::checkTypes($isConsumableFor, $types);

        $this->isConsumableFor = $isConsumableFor;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ImageObject
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ImageObject $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\ImageObject",
        ];

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getGtin8()
    {
        return $this->gtin8;
    }

    /**
     * @param string $gtin8
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin8($gtin8)
    {
        $types = [
            "string",
        ];

        $gtin8 = self::checkTypes($gtin8, $types);

        $this->gtin8 = $gtin8;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSku($sku)
    {
        $types = [
            "string",
        ];

        $sku = self::checkTypes($sku, $types);

        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getInProductGroupWithID()
    {
        return $this->inProductGroupWithID;
    }

    /**
     * @param string $inProductGroupWithID
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInProductGroupWithID($inProductGroupWithID)
    {
        $types = [
            "string",
        ];

        $inProductGroupWithID = self::checkTypes($inProductGroupWithID, $types);

        $this->inProductGroupWithID = $inProductGroupWithID;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ProductModel|string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductModel|string $model
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setModel($model)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ProductModel",
            "string",
        ];

        $model = self::checkTypes($model, $types);

        $this->model = $model;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string
     */
    public function getHasMerchantReturnPolicy()
    {
        return $this->hasMerchantReturnPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string $hasMerchantReturnPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasMerchantReturnPolicy($hasMerchantReturnPolicy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MerchantReturnPolicy",
            "string",
        ];

        $hasMerchantReturnPolicy = self::checkTypes($hasMerchantReturnPolicy, $types);

        $this->hasMerchantReturnPolicy = $hasMerchantReturnPolicy;
    }

    /**
     * @return Date|null
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param Date|null $releaseDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReleaseDate($releaseDate)
    {
        $types = [
            "Date",
            "null",
        ];

        $releaseDate = self::checkTypes($releaseDate, $types);

        $this->releaseDate = $releaseDate;
    }

    /**
     * @return string
     */
    public function getGtin14()
    {
        return $this->gtin14;
    }

    /**
     * @param string $gtin14
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin14($gtin14)
    {
        $types = [
            "string",
        ];

        $gtin14 = self::checkTypes($gtin14, $types);

        $this->gtin14 = $gtin14;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string $weight
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWeight($weight)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $weight = self::checkTypes($weight, $types);

        $this->weight = $weight;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Models\SchemaOrg\SizeSpecification
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\DefinedTerm|string|\OpenActive\Models\SchemaOrg\SizeSpecification $size
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSize($size)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
            "\OpenActive\Models\SchemaOrg\SizeSpecification",
        ];

        $size = self::checkTypes($size, $types);

        $this->size = $size;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string $additionalProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalProperty($additionalProperty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        ];

        $additionalProperty = self::checkTypes($additionalProperty, $types);

        $this->additionalProperty = $additionalProperty;
    }

    /**
     * @return string
     */
    public function getGtin13()
    {
        return $this->gtin13;
    }

    /**
     * @param string $gtin13
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGtin13($gtin13)
    {
        $types = [
            "string",
        ];

        $gtin13 = self::checkTypes($gtin13, $types);

        $this->gtin13 = $gtin13;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review|string
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review|string $reviews
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviews($reviews)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
            "string",
        ];

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
    }

    /**
     * @return bool|null
     */
    public function getIsFamilyFriendly()
    {
        return $this->isFamilyFriendly;
    }

    /**
     * @param bool|null $isFamilyFriendly
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsFamilyFriendly($isFamilyFriendly)
    {
        $types = [
            "bool",
            "null",
        ];

        $isFamilyFriendly = self::checkTypes($isFamilyFriendly, $types);

        $this->isFamilyFriendly = $isFamilyFriendly;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product|string
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Service|\OpenActive\Models\SchemaOrg\Product|string $isRelatedTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsRelatedTo($isRelatedTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Service",
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $isRelatedTo = self::checkTypes($isRelatedTo, $types);

        $this->isRelatedTo = $isRelatedTo;
    }

}
