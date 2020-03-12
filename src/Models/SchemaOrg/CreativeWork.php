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
            "about" => "about",
            "accessibilitySummary" => "accessibilitySummary",
            "educationalAlignment" => "educationalAlignment",
            "associatedMedia" => "associatedMedia",
            "funder" => "funder",
            "sponsor" => "sponsor",
            "audio" => "audio",
            "workExample" => "workExample",
            "provider" => "provider",
            "encoding" => "encoding",
            "interactivityType" => "interactivityType",
            "character" => "character",
            "audience" => "audience",
            "sourceOrganization" => "sourceOrganization",
            "isPartOf" => "isPartOf",
            "video" => "video",
            "publication" => "publication",
            "text" => "text",
            "expires" => "expires",
            "contributor" => "contributor",
            "publisher" => "publisher",
            "typicalAgeRange" => "typicalAgeRange",
            "position" => "position",
            "releasedEvent" => "releasedEvent",
            "educationalUse" => "educationalUse",
            "contentLocation" => "contentLocation",
            "schemaVersion" => "schemaVersion",
            "accessibilityFeature" => "accessibilityFeature",
            "aggregateRating" => "aggregateRating",
            "locationCreated" => "locationCreated",
            "accessModeSufficient" => "accessModeSufficient",
            "temporalCoverage" => "temporalCoverage",
            "accountablePerson" => "accountablePerson",
            "spatialCoverage" => "spatialCoverage",
            "reviews" => "reviews",
            "offers" => "offers",
            "editor" => "editor",
            "discussionUrl" => "discussionUrl",
            "award" => "award",
            "copyrightHolder" => "copyrightHolder",
            "accessibilityHazard" => "accessibilityHazard",
            "copyrightYear" => "copyrightYear",
            "awards" => "awards",
            "recordedAt" => "recordedAt",
            "spatial" => "spatial",
            "commentCount" => "commentCount",
            "fileFormat" => "fileFormat",
            "inLanguage" => "inLanguage",
            "temporal" => "temporal",
            "accessibilityAPI" => "accessibilityAPI",
            "interactionStatistic" => "interactionStatistic",
            "contentRating" => "contentRating",
            "learningResourceType" => "learningResourceType",
            "accessMode" => "accessMode",
            "material" => "material",
            "isFamilyFriendly" => "isFamilyFriendly",
            "exampleOfWork" => "exampleOfWork",
            "version" => "version",
            "dateModified" => "dateModified",
            "mainEntity" => "mainEntity",
            "genre" => "genre",
            "keywords" => "keywords",
            "author" => "author",
            "encodings" => "encodings",
            "isBasedOnUrl" => "isBasedOnUrl",
            "alternativeHeadline" => "alternativeHeadline",
            "timeRequired" => "timeRequired",
            "translator" => "translator",
            "thumbnailUrl" => "thumbnailUrl",
            "hasPart" => "hasPart",
            "comment" => "comment",
            "encodingFormat" => "encodingFormat",
            "review" => "review",
            "license" => "license",
            "accessibilityControl" => "accessibilityControl",
            "headline" => "headline",
            "isBasedOn" => "isBasedOn",
            "creator" => "creator",
            "publishingPrinciples" => "publishingPrinciples",
            "producer" => "producer",
            "mentions" => "mentions",
            "dateCreated" => "dateCreated",
            "datePublished" => "datePublished",
            "isAccessibleForFree" => "isAccessibleForFree",
            "citation" => "citation",
            "abstract" => "abstract",
            "creativeWorkStatus" => "creativeWorkStatus",
            "maintainer" => "maintainer",
            "contentReferenceTime" => "contentReferenceTime",
            "sdLicense" => "sdLicense",
            "correction" => "correction",
            "materialExtent" => "materialExtent",
            "sdDatePublished" => "sdDatePublished",
            "conditionsOfAccess" => "conditionsOfAccess",
            "sdPublisher" => "sdPublisher",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The subject matter of the content.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $about;

    /**
     * A human-readable summary of specific accessibility features or deficiencies, consistent with the other accessibility metadata but expressing subtleties such as "short descriptions are present but long descriptions will be needed for non-visual users" or "short descriptions are present and no long descriptions are needed."
     *
     *
     * @var string
     */
    protected $accessibilitySummary;

    /**
     * An alignment to an established educational framework.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AlignmentObject
     */
    protected $educationalAlignment;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for encoding.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $associatedMedia;

    /**
     * A person or organization that supports (sponsors) something through some kind of financial contribution.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $funder;

    /**
     * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $sponsor;

    /**
     * An embedded audio object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Clip|\OpenActive\Models\SchemaOrg\AudioObject|\OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $audio;

    /**
     * Example/instance/realization/derivation of the concept of this creative work. eg. The paperback edition, first edition, or eBook.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $workExample;

    /**
     * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $provider;

    /**
     * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $encoding;

    /**
     * The predominant mode of learning supported by the learning resource. Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     *
     * @var string
     */
    protected $interactivityType;

    /**
     * Fictional person connected with a creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $character;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Audience
     */
    protected $audience;

    /**
     * The Organization on whose behalf the creator was working.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization
     */
    protected $sourceOrganization;

    /**
     * Indicates an item or CreativeWork that this item, or CreativeWork (in some sense), is part of.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $isPartOf;

    /**
     * An embedded video object.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Clip|\OpenActive\Models\SchemaOrg\VideoObject
     */
    protected $video;

    /**
     * A publication event associated with the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PublicationEvent
     */
    protected $publication;

    /**
     * The textual content of this CreativeWork.
     *
     *
     * @var string
     */
    protected $text;

    /**
     * Date the content expires and is no longer useful or available. For example a <a class="localLink" href="https://schema.org/VideoObject">VideoObject</a> or <a class="localLink" href="https://schema.org/NewsArticle">NewsArticle</a> whose availability or relevance is time-limited, or a <a class="localLink" href="https://schema.org/ClaimReview">ClaimReview</a> fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date.
     *
     *
     * @var null|Date
     */
    protected $expires;

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $contributor;

    /**
     * The publisher of the creative work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $publisher;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     *
     * @var string
     */
    protected $typicalAgeRange;

    /**
     * The position of an item in a series or sequence of items.
     *
     *
     * @var null|int|string
     */
    protected $position;

    /**
     * The place and time the release was issued, expressed as a PublicationEvent.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PublicationEvent
     */
    protected $releasedEvent;

    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     *
     *
     * @var string
     */
    protected $educationalUse;

    /**
     * The location depicted or described in the content. For example, the location in a photograph or painting.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $contentLocation;

    /**
     * Indicates (by URL or string) a particular version of a schema used in some CreativeWork. For example, a document could declare a schemaVersion using an URL such as https://schema.org/version/2.0/ if precise indication of schema version was required by some application.
     *
     *
     * @var string
     */
    protected $schemaVersion;

    /**
     * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     *
     *
     * @var string
     */
    protected $accessibilityFeature;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AggregateRating
     */
    protected $aggregateRating;

    /**
     * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $locationCreated;

    /**
     * A list of single or combined accessModes that are sufficient to understand all the intellectual content of a resource. Expected values include:  auditory, tactile, textual, visual.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList
     */
    protected $accessModeSufficient;

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in <a href="https://en.wikipedia.org/wiki/ISO_8601#Time_intervals">ISO 8601 time interval format</a>. In
     *       the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage in broader terms - textually or via well-known URL.
     *       Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945".<br/><br/>
     * 
     * Open-ended date ranges can be written with ".." in place of the end date. For example, "2015-11/.." indicates a range beginning in November 2015 and with no specified final date. This is tentative and might be updated in future when ISO 8601 is officially updated.
     *
     *
     * @var null|string|DateTime
     */
    protected $temporalCoverage;

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person
     */
    protected $accountablePerson;

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
     * Review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $reviews;

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="https://schema.org/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="https://schema.org/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
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
     * A link to the page containing the comments of the CreativeWork.
     *
     *
     * @var string
     */
    protected $discussionUrl;

    /**
     * An award won by or for this item.
     *
     *
     * @var string
     */
    protected $award;

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $copyrightHolder;

    /**
     * A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     *
     *
     * @var string
     */
    protected $accessibilityHazard;

    /**
     * The year during which the claimed copyright for the CreativeWork was first asserted.
     *
     *
     * @var null|float
     */
    protected $copyrightYear;

    /**
     * Awards won by or for this item.
     *
     *
     * @var string
     */
    protected $awards;

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Event
     */
    protected $recordedAt;

    /**
     * The "spatial" property can be used in cases when more specific properties
     * (e.g. <a class="localLink" href="https://schema.org/locationCreated">locationCreated</a>, <a class="localLink" href="https://schema.org/spatialCoverage">spatialCoverage</a>, <a class="localLink" href="https://schema.org/contentLocation">contentLocation</a>) are not known to be appropriate.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $spatial;

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
     *
     *
     * @var null|int
     */
    protected $commentCount;

    /**
     * Media type, typically MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a>) of the content e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.
     *
     *
     * @var string
     */
    protected $fileFormat;

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/availableLanguage">availableLanguage</a>.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Language
     */
    protected $inLanguage;

    /**
     * The "temporal" property can be used in cases where more specific properties
     * (e.g. <a class="localLink" href="https://schema.org/temporalCoverage">temporalCoverage</a>, <a class="localLink" href="https://schema.org/dateCreated">dateCreated</a>, <a class="localLink" href="https://schema.org/dateModified">dateModified</a>, <a class="localLink" href="https://schema.org/datePublished">datePublished</a>) are not known to be appropriate.
     *
     *
     * @var null|string|DateTime
     */
    protected $temporal;

    /**
     * Indicates that the resource is compatible with the referenced accessibility API (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     *
     *
     * @var string
     */
    protected $accessibilityAPI;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\InteractionCounter
     */
    protected $interactionStatistic;

    /**
     * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Rating
     */
    protected $contentRating;

    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     *
     *
     * @var string
     */
    protected $learningResourceType;

    /**
     * The human sensory perceptual system or cognitive faculty through which a person may process or perceive information. Expected values include: auditory, tactile, textual, visual, colorDependent, chartOnVisual, chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
     *
     *
     * @var string
     */
    protected $accessMode;

    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\Product
     */
    protected $material;

    /**
     * Indicates whether this content is family friendly.
     *
     *
     * @var bool|null
     */
    protected $isFamilyFriendly;

    /**
     * A creative work that this work is an example/instance/realization/derivation of.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $exampleOfWork;

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     *
     * @var null|float|string
     */
    protected $version;

    /**
     * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
     *
     *
     * @var null|DateTime|Date
     */
    protected $dateModified;

    /**
     * Indicates the primary entity described in some page or other CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $mainEntity;

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     *
     * @var string
     */
    protected $genre;

    /**
     * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
     *
     *
     * @var string
     */
    protected $keywords;

    /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $author;

    /**
     * A media object that encodes this CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $encodings;

    /**
     * A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Product|string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $isBasedOnUrl;

    /**
     * A secondary title of the CreativeWork.
     *
     *
     * @var string
     */
    protected $alternativeHeadline;

    /**
     * Approximate or typical time it takes to work with or through this learning resource for the typical intended target audience, e.g. 'PT30M', 'PT1H25M'.
     *
     *
     * @var null|DateInterval
     */
    protected $timeRequired;

    /**
     * Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $translator;

    /**
     * A thumbnail image relevant to the Thing.
     *
     *
     * @var string
     */
    protected $thumbnailUrl;

    /**
     * Indicates an item or CreativeWork that is part of this item, or CreativeWork (in some sense).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $hasPart;

    /**
     * Comments, typically from users.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Comment
     */
    protected $comment;

    /**
     * Media type typically expressed using a MIME format (see <a href="http://www.iana.org/assignments/media-types/media-types.xhtml">IANA site</a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types">MDN reference</a>) e.g. application/zip for a SoftwareApplication binary, audio/mpeg for .mp3 etc.).<br/><br/>
     * 
     * In cases where a <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a> has several media type representations, <a class="localLink" href="https://schema.org/encoding">encoding</a> can be used to indicate each <a class="localLink" href="https://schema.org/MediaObject">MediaObject</a> alongside particular <a class="localLink" href="https://schema.org/encodingFormat">encodingFormat</a> information.<br/><br/>
     * 
     * Unregistered or niche encoding and file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia/Wikidata entry.
     *
     *
     * @var string
     */
    protected $encodingFormat;

    /**
     * A review of the item.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Review
     */
    protected $review;

    /**
     * A license document that applies to this content, typically indicated by URL.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $license;

    /**
     * Identifies input methods that are sufficient to fully control the described resource (<a href="http://www.w3.org/wiki/WebSchemas/Accessibility">WebSchemas wiki lists possible values</a>).
     *
     *
     * @var string
     */
    protected $accessibilityControl;

    /**
     * Headline of the article.
     *
     *
     * @var string
     */
    protected $headline;

    /**
     * A resource from which this work is derived or from which it is a modification or adaption.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork|\OpenActive\Models\SchemaOrg\Product
     */
    protected $isBasedOn;

    /**
     * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $creator;

    /**
     * The publishingPrinciples property indicates (typically via <a class="localLink" href="https://schema.org/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="https://schema.org/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="https://schema.org/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="https://schema.org/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a>.<br/><br/>
     * 
     * While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="https://schema.org/funder">funder</a>) can be expressed using schema.org terminology.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $publishingPrinciples;

    /**
     * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $producer;

    /**
     * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Thing
     */
    protected $mentions;

    /**
     * The date on which the CreativeWork was created or the item was added to a DataFeed.
     *
     *
     * @var null|DateTime|Date
     */
    protected $dateCreated;

    /**
     * Date of first broadcast/publication.
     *
     *
     * @var null|DateTime|Date
     */
    protected $datePublished;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     *
     * @var bool|null
     */
    protected $isAccessibleForFree;

    /**
     * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CreativeWork
     */
    protected $citation;

    /**
     * An abstract is a short description that summarizes a <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a>.
     *
     *
     * @var string
     */
    protected $abstract;

    /**
     * The status of a creative work in terms of its stage in a lifecycle. Example terms include Incomplete, Draft, Published, Obsolete. Some organizations define a set of terms for the stages of their publication lifecycle.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    protected $creativeWorkStatus;

    /**
     * A maintainer of a <a class="localLink" href="https://schema.org/Dataset">Dataset</a>, software package (<a class="localLink" href="https://schema.org/SoftwareApplication">SoftwareApplication</a>), or other <a class="localLink" href="https://schema.org/Project">Project</a>. A maintainer is a <a class="localLink" href="https://schema.org/Person">Person</a> or <a class="localLink" href="https://schema.org/Organization">Organization</a> that manages contributions to, and/or publication of, some (typically complex) artifact. It is common for distributions of software and data to be based on "upstream" sources. When <a class="localLink" href="https://schema.org/maintainer">maintainer</a> is applied to a specific version of something e.g. a particular version or packaging of a <a class="localLink" href="https://schema.org/Dataset">Dataset</a>, it is always  possible that the upstream source has a different maintainer. The <a class="localLink" href="https://schema.org/isBasedOn">isBasedOn</a> property can be used to indicate such relationships between datasets to make the different maintenance roles clear. Similarly in the case of software, a package may have dedicated maintainers working on integration into software distributions such as Ubuntu, as well as upstream maintainers of the underlying work.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    protected $maintainer;

    /**
     * The specific time described by a creative work, for works (e.g. articles, video objects etc.) that emphasise a particular moment within an Event.
     *
     *
     * @var null|DateTime
     */
    protected $contentReferenceTime;

    /**
     * A license document that applies to this structured data, typically indicated by URL.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    protected $sdLicense;

    /**
     * Indicates a correction to a <a class="localLink" href="https://schema.org/CreativeWork">CreativeWork</a>, either via a <a class="localLink" href="https://schema.org/CorrectionComment">CorrectionComment</a>, textually or in another document.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\CorrectionComment
     */
    protected $correction;

    /**
     * The quantity of the materials being described or an expression of the physical space they occupy.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\QuantitativeValue
     */
    protected $materialExtent;

    /**
     * Indicates the date on which the current structured data was generated / published. Typically used alongside <a class="localLink" href="https://schema.org/sdPublisher">sdPublisher</a>
     *
     *
     * @var null|Date
     */
    protected $sdDatePublished;

    /**
     * Conditions that affect the availability of, or method(s) of access to, an item. Typically used for real world items such as an <a class="localLink" href="https://schema.org/ArchiveComponent">ArchiveComponent</a> held by an <a class="localLink" href="https://schema.org/ArchiveOrganization">ArchiveOrganization</a>. This property is not suitable for use as a general Web access control mechanism. It is expressed only in natural language.<br/><br/>
     * 
     * For example "Available by appointment from the Reading Room" or "Accessible only from logged-in accounts ".
     *
     *
     * @var string
     */
    protected $conditionsOfAccess;

    /**
     * Indicates the party responsible for generating and publishing the current structured data markup, typically in cases where the structured data is derived automatically from existing published content but published on a different site. For example, student projects and open data initiatives often re-publish existing content with more explicitly structured metadata. The
     * <a class="localLink" href="https://schema.org/sdPublisher">sdPublisher</a> property helps make such practices more explicit.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    protected $sdPublisher;

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $about = self::checkTypes($about, $types);

        $this->about = $about;
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
        $types = array(
            "string",
        );

        $accessibilitySummary = self::checkTypes($accessibilitySummary, $types);

        $this->accessibilitySummary = $accessibilitySummary;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\AlignmentObject",
        );

        $educationalAlignment = self::checkTypes($educationalAlignment, $types);

        $this->educationalAlignment = $educationalAlignment;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $associatedMedia = self::checkTypes($associatedMedia, $types);

        $this->associatedMedia = $associatedMedia;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $funder = self::checkTypes($funder, $types);

        $this->funder = $funder;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $sponsor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSponsor($sponsor)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $sponsor = self::checkTypes($sponsor, $types);

        $this->sponsor = $sponsor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Clip|\OpenActive\Models\SchemaOrg\AudioObject|\OpenActive\Models\SchemaOrg\MusicRecording
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Clip|\OpenActive\Models\SchemaOrg\AudioObject|\OpenActive\Models\SchemaOrg\MusicRecording $audio
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAudio($audio)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Clip",
            "\OpenActive\Models\SchemaOrg\AudioObject",
            "\OpenActive\Models\SchemaOrg\MusicRecording",
        );

        $audio = self::checkTypes($audio, $types);

        $this->audio = $audio;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $workExample = self::checkTypes($workExample, $types);

        $this->workExample = $workExample;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $provider
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProvider($provider)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $provider = self::checkTypes($provider, $types);

        $this->provider = $provider;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $encoding = self::checkTypes($encoding, $types);

        $this->encoding = $encoding;
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
        $types = array(
            "string",
        );

        $interactivityType = self::checkTypes($interactivityType, $types);

        $this->interactivityType = $interactivityType;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $character = self::checkTypes($character, $types);

        $this->character = $character;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Audience",
        );

        $audience = self::checkTypes($audience, $types);

        $this->audience = $audience;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $sourceOrganization = self::checkTypes($sourceOrganization, $types);

        $this->sourceOrganization = $sourceOrganization;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $isPartOf = self::checkTypes($isPartOf, $types);

        $this->isPartOf = $isPartOf;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Clip|\OpenActive\Models\SchemaOrg\VideoObject
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Clip|\OpenActive\Models\SchemaOrg\VideoObject $video
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVideo($video)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Clip",
            "\OpenActive\Models\SchemaOrg\VideoObject",
        );

        $video = self::checkTypes($video, $types);

        $this->video = $video;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\PublicationEvent",
        );

        $publication = self::checkTypes($publication, $types);

        $this->publication = $publication;
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
        $types = array(
            "string",
        );

        $text = self::checkTypes($text, $types);

        $this->text = $text;
    }

    /**
     * @return null|Date
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param null|Date $expires
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setExpires($expires)
    {
        $types = array(
            "null",
            "Date",
        );

        $expires = self::checkTypes($expires, $types);

        $this->expires = $expires;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $contributor = self::checkTypes($contributor, $types);

        $this->contributor = $contributor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $publisher
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublisher($publisher)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $publisher = self::checkTypes($publisher, $types);

        $this->publisher = $publisher;
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
        $types = array(
            "string",
        );

        $typicalAgeRange = self::checkTypes($typicalAgeRange, $types);

        $this->typicalAgeRange = $typicalAgeRange;
    }

    /**
     * @return null|int|string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param null|int|string $position
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPosition($position)
    {
        $types = array(
            "null",
            "int",
            "string",
        );

        $position = self::checkTypes($position, $types);

        $this->position = $position;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\PublicationEvent",
        );

        $releasedEvent = self::checkTypes($releasedEvent, $types);

        $this->releasedEvent = $releasedEvent;
    }

    /**
     * @return string
     */
    public function getEducationalUse()
    {
        return $this->educationalUse;
    }

    /**
     * @param string $educationalUse
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEducationalUse($educationalUse)
    {
        $types = array(
            "string",
        );

        $educationalUse = self::checkTypes($educationalUse, $types);

        $this->educationalUse = $educationalUse;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $contentLocation = self::checkTypes($contentLocation, $types);

        $this->contentLocation = $contentLocation;
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
        $types = array(
            "string",
        );

        $schemaVersion = self::checkTypes($schemaVersion, $types);

        $this->schemaVersion = $schemaVersion;
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
        $types = array(
            "string",
        );

        $accessibilityFeature = self::checkTypes($accessibilityFeature, $types);

        $this->accessibilityFeature = $accessibilityFeature;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\AggregateRating",
        );

        $aggregateRating = self::checkTypes($aggregateRating, $types);

        $this->aggregateRating = $aggregateRating;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $locationCreated = self::checkTypes($locationCreated, $types);

        $this->locationCreated = $locationCreated;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\ItemList",
        );

        $accessModeSufficient = self::checkTypes($accessModeSufficient, $types);

        $this->accessModeSufficient = $accessModeSufficient;
    }

    /**
     * @return null|string|DateTime
     */
    public function getTemporalCoverage()
    {
        return $this->temporalCoverage;
    }

    /**
     * @param null|string|DateTime $temporalCoverage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTemporalCoverage($temporalCoverage)
    {
        $types = array(
            "null",
            "string",
            "DateTime",
        );

        $temporalCoverage = self::checkTypes($temporalCoverage, $types);

        $this->temporalCoverage = $temporalCoverage;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $accountablePerson = self::checkTypes($accountablePerson, $types);

        $this->accountablePerson = $accountablePerson;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $spatialCoverage = self::checkTypes($spatialCoverage, $types);

        $this->spatialCoverage = $spatialCoverage;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Review",
        );

        $reviews = self::checkTypes($reviews, $types);

        $this->reviews = $reviews;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Demand",
            "\OpenActive\Models\SchemaOrg\Offer",
        );

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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $editor = self::checkTypes($editor, $types);

        $this->editor = $editor;
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
        $types = array(
            "string",
        );

        $discussionUrl = self::checkTypes($discussionUrl, $types);

        $this->discussionUrl = $discussionUrl;
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
        $types = array(
            "string",
        );

        $award = self::checkTypes($award, $types);

        $this->award = $award;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getCopyrightHolder()
    {
        return $this->copyrightHolder;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $copyrightHolder
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCopyrightHolder($copyrightHolder)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $copyrightHolder = self::checkTypes($copyrightHolder, $types);

        $this->copyrightHolder = $copyrightHolder;
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
        $types = array(
            "string",
        );

        $accessibilityHazard = self::checkTypes($accessibilityHazard, $types);

        $this->accessibilityHazard = $accessibilityHazard;
    }

    /**
     * @return null|float
     */
    public function getCopyrightYear()
    {
        return $this->copyrightYear;
    }

    /**
     * @param null|float $copyrightYear
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCopyrightYear($copyrightYear)
    {
        $types = array(
            "null",
            "float",
        );

        $copyrightYear = self::checkTypes($copyrightYear, $types);

        $this->copyrightYear = $copyrightYear;
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
        $types = array(
            "string",
        );

        $awards = self::checkTypes($awards, $types);

        $this->awards = $awards;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Event",
        );

        $recordedAt = self::checkTypes($recordedAt, $types);

        $this->recordedAt = $recordedAt;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $spatial = self::checkTypes($spatial, $types);

        $this->spatial = $spatial;
    }

    /**
     * @return null|int
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * @param null|int $commentCount
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCommentCount($commentCount)
    {
        $types = array(
            "null",
            "int",
        );

        $commentCount = self::checkTypes($commentCount, $types);

        $this->commentCount = $commentCount;
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
        $types = array(
            "string",
        );

        $fileFormat = self::checkTypes($fileFormat, $types);

        $this->fileFormat = $fileFormat;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Language
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Language $inLanguage
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setInLanguage($inLanguage)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Language",
        );

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return null|string|DateTime
     */
    public function getTemporal()
    {
        return $this->temporal;
    }

    /**
     * @param null|string|DateTime $temporal
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTemporal($temporal)
    {
        $types = array(
            "null",
            "string",
            "DateTime",
        );

        $temporal = self::checkTypes($temporal, $types);

        $this->temporal = $temporal;
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
        $types = array(
            "string",
        );

        $accessibilityAPI = self::checkTypes($accessibilityAPI, $types);

        $this->accessibilityAPI = $accessibilityAPI;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\InteractionCounter",
        );

        $interactionStatistic = self::checkTypes($interactionStatistic, $types);

        $this->interactionStatistic = $interactionStatistic;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\Rating
     */
    public function getContentRating()
    {
        return $this->contentRating;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\Rating $contentRating
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentRating($contentRating)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Rating",
        );

        $contentRating = self::checkTypes($contentRating, $types);

        $this->contentRating = $contentRating;
    }

    /**
     * @return string
     */
    public function getLearningResourceType()
    {
        return $this->learningResourceType;
    }

    /**
     * @param string $learningResourceType
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLearningResourceType($learningResourceType)
    {
        $types = array(
            "string",
        );

        $learningResourceType = self::checkTypes($learningResourceType, $types);

        $this->learningResourceType = $learningResourceType;
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
        $types = array(
            "string",
        );

        $accessMode = self::checkTypes($accessMode, $types);

        $this->accessMode = $accessMode;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $material = self::checkTypes($material, $types);

        $this->material = $material;
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
        $types = array(
            "bool",
            "null",
        );

        $isFamilyFriendly = self::checkTypes($isFamilyFriendly, $types);

        $this->isFamilyFriendly = $isFamilyFriendly;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $exampleOfWork = self::checkTypes($exampleOfWork, $types);

        $this->exampleOfWork = $exampleOfWork;
    }

    /**
     * @return null|float|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param null|float|string $version
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setVersion($version)
    {
        $types = array(
            "null",
            "float",
            "string",
        );

        $version = self::checkTypes($version, $types);

        $this->version = $version;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param null|DateTime|Date $dateModified
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateModified($dateModified)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $dateModified = self::checkTypes($dateModified, $types);

        $this->dateModified = $dateModified;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $mainEntity = self::checkTypes($mainEntity, $types);

        $this->mainEntity = $mainEntity;
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
        $types = array(
            "string",
        );

        $genre = self::checkTypes($genre, $types);

        $this->genre = $genre;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setKeywords($keywords)
    {
        $types = array(
            "string",
        );

        $keywords = self::checkTypes($keywords, $types);

        $this->keywords = $keywords;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $author = self::checkTypes($author, $types);

        $this->author = $author;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $encodings = self::checkTypes($encodings, $types);

        $this->encodings = $encodings;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Product",
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $isBasedOnUrl = self::checkTypes($isBasedOnUrl, $types);

        $this->isBasedOnUrl = $isBasedOnUrl;
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
        $types = array(
            "string",
        );

        $alternativeHeadline = self::checkTypes($alternativeHeadline, $types);

        $this->alternativeHeadline = $alternativeHeadline;
    }

    /**
     * @return null|DateInterval
     */
    public function getTimeRequired()
    {
        return $this->timeRequired;
    }

    /**
     * @param null|DateInterval $timeRequired
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTimeRequired($timeRequired)
    {
        $types = array(
            "null",
            "DateInterval",
        );

        $timeRequired = self::checkTypes($timeRequired, $types);

        $this->timeRequired = $timeRequired;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\Person $translator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTranslator($translator)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $translator = self::checkTypes($translator, $types);

        $this->translator = $translator;
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
        $types = array(
            "string",
        );

        $thumbnailUrl = self::checkTypes($thumbnailUrl, $types);

        $this->thumbnailUrl = $thumbnailUrl;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $hasPart = self::checkTypes($hasPart, $types);

        $this->hasPart = $hasPart;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Comment",
        );

        $comment = self::checkTypes($comment, $types);

        $this->comment = $comment;
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
        $types = array(
            "string",
        );

        $encodingFormat = self::checkTypes($encodingFormat, $types);

        $this->encodingFormat = $encodingFormat;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Review",
        );

        $review = self::checkTypes($review, $types);

        $this->review = $review;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $license
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setLicense($license)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        );

        $license = self::checkTypes($license, $types);

        $this->license = $license;
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
        $types = array(
            "string",
        );

        $accessibilityControl = self::checkTypes($accessibilityControl, $types);

        $this->accessibilityControl = $accessibilityControl;
    }

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
        $types = array(
            "string",
        );

        $headline = self::checkTypes($headline, $types);

        $this->headline = $headline;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "\OpenActive\Models\SchemaOrg\Product",
        );

        $isBasedOn = self::checkTypes($isBasedOn, $types);

        $this->isBasedOn = $isBasedOn;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\Organization $creator
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreator($creator)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $creator = self::checkTypes($creator, $types);

        $this->creator = $creator;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getPublishingPrinciples()
    {
        return $this->publishingPrinciples;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $publishingPrinciples
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPublishingPrinciples($publishingPrinciples)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        );

        $publishingPrinciples = self::checkTypes($publishingPrinciples, $types);

        $this->publishingPrinciples = $publishingPrinciples;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $producer = self::checkTypes($producer, $types);

        $this->producer = $producer;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Thing",
        );

        $mentions = self::checkTypes($mentions, $types);

        $this->mentions = $mentions;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param null|DateTime|Date $dateCreated
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDateCreated($dateCreated)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $dateCreated = self::checkTypes($dateCreated, $types);

        $this->dateCreated = $dateCreated;
    }

    /**
     * @return null|DateTime|Date
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param null|DateTime|Date $datePublished
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDatePublished($datePublished)
    {
        $types = array(
            "null",
            "DateTime",
            "Date",
        );

        $datePublished = self::checkTypes($datePublished, $types);

        $this->datePublished = $datePublished;
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
        $types = array(
            "bool",
            "null",
        );

        $isAccessibleForFree = self::checkTypes($isAccessibleForFree, $types);

        $this->isAccessibleForFree = $isAccessibleForFree;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CreativeWork",
        );

        $citation = self::checkTypes($citation, $types);

        $this->citation = $citation;
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
        $types = array(
            "string",
        );

        $abstract = self::checkTypes($abstract, $types);

        $this->abstract = $abstract;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DefinedTerm|string
     */
    public function getCreativeWorkStatus()
    {
        return $this->creativeWorkStatus;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DefinedTerm|string $creativeWorkStatus
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCreativeWorkStatus($creativeWorkStatus)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "string",
        );

        $creativeWorkStatus = self::checkTypes($creativeWorkStatus, $types);

        $this->creativeWorkStatus = $creativeWorkStatus;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\Organization",
        );

        $maintainer = self::checkTypes($maintainer, $types);

        $this->maintainer = $maintainer;
    }

    /**
     * @return null|DateTime
     */
    public function getContentReferenceTime()
    {
        return $this->contentReferenceTime;
    }

    /**
     * @param null|DateTime $contentReferenceTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContentReferenceTime($contentReferenceTime)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $contentReferenceTime = self::checkTypes($contentReferenceTime, $types);

        $this->contentReferenceTime = $contentReferenceTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWork|string
     */
    public function getSdLicense()
    {
        return $this->sdLicense;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWork|string $sdLicense
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSdLicense($sdLicense)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\CreativeWork",
            "string",
        );

        $sdLicense = self::checkTypes($sdLicense, $types);

        $this->sdLicense = $sdLicense;
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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\CorrectionComment",
        );

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
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
        );

        $materialExtent = self::checkTypes($materialExtent, $types);

        $this->materialExtent = $materialExtent;
    }

    /**
     * @return null|Date
     */
    public function getSdDatePublished()
    {
        return $this->sdDatePublished;
    }

    /**
     * @param null|Date $sdDatePublished
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSdDatePublished($sdDatePublished)
    {
        $types = array(
            "null",
            "Date",
        );

        $sdDatePublished = self::checkTypes($sdDatePublished, $types);

        $this->sdDatePublished = $sdDatePublished;
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
        $types = array(
            "string",
        );

        $conditionsOfAccess = self::checkTypes($conditionsOfAccess, $types);

        $this->conditionsOfAccess = $conditionsOfAccess;
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
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $sdPublisher = self::checkTypes($sdPublisher, $types);

        $this->sdPublisher = $sdPublisher;
    }

}
