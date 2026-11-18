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
            "additionalProperty" => "additionalProperty",
            "aggregateRating" => "aggregateRating",
            "asin" => "asin",
            "audience" => "audience",
            "authorizedRepresentative" => "authorizedRepresentative",
            "award" => "award",
            "awards" => "awards",
            "brand" => "brand",
            "category" => "category",
            "color" => "color",
            "colorSwatch" => "colorSwatch",
            "consumerNotice" => "consumerNotice",
            "countryOfAssembly" => "countryOfAssembly",
            "countryOfLastProcessing" => "countryOfLastProcessing",
            "countryOfOrigin" => "countryOfOrigin",
            "depth" => "depth",
            "displayLocation" => "displayLocation",
            "funding" => "funding",
            "gtin" => "gtin",
            "gtin12" => "gtin12",
            "gtin13" => "gtin13",
            "gtin14" => "gtin14",
            "gtin8" => "gtin8",
            "hasAdultConsideration" => "hasAdultConsideration",
            "hasCertification" => "hasCertification",
            "hasDigitalProductPassport" => "hasDigitalProductPassport",
            "hasEnergyConsumptionDetails" => "hasEnergyConsumptionDetails",
            "hasGS1DigitalLink" => "hasGS1DigitalLink",
            "hasMeasurement" => "hasMeasurement",
            "hasMerchantReturnPolicy" => "hasMerchantReturnPolicy",
            "hasProductReturnPolicy" => "hasProductReturnPolicy",
            "height" => "height",
            "importer" => "importer",
            "inProductGroupWithID" => "inProductGroupWithID",
            "isAccessoryOrSparePartFor" => "isAccessoryOrSparePartFor",
            "isConsumableFor" => "isConsumableFor",
            "isFamilyFriendly" => "isFamilyFriendly",
            "isOftenBoughtWith" => "isOftenBoughtWith",
            "isRelatedTo" => "isRelatedTo",
            "isSimilarTo" => "isSimilarTo",
            "isVariantOf" => "isVariantOf",
            "itemCondition" => "itemCondition",
            "keywords" => "keywords",
            "logo" => "logo",
            "manufacturer" => "manufacturer",
            "material" => "material",
            "mobileUrl" => "mobileUrl",
            "model" => "model",
            "mpn" => "mpn",
            "negativeNotes" => "negativeNotes",
            "nsn" => "nsn",
            "offers" => "offers",
            "pattern" => "pattern",
            "positiveNotes" => "positiveNotes",
            "productID" => "productID",
            "productionDate" => "productionDate",
            "purchaseDate" => "purchaseDate",
            "recycledContentPercentage" => "recycledContentPercentage",
            "releaseDate" => "releaseDate",
            "review" => "review",
            "reviews" => "reviews",
            "size" => "size",
            "sku" => "sku",
            "slogan" => "slogan",
            "specification" => "specification",
            "substanceOfConcern" => "substanceOfConcern",
            "weight" => "weight",
            "width" => "width",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $additionalProperty;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating|string
     */
    protected $aggregateRating;

    /**
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article).
     * 
     * Note also that this is a definition for how to include ASINs in Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details.
     * ASINs are most commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
     *
     *
     * @var string
     */
    protected $asin;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience|string
     */
    protected $audience;

    /**
     * An organization or person officially appointed to act on behalf of the manufacturer in a specific region or context.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $authorizedRepresentative;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $brand;

    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    protected $category;

    /**
     * The color of the product.
     *
     *
     * @var string
     */
    protected $color;

    /**
     * A color swatch image, visualizing the color of a [[Product]]. Should match the textual description specified in the [[color]] property. This can be a URL or a fully described ImageObject.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    protected $colorSwatch;

    /**
     * A consumer notice, such as a safety warning or mandatory information, related to the product.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\TextObject|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $consumerNotice;

    /**
     * The place where the product was assembled.
     *
     *
     * @var string
     */
    protected $countryOfAssembly;

    /**
     * The place where the item (typically [[Product]]) was last processed and tested before importation.
     *
     *
     * @var string
     */
    protected $countryOfLastProcessing;

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
     * The depth of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $depth;

    /**
     * The location at which an item can be viewed or experienced in-person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place|string
     */
    protected $displayLocation;

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Grant|string
     */
    protected $funding;

    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes.
     * 
     * A correct [[gtin]] value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet the other rules for valid GTINs. See also [GS1's GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values is not required or encouraged. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties.
     * 
     * The GS1 [digital link specifications](https://www.gs1.org/standards/Digital-Link/) expresses GTINs as URLs (URIs, IRIs, etc.).
     * Digital Links should be populated into the [[hasGS1DigitalLink]] attribute.
     * 
     * Note also that this is a definition for how to include GTINs in Schema.org data, and not a definition of GTINs in general - see the GS1 documentation for authoritative details.
     *
     *
     * @var string
     */
    protected $gtin;

    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin12;

    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin13;

    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin14;

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     *
     *
     * @var string
     */
    protected $gtin8;

    /**
     * Used to tag an item to be intended or suitable for consumption or use by adults only.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\AdultOrientedEnumeration|null
     */
    protected $hasAdultConsideration;

    /**
     * Certification information about a product, organization, service, place, or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Certification|string
     */
    protected $hasCertification;

    /**
     * A link to a Digital Product Passport (DPP) or a digital record detailing the lifecycle, sustainability, and compliance data for this product or offer. This may be a direct URL, a GS1 Digital Link URI, or a nested DigitalProductPassport object. Note: This property is aligned with the IANA 'dpp' link relation and the GS1 Web Vocabulary 'dpp' link type.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DigitalProductPassport|string
     */
    protected $hasDigitalProductPassport;

    /**
     * Defines the energy efficiency Category (also known as "class" or "rating") for a product according to an international energy efficiency standard.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\EnergyConsumptionDetails|string
     */
    protected $hasEnergyConsumptionDetails;

    /**
     * The <a href="https://www.gs1.org/standards/gs1-digital-link">GS1 digital link</a> associated with the object. This URL should conform to the particular requirements of digital links. The link should only contain the Application Identifiers (AIs) that are relevant for the entity being annotated, for instance a [[Product]] or an [[Organization]], and for the correct granularity. In particular, for products:<ul><li>A Digital Link that contains a serial number (AI <code>21</code>) should only be present on instances of [[IndividualProduct]]</li><li>A Digital Link that contains a lot number (AI <code>10</code>) should be annotated as [[SomeProducts]] if only products from that lot are sold, or [[IndividualProduct]] if there is only a specific product.</li><li>A Digital Link that contains a global model number (AI <code>8013</code>) should be attached to a [[Product]] or a [[ProductModel]].</li></ul> Other item types should be adapted similarly.
     *
     *
     * @var string
     */
    protected $hasGS1DigitalLink;

    /**
     * A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $hasMeasurement;

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MerchantReturnPolicy|string
     */
    protected $hasMerchantReturnPolicy;

    /**
     * Indicates a ProductReturnPolicy that may be applicable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductReturnPolicy|string
     */
    protected $hasProductReturnPolicy;

    /**
     * The height of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $height;

    /**
     * An organization or person who imports the product into a specific market or region.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    protected $importer;

    /**
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product [[isVariantOf]]. 
     *
     *
     * @var string
     */
    protected $inProductGroupWithID;

    /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $isAccessoryOrSparePartFor;

    /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $isConsumableFor;

    /**
     * Indicates whether this content is family friendly.
     *
     *
     * @var bool|null
     */
    protected $isFamilyFriendly;

    /**
     * Indicates a product that is often bought with the described product.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $isOftenBoughtWith;

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    protected $isRelatedTo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    protected $isSimilarTo;

    /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]], the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]], this property can apply to any [[Product]] included in the group.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductGroup|\OpenActive\Models\SchemaOrg\ProductModel|string
     */
    protected $isVariantOf;

    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\OfferItemCondition|null
     */
    protected $itemCondition;

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $keywords;

    /**
     * An associated logo.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    protected $logo;

    /**
     * The manufacturer of the product.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $manufacturer;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string
     */
    protected $material;

    /**
     * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs is a dedicated 'mobile site'.
     * 
     * To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]], rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken as an endorsement of this publication style.
     *     
     *
     *
     * @var string
     */
    protected $mobileUrl;

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ProductModel|string
     */
    protected $model;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $mpn;

    /**
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry 
     * 
     * In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described. Since product descriptions 
     * tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]].
     * 
     * The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the beginning of the list).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\ListItem|string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $negativeNotes;

    /**
     * Indicates the [NATO stock number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]]. 
     *
     *
     * @var string
     */
    protected $nsn;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string
     */
    protected $offers;

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to controlled value schemes are also supported.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $pattern;

    /**
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
     * 
     * In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described.
     * 
     * The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most positive is at the beginning of the list).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\ListItem|string|\OpenActive\Models\SchemaOrg\WebContent
     */
    protected $positiveNotes;

    /**
     * The product identifier, such as ISBN. For example: ``` meta itemprop="productID" content="isbn:123-456-789" ```.
     *
     *
     * @var string
     */
    protected $productID;

    /**
     * The date of production of the item, e.g. vehicle.
     *
     *
     * @var Date|null
     */
    protected $productionDate;

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     *
     *
     * @var Date|null
     */
    protected $purchaseDate;

    /**
     * The percentage of recycled material in the product.
     *
     *
     * @var Number|null
     */
    protected $recycledContentPercentage;

    /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     *
     *
     * @var Date|null
     */
    protected $releaseDate;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $review;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review|string
     */
    protected $reviews;

    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be more applicable. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\SizeSpecification|string
     */
    protected $size;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     *
     *
     * @var string
     */
    protected $sku;

    /**
     * A slogan or motto associated with the item.
     *
     *
     * @var string
     */
    protected $slogan;

    /**
     * A specification of the product, often grouped by a section header/name. This is a cleaner alternative to additionalProperty for strict retail product specifications.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $specification;

    /**
     * A substance of concern (SoC) contained within the product, typically based on regulatory lists like REACH or RoHS.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ChemicalSubstance|\OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $substanceOfConcern;

    /**
     * The weight of the product or person.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Mass|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $weight;

    /**
     * The width of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    protected $width;

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
     * @return string
     */
    public function getAsin()
    {
        return $this->asin;
    }

    /**
     * @param string $asin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAsin($asin)
    {
        $types = [
            "string",
        ];

        $asin = self::checkTypes($asin, $types);

        $this->asin = $asin;
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
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getAuthorizedRepresentative()
    {
        return $this->authorizedRepresentative;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $authorizedRepresentative
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthorizedRepresentative($authorizedRepresentative)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $authorizedRepresentative = self::checkTypes($authorizedRepresentative, $types);

        $this->authorizedRepresentative = $authorizedRepresentative;
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
     * @return \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Brand|\OpenActive\Models\SchemaOrg\Organization|string $brand
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBrand($brand)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Brand",
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $brand = self::checkTypes($brand, $types);

        $this->brand = $brand;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CategoryCode|\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory|string|\OpenActive\Models\SchemaOrg\Thing|null $category
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCategory($category)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CategoryCode",
            "\OpenActive\Enums\SchemaOrg\PhysicalActivityCategory",
            "string",
            "\OpenActive\Models\SchemaOrg\Thing",
            "null",
        ];

        $category = self::checkTypes($category, $types);

        $this->category = $category;
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
     * @return \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    public function getColorSwatch()
    {
        return $this->colorSwatch;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|string $colorSwatch
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setColorSwatch($colorSwatch)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "string",
        ];

        $colorSwatch = self::checkTypes($colorSwatch, $types);

        $this->colorSwatch = $colorSwatch;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\TextObject|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getConsumerNotice()
    {
        return $this->consumerNotice;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\TextObject|\OpenActive\Models\SchemaOrg\WebContent $consumerNotice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConsumerNotice($consumerNotice)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\TextObject",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $consumerNotice = self::checkTypes($consumerNotice, $types);

        $this->consumerNotice = $consumerNotice;
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
     * @return \OpenActive\Models\SchemaOrg\Place|string
     */
    public function getDisplayLocation()
    {
        return $this->displayLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place|string $displayLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDisplayLocation($displayLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
            "string",
        ];

        $displayLocation = self::checkTypes($displayLocation, $types);

        $this->displayLocation = $displayLocation;
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
     * @return \OpenActive\Models\SchemaOrg\Certification|string
     */
    public function getHasCertification()
    {
        return $this->hasCertification;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Certification|string $hasCertification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasCertification($hasCertification)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Certification",
            "string",
        ];

        $hasCertification = self::checkTypes($hasCertification, $types);

        $this->hasCertification = $hasCertification;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DigitalProductPassport|string
     */
    public function getHasDigitalProductPassport()
    {
        return $this->hasDigitalProductPassport;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DigitalProductPassport|string $hasDigitalProductPassport
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasDigitalProductPassport($hasDigitalProductPassport)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DigitalProductPassport",
            "string",
        ];

        $hasDigitalProductPassport = self::checkTypes($hasDigitalProductPassport, $types);

        $this->hasDigitalProductPassport = $hasDigitalProductPassport;
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
     * @return string
     */
    public function getHasGS1DigitalLink()
    {
        return $this->hasGS1DigitalLink;
    }

    /**
     * @param string $hasGS1DigitalLink
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasGS1DigitalLink($hasGS1DigitalLink)
    {
        $types = [
            "string",
        ];

        $hasGS1DigitalLink = self::checkTypes($hasGS1DigitalLink, $types);

        $this->hasGS1DigitalLink = $hasGS1DigitalLink;
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
     * @return \OpenActive\Models\SchemaOrg\ProductReturnPolicy|string
     */
    public function getHasProductReturnPolicy()
    {
        return $this->hasProductReturnPolicy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductReturnPolicy|string $hasProductReturnPolicy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasProductReturnPolicy($hasProductReturnPolicy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ProductReturnPolicy",
            "string",
        ];

        $hasProductReturnPolicy = self::checkTypes($hasProductReturnPolicy, $types);

        $this->hasProductReturnPolicy = $hasProductReturnPolicy;
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
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string
     */
    public function getImporter()
    {
        return $this->importer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person|string $importer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setImporter($importer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $importer = self::checkTypes($importer, $types);

        $this->importer = $importer;
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
     * @return \OpenActive\Models\SchemaOrg\Product|string
     */
    public function getIsOftenBoughtWith()
    {
        return $this->isOftenBoughtWith;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|string $isOftenBoughtWith
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsOftenBoughtWith($isOftenBoughtWith)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $isOftenBoughtWith = self::checkTypes($isOftenBoughtWith, $types);

        $this->isOftenBoughtWith = $isOftenBoughtWith;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string $isRelatedTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsRelatedTo($isRelatedTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
            "string",
        ];

        $isRelatedTo = self::checkTypes($isRelatedTo, $types);

        $this->isRelatedTo = $isRelatedTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|\OpenActive\Models\SchemaOrg\Service|string $isSimilarTo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsSimilarTo($isSimilarTo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "\OpenActive\Models\SchemaOrg\Service",
            "string",
        ];

        $isSimilarTo = self::checkTypes($isSimilarTo, $types);

        $this->isSimilarTo = $isSimilarTo;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ProductGroup|\OpenActive\Models\SchemaOrg\ProductModel|string
     */
    public function getIsVariantOf()
    {
        return $this->isVariantOf;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ProductGroup|\OpenActive\Models\SchemaOrg\ProductModel|string $isVariantOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsVariantOf($isVariantOf)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ProductGroup",
            "\OpenActive\Models\SchemaOrg\ProductModel",
            "string",
        ];

        $isVariantOf = self::checkTypes($isVariantOf, $types);

        $this->isVariantOf = $isVariantOf;
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
     * @return \OpenActive\Models\SchemaOrg\ImageObject|string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ImageObject|string $logo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLogo($logo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ImageObject",
            "string",
        ];

        $logo = self::checkTypes($logo, $types);

        $this->logo = $logo;
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
     * @return \OpenActive\Models\SchemaOrg\Product|string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|string $material
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaterial($material)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
        ];

        $material = self::checkTypes($material, $types);

        $this->material = $material;
    }

    /**
     * @return string
     */
    public function getMobileUrl()
    {
        return $this->mobileUrl;
    }

    /**
     * @param string $mobileUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMobileUrl($mobileUrl)
    {
        $types = [
            "string",
        ];

        $mobileUrl = self::checkTypes($mobileUrl, $types);

        $this->mobileUrl = $mobileUrl;
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
     * @return \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\ListItem|string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getNegativeNotes()
    {
        return $this->negativeNotes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\ListItem|string|\OpenActive\Models\SchemaOrg\WebContent $negativeNotes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNegativeNotes($negativeNotes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\ListItem",
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $negativeNotes = self::checkTypes($negativeNotes, $types);

        $this->negativeNotes = $negativeNotes;
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
     * @return \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer|string $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
            "string",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
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
     * @return \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\ListItem|string|\OpenActive\Models\SchemaOrg\WebContent
     */
    public function getPositiveNotes()
    {
        return $this->positiveNotes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\ListItem|string|\OpenActive\Models\SchemaOrg\WebContent $positiveNotes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPositiveNotes($positiveNotes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\ListItem",
            "string",
            "\OpenActive\Models\SchemaOrg\WebContent",
        ];

        $positiveNotes = self::checkTypes($positiveNotes, $types);

        $this->positiveNotes = $positiveNotes;
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
     * @return Number|null
     */
    public function getRecycledContentPercentage()
    {
        return $this->recycledContentPercentage;
    }

    /**
     * @param Number|null $recycledContentPercentage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecycledContentPercentage($recycledContentPercentage)
    {
        $types = [
            "Number",
            "null",
        ];

        $recycledContentPercentage = self::checkTypes($recycledContentPercentage, $types);

        $this->recycledContentPercentage = $recycledContentPercentage;
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
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\SizeSpecification|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\QuantitativeValue|\OpenActive\Models\SchemaOrg\SizeSpecification|string $size
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSize($size)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "\OpenActive\Models\SchemaOrg\SizeSpecification",
            "string",
        ];

        $size = self::checkTypes($size, $types);

        $this->size = $size;
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
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    public function getSpecification()
    {
        return $this->specification;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string $specification
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpecification($specification)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        ];

        $specification = self::checkTypes($specification, $types);

        $this->specification = $specification;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ChemicalSubstance|\OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getSubstanceOfConcern()
    {
        return $this->substanceOfConcern;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ChemicalSubstance|\OpenActive\Models\SchemaOrg\DefinedTerm|string $substanceOfConcern
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSubstanceOfConcern($substanceOfConcern)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ChemicalSubstance",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $substanceOfConcern = self::checkTypes($substanceOfConcern, $types);

        $this->substanceOfConcern = $substanceOfConcern;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Mass|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Mass|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $weight
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWeight($weight)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Mass",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $weight = self::checkTypes($weight, $types);

        $this->weight = $weight;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Distance|\OpenActive\Models\SchemaOrg\QuantitativeValue|string $width
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWidth($width)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Distance",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
        ];

        $width = self::checkTypes($width, $types);

        $this->width = $width;
    }

}
