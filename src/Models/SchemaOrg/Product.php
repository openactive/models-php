<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Product extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * The manufacturer of the product.
     *
     *
     * @var Organization
     */
    protected $manufacturer;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $sku;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience
     */
    protected $audience;

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
     * @var \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    protected $height;

    /**
     * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx">GTIN-8</a> code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin8;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $reviews;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating
     */
    protected $aggregateRating;

    /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product
     */
    protected $isConsumableFor;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     *
     *
     * @var Offer
     */
    protected $offers;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing
     */
    protected $category;

    /**
     * The width of the item.
     *
     *
     * @var QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    protected $width;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>
     * 
     * Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     *
     *
     * @var PropertyValue
     */
    protected $additionalProperty;

    /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product
     */
    protected $isAccessoryOrSparePartFor;

    /**
     * An associated logo.
     *
     *
     * @var ImageObject|string
     */
    protected $logo;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin14;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin13;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     *
     *
     * @var string
     */
    protected $gtin12;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Product
     */
    protected $material;

    /**
     * The weight of the product or person.
     *
     *
     * @var QuantitativeValue
     */
    protected $weight;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    protected $isSimilarTo;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\ProductModel
     */
    protected $model;

    /**
     * The color of the product.
     *
     *
     * @var string
     */
    protected $color;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    protected $isRelatedTo;

    /**
     * The product identifier, such as ISBN. For example: <code>meta itemprop="productID" content="isbn:123-456-789"</code>.
     *
     *
     * @var string
     */
    protected $productID;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $review;

    /**
     * The depth of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    protected $depth;

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     *
     * @var DateTime|null
     */
    protected $purchaseDate;

    /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     *
     *
     * @var Schema.NET.OfferItemCondition|null
     */
    protected $itemCondition;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     *
     * @var DateTime|null
     */
    protected $productionDate;

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
     * @var Organization|Brand
     */
    protected $brand;

    /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     *
     *
     * @var DateTime|null
     */
    protected $releaseDate;

    /**
     * @return Organization
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param Organization $manufacturer
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setManufacturer($manufacturer)
    {
        $types = array(
            "Organization",
        );

        $manufacturer = self::checkTypes($manufacturer, $types);

        $this->manufacturer = $manufacturer;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSku($sku)
    {
        $types = array(
            "string",
        );

        $sku = self::checkTypes($sku, $types);

        $this->sku = $sku;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Audience
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Audience $audience
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAudience($audience)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Audience",
        );

        $audience = self::checkTypes($audience, $types);

        $this->audience = $audience;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMpn($mpn)
    {
        $types = array(
            "string",
        );

        $mpn = self::checkTypes($mpn, $types);

        $this->mpn = $mpn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue $height
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setHeight($height)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
            "QuantitativeValue",
        );

        $height = self::checkTypes($height, $types);

        $this->height = $height;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGtin8($gtin8)
    {
        $types = array(
            "string",
        );

        $gtin8 = self::checkTypes($gtin8, $types);

        $this->gtin8 = $gtin8;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review $reviews
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setReviews($reviews)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Review",
        );

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AggregateRating
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AggregateRating $aggregateRating
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\AggregateRating",
        );

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product
     */
    public function getIsConsumableFor()
    {
        return $this->isConsumableFor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product $isConsumableFor
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIsConsumableFor($isConsumableFor)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $isConsumableFor = self::checkTypes($isConsumableFor, $types);

        $this->isConsumableFor = $isConsumableFor;
    }

    /**
     * @return Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param Offer $offers
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = array(
            "Offer",
        );

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAward($award)
    {
        $types = array(
            "string",
        );

        $award = self::checkTypes($award, $types);

        $this->award = $award;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\PhysicalActivityCategory|\OpenActive\Models\SchemaOrg\Thing $category
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\PhysicalActivityCategory",
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $category = self::checkTypes($category, $types);

        $this->category = $category;
    }

    /**
     * @return QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param QuantitativeValue|\OpenActive\Models\SchemaOrg\Distance $width
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = array(
            "QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\Distance",
        );

        $width = self::checkTypes($width, $types);

        $this->width = $width;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAwards($awards)
    {
        $types = array(
            "string",
        );

        $awards = self::checkTypes($awards, $types);

        $this->awards = $awards;
    }

    /**
     * @return PropertyValue
     */
    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    /**
     * @param PropertyValue $additionalProperty
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAdditionalProperty($additionalProperty)
    {
        $types = array(
            "PropertyValue",
        );

        $additionalProperty = self::checkTypes($additionalProperty, $types);

        $this->additionalProperty = $additionalProperty;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product
     */
    public function getIsAccessoryOrSparePartFor()
    {
        return $this->isAccessoryOrSparePartFor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product $isAccessoryOrSparePartFor
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIsAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $isAccessoryOrSparePartFor = self::checkTypes($isAccessoryOrSparePartFor, $types);

        $this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
    }

    /**
     * @return ImageObject|string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param ImageObject|string $logo
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = array(
            "ImageObject",
            "string",
        );

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGtin14($gtin14)
    {
        $types = array(
            "string",
        );

        $gtin14 = self::checkTypes($gtin14, $types);

        $this->gtin14 = $gtin14;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGtin13($gtin13)
    {
        $types = array(
            "string",
        );

        $gtin13 = self::checkTypes($gtin13, $types);

        $this->gtin13 = $gtin13;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGtin12($gtin12)
    {
        $types = array(
            "string",
        );

        $gtin12 = self::checkTypes($gtin12, $types);

        $this->gtin12 = $gtin12;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setMaterial($material)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $material = self::checkTypes($material, $types);

        $this->material = $material;
    }

    /**
     * @return QuantitativeValue
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param QuantitativeValue $weight
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setWeight($weight)
    {
        $types = array(
            "QuantitativeValue",
        );

        $weight = self::checkTypes($weight, $types);

        $this->weight = $weight;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service $isSimilarTo
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIsSimilarTo($isSimilarTo)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
        );

        $isSimilarTo = self::checkTypes($isSimilarTo, $types);

        $this->isSimilarTo = $isSimilarTo;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\ProductModel
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\ProductModel $model
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setModel($model)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\ProductModel",
        );

        $model = self::checkTypes($model, $types);

        $this->model = $model;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setColor($color)
    {
        $types = array(
            "string",
        );

        $color = self::checkTypes($color, $types);

        $this->color = $color;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service $isRelatedTo
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIsRelatedTo($isRelatedTo)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
        );

        $isRelatedTo = self::checkTypes($isRelatedTo, $types);

        $this->isRelatedTo = $isRelatedTo;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setProductID($productID)
    {
        $types = array(
            "string",
        );

        $productID = self::checkTypes($productID, $types);

        $this->productID = $productID;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Review $review
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Review",
        );

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|QuantitativeValue $depth
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDepth($depth)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Distance",
            "QuantitativeValue",
        );

        $depth = self::checkTypes($depth, $types);

        $this->depth = $depth;
    }

    /**
     * @return DateTime|null
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * @param DateTime|null $purchaseDate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setPurchaseDate($purchaseDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $purchaseDate = self::checkTypes($purchaseDate, $types);

        $this->purchaseDate = $purchaseDate;
    }

    /**
     * @return Schema.NET.OfferItemCondition|null
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * @param Schema.NET.OfferItemCondition|null $itemCondition
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setItemCondition($itemCondition)
    {
        $types = array(
            "Schema.NET.OfferItemCondition",
            "null",
        );

        $itemCondition = self::checkTypes($itemCondition, $types);

        $this->itemCondition = $itemCondition;
    }

    /**
     * @return DateTime|null
     */
    public function getProductionDate()
    {
        return $this->productionDate;
    }

    /**
     * @param DateTime|null $productionDate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setProductionDate($productionDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $productionDate = self::checkTypes($productionDate, $types);

        $this->productionDate = $productionDate;
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
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setSlogan($slogan)
    {
        $types = array(
            "string",
        );

        $slogan = self::checkTypes($slogan, $types);

        $this->slogan = $slogan;
    }

    /**
     * @return Organization|Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param Organization|Brand $brand
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setBrand($brand)
    {
        $types = array(
            "Organization",
            "Brand",
        );

        $brand = self::checkTypes($brand, $types);

        $this->brand = $brand;
    }

    /**
     * @return DateTime|null
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param DateTime|null $releaseDate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setReleaseDate($releaseDate)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $releaseDate = self::checkTypes($releaseDate, $types);

        $this->releaseDate = $releaseDate;
    }

}
