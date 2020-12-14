<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CreativeWork extends \OpenActive\Models\SchemaOrg\Thing
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CreativeWork";
    }

    public static function fieldList() {
        $fields = [
            "headline" => "headline",
            "aggregateRating" => "aggregateRating",
            "encodings" => "encodings",
            "usageInfo" => "usageInfo",
            "dateCreated" => "dateCreated",
            "isBasedOn" => "isBasedOn",
            "typicalAgeRange" => "typicalAgeRange",
            "accessibilityAPI" => "accessibilityAPI",
            "conditionsOfAccess" => "conditionsOfAccess",
            "assesses" => "assesses",
            "sourceOrganization" => "sourceOrganization",
            "interactionStatistic" => "interactionStatistic",
            "creator" => "creator",
            "interactivityType" => "interactivityType",
            "version" => "version",
            "spatial" => "spatial",
            "abstract" => "abstract",
            "publisherImprint" => "publisherImprint",
            "about" => "about",
            "educationalLevel" => "educationalLevel",
            "producer" => "producer",
            "copyrightHolder" => "copyrightHolder",
            "mentions" => "mentions",
            "isAccessibleForFree" => "isAccessibleForFree",
            "creditText" => "creditText",
            "sdPublisher" => "sdPublisher",
            "genre" => "genre",
            "funder" => "funder",
            "teaches" => "teaches",
            "offers" => "offers",
            "editor" => "editor",
            "contentRating" => "contentRating",
            "translationOfWork" => "translationOfWork",
            "maintainer" => "maintainer",
            "correction" => "correction",
            "materialExtent" => "materialExtent",
            "publisher" => "publisher",
            "datePublished" => "datePublished",
            "workExample" => "workExample",
            "editEIDR" => "editEIDR",
            "comment" => "comment",
            "license" => "license",
            "author" => "author",
            "provider" => "provider",
            "copyrightNotice" => "copyrightNotice",
            "sdDatePublished" => "sdDatePublished",
            "audio" => "audio",
            "locationCreated" => "locationCreated",
            "alternativeHeadline" => "alternativeHeadline",
            "dateModified" => "dateModified",
            "associatedMedia" => "associatedMedia",
            "discussionUrl" => "discussionUrl",
            "translator" => "translator",
            "isFamilyFriendly" => "isFamilyFriendly",
            "accessibilityControl" => "accessibilityControl",
            "timeRequired" => "timeRequired",
            "accessMode" => "accessMode",
            "educationalUse" => "educationalUse",
            "review" => "review",
            "awards" => "awards",
            "fileFormat" => "fileFormat",
            "material" => "material",
            "video" => "video",
            "temporal" => "temporal",
            "accountablePerson" => "accountablePerson",
            "text" => "text",
            "audience" => "audience",
            "sdLicense" => "sdLicense",
            "exampleOfWork" => "exampleOfWork",
            "creativeWorkStatus" => "creativeWorkStatus",
            "size" => "size",
            "educationalAlignment" => "educationalAlignment",
            "keywords" => "keywords",
            "pattern" => "pattern",
            "publication" => "publication",
            "accessibilityFeature" => "accessibilityFeature",
            "accessModeSufficient" => "accessModeSufficient",
            "contentReferenceTime" => "contentReferenceTime",
            "encodingFormat" => "encodingFormat",
            "commentCount" => "commentCount",
            "schemaVersion" => "schemaVersion",
            "isPartOf" => "isPartOf",
            "copyrightYear" => "copyrightYear",
            "acquireLicensePage" => "acquireLicensePage",
            "spatialCoverage" => "spatialCoverage",
            "temporalCoverage" => "temporalCoverage",
            "reviews" => "reviews",
            "hasPart" => "hasPart",
            "encoding" => "encoding",
            "publishingPrinciples" => "publishingPrinciples",
            "accessibilitySummary" => "accessibilitySummary",
            "accessibilityHazard" => "accessibilityHazard",
            "citation" => "citation",
            "inLanguage" => "inLanguage",
            "thumbnailUrl" => "thumbnailUrl",
            "learningResourceType" => "learningResourceType",
            "mainEntity" => "mainEntity",
            "contentLocation" => "contentLocation",
            "expires" => "expires",
            "character" => "character",
            "isBasedOnUrl" => "isBasedOnUrl",
            "award" => "award",
            "releasedEvent" => "releasedEvent",
            "sponsor" => "sponsor",
            "recordedAt" => "recordedAt",
            "position" => "position",
            "contributor" => "contributor",
            "workTranslation" => "workTranslation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * Headline of the article.
     *
     *
     * @var string
     */
    protected $headline;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating
     */
    protected $aggregateRating;

    /**
     * A media object that encodes this CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $encodings;

    /**
     * The schema.org [[usageInfo]] property indicates further information about a [[CreativeWork]]. This property is applicable both to works that are freely available and to those that require payment or other transactions. It can reference additional information e.g. community expectations on preferred linking and citation conventions, as well as purchasing details. For something that can be commercially licensed, usageInfo can provide detailed, resource-specific information about licensing options.
     * 
     * This property can be used alongside the license property which indicates license(s) applicable to some piece of content. The usageInfo property can provide information about other licensing options, e.g. acquiring commercial usage rights for an image that is also available under non-commercial creative commons licenses.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $usageInfo;

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     *
     * @var Date|DateTime|null
     */
    protected $dateCreated;

    /**
     * A resource from which this work is derived or from which it is a modification or adaption.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Product
     */
    protected $isBasedOn;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     *
     * @var string
     */
    protected $typicalAgeRange;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API ([WebSchemas wiki lists possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     *
     * @var string
     */
    protected $accessibilityAPI;

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as an [[ArchiveComponent]] held by an [[ArchiveOrganization]]. This property is not suitable for use as a general Web access control mechanism. It is expressed only in natural language.\n\nFor example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ". 
     *
     *
     * @var string
     */
    protected $conditionsOfAccess;

    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $assesses;

    /**
     * The Organization on whose behalf the creator was working.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $sourceOrganization;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\InteractionCounter
     */
    protected $interactionStatistic;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $creator;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     *
     * @var string
     */
    protected $interactivityType;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     *
     * @var string|Number|null
     */
    protected $version;

    /**
     * The "spatial" property can be used in cases when more specific properties
     * (e.g. [[locationCreated]], [[spatialCoverage]], [[contentLocation]]) are not known to be appropriate.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $spatial;

    /**
     * An abstract is a short description that summarizes a [[CreativeWork]].
     *
     *
     * @var string
     */
    protected $abstract;

    /**
     * The publishing division which published the comic.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $publisherImprint;

    /**
     * The subject matter of the content.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $about;

    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $educationalLevel;

    /**
     * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $producer;

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $copyrightHolder;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $mentions;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     *
     * @var bool|null
     */
    protected $isAccessibleForFree;

    /**
     * Text that can be used to credit person(s) and/or organization(s) associated with a published Creative Work.
     *
     *
     * @var string
     */
    protected $creditText;

    /**
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often re-publish existing content with more explicitly structured metadata. The
     * [[sdPublisher]] property helps make such practices more explicit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $sdPublisher;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     *
     * @var string
     */
    protected $genre;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $funder;

    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $teaches;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    protected $offers;

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $editor;

    /**
     * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Rating|string
     */
    protected $contentRating;

    /**
     * The work that this work has been translated from. e.g. 物种起源 is a translationOf “On the Origin of Species”
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $translationOfWork;

    /**
     * A maintainer of a [[Dataset]], software package ([[SoftwareApplication]]), or other [[Project]]. A maintainer is a [[Person]] or [[Organization]] that manages contributions to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on "upstream" sources. When [[maintainer]] is applied to a specific version of something e.g. a particular version or packaging of a [[Dataset]], it is always  possible that the upstream source has a different maintainer. The [[isBasedOn]] property can be used to indicate such relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $maintainer;

    /**
     * Indicates a correction to a [[CreativeWork]], either via a [[CorrectionComment]], textually or in another document.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CorrectionComment
     */
    protected $correction;

    /**
     * [object Object]
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $materialExtent;

    /**
     * The publisher of the creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $publisher;

    /**
     * Date of first broadcast/publication.
     *
     *
     * @var Date|DateTime|null
     */
    protected $datePublished;

    /**
     * Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $workExample;

    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing a specific edit / edition for a work of film or television.
     * 
     * For example, the motion picture known as "Ghostbusters" whose [[titleEIDR]] is "10.5240/7EC7-228A-510A-053E-CBB8-J", has several edits e.g. "10.5240/1F2A-E1C5-680A-14C6-E76B-I" and "10.5240/8A35-3BEE-6497-5D12-9E4F-3".
     * 
     * Since schema.org types like [[Movie]] and [[TVEpisode]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description.
     * 
     *
     *
     * @var string
     */
    protected $editEIDR;

    /**
     * Comments, typically from users.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Comment
     */
    protected $comment;

    /**
     * A license document that applies to this content, typically indicated by URL.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $license;

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $author;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $provider;

    /**
     * Text of a notice appropriate for describing the copyright aspects of this Creative Work, ideally indicating the owner of the copyright for the Work.
     *
     *
     * @var string
     */
    protected $copyrightNotice;

    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside [[sdPublisher]]
     *
     *
     * @var Date|null
     */
    protected $sdDatePublished;

    /**
     * An embedded audio object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AudioObject|\OpenActive\Models\SchemaOrg\MusicRecording|\OpenActive\Models\SchemaOrg\Clip
     */
    protected $audio;

    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $locationCreated;

    /**
     * A secondary title of the CreativeWork.
     *
     *
     * @var string
     */
    protected $alternativeHeadline;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     *
     *
     * @var Date|DateTime|null
     */
    protected $dateModified;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $associatedMedia;

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     *
     * @var string
     */
    protected $discussionUrl;

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $translator;

    /**
     * Indicates whether this content is family friendly.
     *
     *
     * @var bool|null
     */
    protected $isFamilyFriendly;

    /**
     * Identifies input methods that are sufficient to fully control the described resource ([WebSchemas wiki lists possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     *
     * @var string
     */
    protected $accessibilityControl;

    /**
     * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'PT30M', 'PT1H25M'.
     *
     *
     * @var DateInterval|null
     */
    protected $timeRequired;

    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Expected values include: auditory, tactile, textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
     *       
     *
     *
     * @var string
     */
    protected $accessMode;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $educationalUse;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $review;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * Media type, typically MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of the content e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.
     *
     *
     * @var string
     */
    protected $fileFormat;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Product
     */
    protected $material;

    /**
     * An embedded video object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject|\OpenActive\Models\SchemaOrg\Clip
     */
    protected $video;

    /**
     * The "temporal" property can be used in cases where more specific properties
     * (e.g. [[temporalCoverage]], [[dateCreated]], [[dateModified]], [[datePublished]]) are not known to be appropriate.
     *
     *
     * @var DateTime|string|null
     */
    protected $temporal;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $accountablePerson;

    /**
     * The textual content of this CreativeWork.
     *
     *
     * @var string
     */
    protected $text;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience
     */
    protected $audience;

    /**
     * A license document that applies to this structured data, typically indicated by URL.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $sdLicense;

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $exampleOfWork;

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete. Some organizations define a set of terms for the stages of their publication lifecycle.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $creativeWorkStatus;

    /**
     * A standardized size of a product or creative work, often simplifying richer information into a simple textual string, either through referring to named sizes or (in the case of product markup), by adopting conventional simplifications. Use of QuantitativeValue with a unitCode or unitText can add more structure; in other cases, the /width, /height, /depth and /weight properties may be more applicable. 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\QuantitativeValue|string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $size;

    /**
     * An alignment to an established educational framework.
     * 
     * This property should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AlignmentObject
     */
    protected $educationalAlignment;

    /**
     * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $keywords;

    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to controlled value schemes are also supported.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $pattern;

    /**
     * A publication event associated with the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PublicationEvent
     */
    protected $publication;

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility ([WebSchemas wiki lists possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     *
     * @var string
     */
    protected $accessibilityFeature;

    /**
     * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Expected values include:  auditory, tactile, textual, visual.
     *       
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList
     */
    protected $accessModeSufficient;

    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within an Event.
     *
     *
     * @var DateTime|null
     */
    protected $contentReferenceTime;

    /**
     * Media type typically expressed using a MIME format (see [IANA site](http://www.iana.org/assignments/media-types/media-types.xhtml) and [MDN reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types)) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).
     * 
     * In cases where a [[CreativeWork]] has several media type representations, [[encoding]] can be used to indicate each [[MediaObject]] alongside particular [[encodingFormat]] information.
     * 
     * Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     *
     *
     * @var string
     */
    protected $encodingFormat;

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
     *
     *
     * @var int|null
     */
    protected $commentCount;

    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. For example, a document could declare a schemaVersion using an URL such as https://schema.org/version/2.0/ if precise indication of schema version was required by some application. 
     *
     *
     * @var string
     */
    protected $schemaVersion;

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $isPartOf;

    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     *
     *
     * @var Number|null
     */
    protected $copyrightYear;

    /**
     * Indicates a page documenting how licenses can be purchased or otherwise acquired, for the current item.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $acquireLicensePage;

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content. It is a subproperty of
     *       contentLocation intended primarily for more technical and detailed materials. For example with a Dataset, it indicates
     *       areas that the dataset describes: a dataset of New York weather would have spatialCoverage which was the place: the state of New York.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $spatialCoverage;

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in [ISO 8601 time interval format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In
     *       the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage in broader terms - textually or via well-known URL.
     *       Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945".
     * 
     * Open-ended date ranges can be written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
     *
     *
     * @var DateTime|string|null
     */
    protected $temporalCoverage;

    /**
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $reviews;

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $hasPart;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $encoding;

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual e.g. a [[Person]] writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]].
     * 
     * While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a [[funder]]) can be expressed using schema.org terminology.
     * 
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $publishingPrinciples;

    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed."
     *
     *
     * @var string
     */
    protected $accessibilitySummary;

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 ([WebSchemas wiki lists possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     *
     * @var string
     */
    protected $accessibilityHazard;

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $citation;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $inLanguage;

    /**
     * A thumbnail image relevant to the Thing.
     *
     *
     * @var string
     */
    protected $thumbnailUrl;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    protected $learningResourceType;

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $mainEntity;

    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $contentLocation;

    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance is time-limited, or a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date.
     *
     *
     * @var Date|null
     */
    protected $expires;

    /**
     * Fictional person connected with a creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $character;

    /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $isBasedOnUrl;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PublicationEvent
     */
    protected $releasedEvent;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $sponsor;

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $recordedAt;

    /**
     * The position of an item in a series or sequence of items.
     *
     *
     * @var string|int|null
     */
    protected $position;

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $contributor;

    /**
     * A work that is a translation of the content of this work. e.g. 西遊記 has an English workTranslation “Journey to the West”,a German workTranslation “Monkeys Pilgerfahrt” and a Vietnamese  translation Tây du ký bình khảo.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $workTranslation;

    /**
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @param string $headline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHeadline($headline)
    {
        $types = [
            "string",
        ];

        $headline = self::checkTypes($headline, $types);

        $this->headline = $headline;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAggregateRating($aggregateRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AggregateRating",
        ];

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getEncodings()
    {
        return $this->encodings;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject $encodings
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncodings($encodings)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
        ];

        $encodings = self::checkTypes($encodings, $types);

        $this->encodings = $encodings;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getUsageInfo()
    {
        return $this->usageInfo;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $usageInfo
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUsageInfo($usageInfo)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        ];

        $usageInfo = self::checkTypes($usageInfo, $types);

        $this->usageInfo = $usageInfo;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param Date|DateTime|null $dateCreated
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateCreated($dateCreated)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $dateCreated = self::checkTypes($dateCreated, $types);

        $this->dateCreated = $dateCreated;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Product
     */
    public function getIsBasedOn()
    {
        return $this->isBasedOn;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Product $isBasedOn
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsBasedOn($isBasedOn)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\Product",
        ];

        $isBasedOn = self::checkTypes($isBasedOn, $types);

        $this->isBasedOn = $isBasedOn;
    }

    /**
     * @return string
     */
    public function getTypicalAgeRange()
    {
        return $this->typicalAgeRange;
    }

    /**
     * @param string $typicalAgeRange
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTypicalAgeRange($typicalAgeRange)
    {
        $types = [
            "string",
        ];

        $typicalAgeRange = self::checkTypes($typicalAgeRange, $types);

        $this->typicalAgeRange = $typicalAgeRange;
    }

    /**
     * @return string
     */
    public function getAccessibilityAPI()
    {
        return $this->accessibilityAPI;
    }

    /**
     * @param string $accessibilityAPI
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilityAPI($accessibilityAPI)
    {
        $types = [
            "string",
        ];

        $accessibilityAPI = self::checkTypes($accessibilityAPI, $types);

        $this->accessibilityAPI = $accessibilityAPI;
    }

    /**
     * @return string
     */
    public function getConditionsOfAccess()
    {
        return $this->conditionsOfAccess;
    }

    /**
     * @param string $conditionsOfAccess
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setConditionsOfAccess($conditionsOfAccess)
    {
        $types = [
            "string",
        ];

        $conditionsOfAccess = self::checkTypes($conditionsOfAccess, $types);

        $this->conditionsOfAccess = $conditionsOfAccess;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getAssesses()
    {
        return $this->assesses;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $assesses
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssesses($assesses)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $assesses = self::checkTypes($assesses, $types);

        $this->assesses = $assesses;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getSourceOrganization()
    {
        return $this->sourceOrganization;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $sourceOrganization
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSourceOrganization($sourceOrganization)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $sourceOrganization = self::checkTypes($sourceOrganization, $types);

        $this->sourceOrganization = $sourceOrganization;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\InteractionCounter
     */
    public function getInteractionStatistic()
    {
        return $this->interactionStatistic;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\InteractionCounter $interactionStatistic
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractionStatistic($interactionStatistic)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\InteractionCounter",
        ];

        $interactionStatistic = self::checkTypes($interactionStatistic, $types);

        $this->interactionStatistic = $interactionStatistic;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $creator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreator($creator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $creator = self::checkTypes($creator, $types);

        $this->creator = $creator;
    }

    /**
     * @return string
     */
    public function getInteractivityType()
    {
        return $this->interactivityType;
    }

    /**
     * @param string $interactivityType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInteractivityType($interactivityType)
    {
        $types = [
            "string",
        ];

        $interactivityType = self::checkTypes($interactivityType, $types);

        $this->interactivityType = $interactivityType;
    }

    /**
     * @return string|Number|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string|Number|null $version
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVersion($version)
    {
        $types = [
            "string",
            "Number",
            "null",
        ];

        $version = self::checkTypes($version, $types);

        $this->version = $version;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getSpatial()
    {
        return $this->spatial;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $spatial
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpatial($spatial)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $spatial = self::checkTypes($spatial, $types);

        $this->spatial = $spatial;
    }

    /**
     * @return string
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * @param string $abstract
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbstract($abstract)
    {
        $types = [
            "string",
        ];

        $abstract = self::checkTypes($abstract, $types);

        $this->abstract = $abstract;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization
     */
    public function getPublisherImprint()
    {
        return $this->publisherImprint;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization $publisherImprint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublisherImprint($publisherImprint)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $publisherImprint = self::checkTypes($publisherImprint, $types);

        $this->publisherImprint = $publisherImprint;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $about
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAbout($about)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $about = self::checkTypes($about, $types);

        $this->about = $about;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getEducationalLevel()
    {
        return $this->educationalLevel;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $educationalLevel
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalLevel($educationalLevel)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        ];

        $educationalLevel = self::checkTypes($educationalLevel, $types);

        $this->educationalLevel = $educationalLevel;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $producer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProducer($producer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $producer = self::checkTypes($producer, $types);

        $this->producer = $producer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getCopyrightHolder()
    {
        return $this->copyrightHolder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $copyrightHolder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCopyrightHolder($copyrightHolder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $copyrightHolder = self::checkTypes($copyrightHolder, $types);

        $this->copyrightHolder = $copyrightHolder;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $mentions
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMentions($mentions)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $mentions = self::checkTypes($mentions, $types);

        $this->mentions = $mentions;
    }

    /**
     * @return bool|null
     */
    public function getIsAccessibleForFree()
    {
        return $this->isAccessibleForFree;
    }

    /**
     * @param bool|null $isAccessibleForFree
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsAccessibleForFree($isAccessibleForFree)
    {
        $types = [
            "bool",
            "null",
        ];

        $isAccessibleForFree = self::checkTypes($isAccessibleForFree, $types);

        $this->isAccessibleForFree = $isAccessibleForFree;
    }

    /**
     * @return string
     */
    public function getCreditText()
    {
        return $this->creditText;
    }

    /**
     * @param string $creditText
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreditText($creditText)
    {
        $types = [
            "string",
        ];

        $creditText = self::checkTypes($creditText, $types);

        $this->creditText = $creditText;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getSdPublisher()
    {
        return $this->sdPublisher;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $sdPublisher
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSdPublisher($sdPublisher)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $sdPublisher = self::checkTypes($sdPublisher, $types);

        $this->sdPublisher = $sdPublisher;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGenre($genre)
    {
        $types = [
            "string",
        ];

        $genre = self::checkTypes($genre, $types);

        $this->genre = $genre;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getFunder()
    {
        return $this->funder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $funder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFunder($funder)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getTeaches()
    {
        return $this->teaches;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $teaches
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTeaches($teaches)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $teaches = self::checkTypes($teaches, $types);

        $this->teaches = $teaches;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Demand|\OpenActive\Models\SchemaOrg\Offer $offers
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOffers($offers)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
        ];

        $offers = self::checkTypes($offers, $types);

        $this->offers = $offers;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $editor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEditor($editor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $editor = self::checkTypes($editor, $types);

        $this->editor = $editor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Rating|string
     */
    public function getContentRating()
    {
        return $this->contentRating;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Rating|string $contentRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentRating($contentRating)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Rating",
            "string",
        ];

        $contentRating = self::checkTypes($contentRating, $types);

        $this->contentRating = $contentRating;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getTranslationOfWork()
    {
        return $this->translationOfWork;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $translationOfWork
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTranslationOfWork($translationOfWork)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $translationOfWork = self::checkTypes($translationOfWork, $types);

        $this->translationOfWork = $translationOfWork;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getMaintainer()
    {
        return $this->maintainer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $maintainer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaintainer($maintainer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $maintainer = self::checkTypes($maintainer, $types);

        $this->maintainer = $maintainer;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CorrectionComment
     */
    public function getCorrection()
    {
        return $this->correction;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CorrectionComment $correction
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCorrection($correction)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CorrectionComment",
        ];

        $correction = self::checkTypes($correction, $types);

        $this->correction = $correction;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    public function getMaterialExtent()
    {
        return $this->materialExtent;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\QuantitativeValue $materialExtent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaterialExtent($materialExtent)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        ];

        $materialExtent = self::checkTypes($materialExtent, $types);

        $this->materialExtent = $materialExtent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $publisher
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublisher($publisher)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $publisher = self::checkTypes($publisher, $types);

        $this->publisher = $publisher;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param Date|DateTime|null $datePublished
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePublished($datePublished)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $datePublished = self::checkTypes($datePublished, $types);

        $this->datePublished = $datePublished;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getWorkExample()
    {
        return $this->workExample;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $workExample
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkExample($workExample)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $workExample = self::checkTypes($workExample, $types);

        $this->workExample = $workExample;
    }

    /**
     * @return string
     */
    public function getEditEIDR()
    {
        return $this->editEIDR;
    }

    /**
     * @param string $editEIDR
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEditEIDR($editEIDR)
    {
        $types = [
            "string",
        ];

        $editEIDR = self::checkTypes($editEIDR, $types);

        $this->editEIDR = $editEIDR;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Comment $comment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setComment($comment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Comment",
        ];

        $comment = self::checkTypes($comment, $types);

        $this->comment = $comment;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $license
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLicense($license)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $license = self::checkTypes($license, $types);

        $this->license = $license;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $author
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAuthor($author)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $author = self::checkTypes($author, $types);

        $this->author = $author;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
    }

    /**
     * @return string
     */
    public function getCopyrightNotice()
    {
        return $this->copyrightNotice;
    }

    /**
     * @param string $copyrightNotice
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCopyrightNotice($copyrightNotice)
    {
        $types = [
            "string",
        ];

        $copyrightNotice = self::checkTypes($copyrightNotice, $types);

        $this->copyrightNotice = $copyrightNotice;
    }

    /**
     * @return Date|null
     */
    public function getSdDatePublished()
    {
        return $this->sdDatePublished;
    }

    /**
     * @param Date|null $sdDatePublished
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSdDatePublished($sdDatePublished)
    {
        $types = [
            "Date",
            "null",
        ];

        $sdDatePublished = self::checkTypes($sdDatePublished, $types);

        $this->sdDatePublished = $sdDatePublished;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AudioObject|\OpenActive\Models\SchemaOrg\MusicRecording|\OpenActive\Models\SchemaOrg\Clip
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AudioObject|\OpenActive\Models\SchemaOrg\MusicRecording|\OpenActive\Models\SchemaOrg\Clip $audio
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudio($audio)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AudioObject",
            "\OpenActive\Models\SchemaOrg\MusicRecording",
            "\OpenActive\Models\SchemaOrg\Clip",
        ];

        $audio = self::checkTypes($audio, $types);

        $this->audio = $audio;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getLocationCreated()
    {
        return $this->locationCreated;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $locationCreated
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLocationCreated($locationCreated)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $locationCreated = self::checkTypes($locationCreated, $types);

        $this->locationCreated = $locationCreated;
    }

    /**
     * @return string
     */
    public function getAlternativeHeadline()
    {
        return $this->alternativeHeadline;
    }

    /**
     * @param string $alternativeHeadline
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAlternativeHeadline($alternativeHeadline)
    {
        $types = [
            "string",
        ];

        $alternativeHeadline = self::checkTypes($alternativeHeadline, $types);

        $this->alternativeHeadline = $alternativeHeadline;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param Date|DateTime|null $dateModified
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateModified($dateModified)
    {
        $types = [
            "Date",
            "DateTime",
            "null",
        ];

        $dateModified = self::checkTypes($dateModified, $types);

        $this->dateModified = $dateModified;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getAssociatedMedia()
    {
        return $this->associatedMedia;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject $associatedMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAssociatedMedia($associatedMedia)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
        ];

        $associatedMedia = self::checkTypes($associatedMedia, $types);

        $this->associatedMedia = $associatedMedia;
    }

    /**
     * @return string
     */
    public function getDiscussionUrl()
    {
        return $this->discussionUrl;
    }

    /**
     * @param string $discussionUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDiscussionUrl($discussionUrl)
    {
        $types = [
            "string",
        ];

        $discussionUrl = self::checkTypes($discussionUrl, $types);

        $this->discussionUrl = $discussionUrl;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $translator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTranslator($translator)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $translator = self::checkTypes($translator, $types);

        $this->translator = $translator;
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
     * @return string
     */
    public function getAccessibilityControl()
    {
        return $this->accessibilityControl;
    }

    /**
     * @param string $accessibilityControl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilityControl($accessibilityControl)
    {
        $types = [
            "string",
        ];

        $accessibilityControl = self::checkTypes($accessibilityControl, $types);

        $this->accessibilityControl = $accessibilityControl;
    }

    /**
     * @return DateInterval|null
     */
    public function getTimeRequired()
    {
        return $this->timeRequired;
    }

    /**
     * @param DateInterval|null $timeRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTimeRequired($timeRequired)
    {
        $types = [
            "DateInterval",
            "null",
        ];

        $timeRequired = self::checkTypes($timeRequired, $types);

        $this->timeRequired = $timeRequired;
    }

    /**
     * @return string
     */
    public function getAccessMode()
    {
        return $this->accessMode;
    }

    /**
     * @param string $accessMode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessMode($accessMode)
    {
        $types = [
            "string",
        ];

        $accessMode = self::checkTypes($accessMode, $types);

        $this->accessMode = $accessMode;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getEducationalUse()
    {
        return $this->educationalUse;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $educationalUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalUse($educationalUse)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $educationalUse = self::checkTypes($educationalUse, $types);

        $this->educationalUse = $educationalUse;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReview($review)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
        ];

        $review = self::checkTypes($review, $types);

        $this->review = $review;
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
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * @param string $fileFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setFileFormat($fileFormat)
    {
        $types = [
            "string",
        ];

        $fileFormat = self::checkTypes($fileFormat, $types);

        $this->fileFormat = $fileFormat;
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
     * @return \OpenActive\Models\SchemaOrg\VideoObject|\OpenActive\Models\SchemaOrg\Clip
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoObject|\OpenActive\Models\SchemaOrg\Clip $video
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideo($video)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\VideoObject",
            "\OpenActive\Models\SchemaOrg\Clip",
        ];

        $video = self::checkTypes($video, $types);

        $this->video = $video;
    }

    /**
     * @return DateTime|string|null
     */
    public function getTemporal()
    {
        return $this->temporal;
    }

    /**
     * @param DateTime|string|null $temporal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTemporal($temporal)
    {
        $types = [
            "DateTime",
            "string",
            "null",
        ];

        $temporal = self::checkTypes($temporal, $types);

        $this->temporal = $temporal;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getAccountablePerson()
    {
        return $this->accountablePerson;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $accountablePerson
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccountablePerson($accountablePerson)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $accountablePerson = self::checkTypes($accountablePerson, $types);

        $this->accountablePerson = $accountablePerson;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setText($text)
    {
        $types = [
            "string",
        ];

        $text = self::checkTypes($text, $types);

        $this->text = $text;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudience($audience)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Audience",
        ];

        $audience = self::checkTypes($audience, $types);

        $this->audience = $audience;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getSdLicense()
    {
        return $this->sdLicense;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $sdLicense
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSdLicense($sdLicense)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $sdLicense = self::checkTypes($sdLicense, $types);

        $this->sdLicense = $sdLicense;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getExampleOfWork()
    {
        return $this->exampleOfWork;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $exampleOfWork
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExampleOfWork($exampleOfWork)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $exampleOfWork = self::checkTypes($exampleOfWork, $types);

        $this->exampleOfWork = $exampleOfWork;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getCreativeWorkStatus()
    {
        return $this->creativeWorkStatus;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $creativeWorkStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreativeWorkStatus($creativeWorkStatus)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $creativeWorkStatus = self::checkTypes($creativeWorkStatus, $types);

        $this->creativeWorkStatus = $creativeWorkStatus;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\QuantitativeValue|string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\QuantitativeValue|string|\OpenActive\Models\SchemaOrg\DefinedTerm $size
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSize($size)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $size = self::checkTypes($size, $types);

        $this->size = $size;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AlignmentObject
     */
    public function getEducationalAlignment()
    {
        return $this->educationalAlignment;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AlignmentObject $educationalAlignment
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalAlignment($educationalAlignment)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
        ];

        $educationalAlignment = self::checkTypes($educationalAlignment, $types);

        $this->educationalAlignment = $educationalAlignment;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $keywords
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKeywords($keywords)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $keywords = self::checkTypes($keywords, $types);

        $this->keywords = $keywords;
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
     * @return \OpenActive\Models\SchemaOrg\PublicationEvent
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PublicationEvent $publication
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublication($publication)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PublicationEvent",
        ];

        $publication = self::checkTypes($publication, $types);

        $this->publication = $publication;
    }

    /**
     * @return string
     */
    public function getAccessibilityFeature()
    {
        return $this->accessibilityFeature;
    }

    /**
     * @param string $accessibilityFeature
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilityFeature($accessibilityFeature)
    {
        $types = [
            "string",
        ];

        $accessibilityFeature = self::checkTypes($accessibilityFeature, $types);

        $this->accessibilityFeature = $accessibilityFeature;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ItemList
     */
    public function getAccessModeSufficient()
    {
        return $this->accessModeSufficient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList $accessModeSufficient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessModeSufficient($accessModeSufficient)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\ItemList",
        ];

        $accessModeSufficient = self::checkTypes($accessModeSufficient, $types);

        $this->accessModeSufficient = $accessModeSufficient;
    }

    /**
     * @return DateTime|null
     */
    public function getContentReferenceTime()
    {
        return $this->contentReferenceTime;
    }

    /**
     * @param DateTime|null $contentReferenceTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentReferenceTime($contentReferenceTime)
    {
        $types = [
            "DateTime",
            "null",
        ];

        $contentReferenceTime = self::checkTypes($contentReferenceTime, $types);

        $this->contentReferenceTime = $contentReferenceTime;
    }

    /**
     * @return string
     */
    public function getEncodingFormat()
    {
        return $this->encodingFormat;
    }

    /**
     * @param string $encodingFormat
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncodingFormat($encodingFormat)
    {
        $types = [
            "string",
        ];

        $encodingFormat = self::checkTypes($encodingFormat, $types);

        $this->encodingFormat = $encodingFormat;
    }

    /**
     * @return int|null
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param int|null $commentCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCommentCount($commentCount)
    {
        $types = [
            "int",
            "null",
        ];

        $commentCount = self::checkTypes($commentCount, $types);

        $this->commentCount = $commentCount;
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return $this->schemaVersion;
    }

    /**
     * @param string $schemaVersion
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSchemaVersion($schemaVersion)
    {
        $types = [
            "string",
        ];

        $schemaVersion = self::checkTypes($schemaVersion, $types);

        $this->schemaVersion = $schemaVersion;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getIsPartOf()
    {
        return $this->isPartOf;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $isPartOf
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsPartOf($isPartOf)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $isPartOf = self::checkTypes($isPartOf, $types);

        $this->isPartOf = $isPartOf;
    }

    /**
     * @return Number|null
     */
    public function getCopyrightYear()
    {
        return $this->copyrightYear;
    }

    /**
     * @param Number|null $copyrightYear
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCopyrightYear($copyrightYear)
    {
        $types = [
            "Number",
            "null",
        ];

        $copyrightYear = self::checkTypes($copyrightYear, $types);

        $this->copyrightYear = $copyrightYear;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getAcquireLicensePage()
    {
        return $this->acquireLicensePage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $acquireLicensePage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAcquireLicensePage($acquireLicensePage)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $acquireLicensePage = self::checkTypes($acquireLicensePage, $types);

        $this->acquireLicensePage = $acquireLicensePage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getSpatialCoverage()
    {
        return $this->spatialCoverage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $spatialCoverage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSpatialCoverage($spatialCoverage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $spatialCoverage = self::checkTypes($spatialCoverage, $types);

        $this->spatialCoverage = $spatialCoverage;
    }

    /**
     * @return DateTime|string|null
     */
    public function getTemporalCoverage()
    {
        return $this->temporalCoverage;
    }

    /**
     * @param DateTime|string|null $temporalCoverage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTemporalCoverage($temporalCoverage)
    {
        $types = [
            "DateTime",
            "string",
            "null",
        ];

        $temporalCoverage = self::checkTypes($temporalCoverage, $types);

        $this->temporalCoverage = $temporalCoverage;
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
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReviews($reviews)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Review",
        ];

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getHasPart()
    {
        return $this->hasPart;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $hasPart
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHasPart($hasPart)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $hasPart = self::checkTypes($hasPart, $types);

        $this->hasPart = $hasPart;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MediaObject $encoding
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEncoding($encoding)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\MediaObject",
        ];

        $encoding = self::checkTypes($encoding, $types);

        $this->encoding = $encoding;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $publishingPrinciples
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublishingPrinciples($publishingPrinciples)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $publishingPrinciples = self::checkTypes($publishingPrinciples, $types);

        $this->publishingPrinciples = $publishingPrinciples;
    }

    /**
     * @return string
     */
    public function getAccessibilitySummary()
    {
        return $this->accessibilitySummary;
    }

    /**
     * @param string $accessibilitySummary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilitySummary($accessibilitySummary)
    {
        $types = [
            "string",
        ];

        $accessibilitySummary = self::checkTypes($accessibilitySummary, $types);

        $this->accessibilitySummary = $accessibilitySummary;
    }

    /**
     * @return string
     */
    public function getAccessibilityHazard()
    {
        return $this->accessibilityHazard;
    }

    /**
     * @param string $accessibilityHazard
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAccessibilityHazard($accessibilityHazard)
    {
        $types = [
            "string",
        ];

        $accessibilityHazard = self::checkTypes($accessibilityHazard, $types);

        $this->accessibilityHazard = $accessibilityHazard;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\CreativeWork $citation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCitation($citation)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $citation = self::checkTypes($citation, $types);

        $this->citation = $citation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $inLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInLanguage($inLanguage)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        ];

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    /**
     * @param string $thumbnailUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $types = [
            "string",
        ];

        $thumbnailUrl = self::checkTypes($thumbnailUrl, $types);

        $this->thumbnailUrl = $thumbnailUrl;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\DefinedTerm
     */
    public function getLearningResourceType()
    {
        return $this->learningResourceType;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\DefinedTerm $learningResourceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLearningResourceType($learningResourceType)
    {
        $types = [
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
        ];

        $learningResourceType = self::checkTypes($learningResourceType, $types);

        $this->learningResourceType = $learningResourceType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Thing
     */
    public function getMainEntity()
    {
        return $this->mainEntity;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Thing $mainEntity
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMainEntity($mainEntity)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Thing",
        ];

        $mainEntity = self::checkTypes($mainEntity, $types);

        $this->mainEntity = $mainEntity;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getContentLocation()
    {
        return $this->contentLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $contentLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentLocation($contentLocation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Place",
        ];

        $contentLocation = self::checkTypes($contentLocation, $types);

        $this->contentLocation = $contentLocation;
    }

    /**
     * @return Date|null
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param Date|null $expires
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpires($expires)
    {
        $types = [
            "Date",
            "null",
        ];

        $expires = self::checkTypes($expires, $types);

        $this->expires = $expires;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person $character
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCharacter($character)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
        ];

        $character = self::checkTypes($character, $types);

        $this->character = $character;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Product|string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getIsBasedOnUrl()
    {
        return $this->isBasedOnUrl;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Product|string|\OpenActive\Models\SchemaOrg\CreativeWork $isBasedOnUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIsBasedOnUrl($isBasedOnUrl)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $isBasedOnUrl = self::checkTypes($isBasedOnUrl, $types);

        $this->isBasedOnUrl = $isBasedOnUrl;
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
     * @return \OpenActive\Models\SchemaOrg\PublicationEvent
     */
    public function getReleasedEvent()
    {
        return $this->releasedEvent;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PublicationEvent $releasedEvent
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setReleasedEvent($releasedEvent)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PublicationEvent",
        ];

        $releasedEvent = self::checkTypes($releasedEvent, $types);

        $this->releasedEvent = $releasedEvent;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Event
     */
    public function getRecordedAt()
    {
        return $this->recordedAt;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Event $recordedAt
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecordedAt($recordedAt)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Event",
        ];

        $recordedAt = self::checkTypes($recordedAt, $types);

        $this->recordedAt = $recordedAt;
    }

    /**
     * @return string|int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string|int|null $position
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPosition($position)
    {
        $types = [
            "string",
            "int",
            "null",
        ];

        $position = self::checkTypes($position, $types);

        $this->position = $position;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $contributor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContributor($contributor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        ];

        $contributor = self::checkTypes($contributor, $types);

        $this->contributor = $contributor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork
     */
    public function getWorkTranslation()
    {
        return $this->workTranslation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork $workTranslation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setWorkTranslation($workTranslation)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        ];

        $workTranslation = self::checkTypes($workTranslation, $types);

        $this->workTranslation = $workTranslation;
    }

}
