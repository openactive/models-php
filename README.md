# models-php [![Latest Stable Version](https://poser.pugx.org/openactive/models/v/stable)](https://packagist.org/packages/openactive/models) [![Total Downloads](https://poser.pugx.org/openactive/models/downloads)](https://packagist.org/packages/openactive/models) [![Tests](https://github.com/openactive/models-php/actions/workflows/tests.yaml/badge.svg?branch=master)](https://github.com/openactive/models-php/actions/workflows/tests.yaml)
PHP Models for the OpenActive Opportunity and Booking Specifications

OpenActive aims to provide model files for all classes defined in its Opportunity and Booking specifications across the PHP, Ruby, and .NET languages. This repository is intended for the PHP files; see also the [Ruby](https://github.com/openactive/models-ruby/) and [.NET](https://github.com/openactive/OpenActive.NET) implementations.

## Table of Contents
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
    - [Models](#models)
        - [OpenActive](#openactive)
        - [Schema.org](#schemaorg)
        
    - [RPDE](#rpde)
    - [Enums](#enums)
    - [Serialization](#serialization)
        - [`serialize($obj, $prettyPrint = false)`](#serializeobj-prettyprint--false)
        - [`deserialize($data)`](#deserializedata)
        - [Modifiers](#modifiers)
- [Contributing](#contributing)

## Requirements
This project requires PHP >=5.6.

## Installation
To install via Composer, from terminal, run:
```bash
composer require openactive/models
```

## Usage

This package provides PHP models for the OpenActive specifications.

It also provide a set of models for the [schema.org](https://schema.org) specifications.

Finally it provides a set of classes to handle OpenActive's [RPDE](https://developer.openactive.io/publishing-data/data-feeds/how-a-data-feed-works) data feeds.

### Models

The models are included under the `\OpenActive\Models` namespace.

You can instantiate a new model, passing an associative array, where the key is the attribute name, and the value is the attribute value.

For example, from your PHP application, run:

```php
// Make sure you use the right namespace for your models
use OpenActive\Models\OA\SessionSeries;
use OpenActive\Models\OA\Place;
use OpenActive\Models\OA\GeoCoordinates;
use OpenActive\Models\OA\Concept;
use OpenActive\Models\OA\Organization;
use OpenActive\Models\OA\Offer;

$sessionSeries = new SessionSeries([
    "name" => "Virtual BODYPUMP",
    "description" => "This is the virtual version of the original barbell class, which will help you get lean, toned and fit - fast",
    "startDate" => "2017-04-24T19:30:00-08:00",
    "endDate" => "2017-04-24T23:00:00-08:00",
    "location" => new Place([
        "name" => "Raynes Park High School, 46A West Barnes Lane",
        "geo" => new GeoCoordinates([
            "latitude" => 51.4034423828125,
            "longitude" => -0.2369088977575302,
        ])
    ]),
    "activity" => [new Concept([
        "id" => "https://openactive.io/activity-list#5e78bcbe-36db-425a-9064-bf96d09cc351",
        "prefLabel" => "Bodypump™",
        "inScheme" => "https://openactive.io/activity-list"
    ])],
    "organizer" => new Organization([
        "name" => "Central Speedball Association",
        "url" => "http://www.speedball-world.com"
    ]),
    "offers" => [new Offer([
        "identifier" => "OX-AD",
        "name" => "Adult",
        "price" => 3.3,
        "priceCurrency" => "GBP",
        "url" => "https://profile.everyoneactive.com/booking?Site=0140&Activities=1402CBP20150217&Culture=en-GB"
    ])],
]);
```

Please note that type enforcement is in place whenever creating a new model.

For example, providing a `string` to the `target` attribute in the example above will result in an `\OpenActive\Exception\InvalidArgumentException` being thrown.

A set of getters and setters for all the attributes is provided. Type enforcement is in place for setters too.

#### OpenActive

The OpenActive models are included under the `\OpenActive\Models\OA` namespace.

To instantiate a new one, see the [models](#models) section, making sure you are using the right namespace from your model.

#### Schema.org

The Schema.org models are included under the `\OpenActive\Models\SchemaOrg` namespace.

To instantiate a new one, see the [models](#models) section, making sure you are using the right namespace from your model.

### RPDE

RpdeItem & RpdeBody are the main classes to use when generating a page for an RPDE feed.

#### Feed items

RpdeItem is used to create each individual item for a page. It includes a data attribute to which should be an instance of an OA Model along with metadata (id, modified, state and kind). It is left to each application developer to generate these models and metadata.

e.g. a session series collection
```php

use OpenActive\Rpde\RpdeItem;

$feedItems = [
    new RpdeItem([
        "id" => "2",
        "modified" => 4,
        "state" => RpdeState::UPDATED,
        "kind" => RpdeKind::SESSION_SERIES,
        "data" => $sessionSeries2,
    ]),
    new RpdeItem([
        "id" => "1",
        "modified" => 5,
        "state" => RpdeState::DELETED,
        "kind" => RpdeKind::SESSION_SERIES,
    ]),
];
```

#### Feed page

RpdeBody is then used to wrap a collection of items and provide the licence and next entries expected from an RPDE page. To help keep pages valid and create an correct next link, use `RpdeBody::createFromNextChangeNumber` or `RpdeBody::createFromModifiedId` to create an RPDE page feed out of an array of `RpdeItem`s (the constructor has been made private).

`RpdeBody::createFromNextChangeNumber` will check that all feed items do indeed come after the `$changeNumber` argument provided. It will contruct the next link based on the modified value of the newest feed item and the provided `$feedBaseUrl` argument.

e.g.
```php
use OpenActive\Rpde\RpdeBody;

$feedPage = RpdeBody::createFromNextChangeNumber(
    'https://www.example.com/rpde-feeds/session-series', # $feedBaseUrl
    0, # $changeNumber,
    $feedItems
);

$feedPage->getNext(); # 'https://www.example.com/rpde-feeds/session-series?afterTimestamp=5&afterId=2'
```

`RpdeBody::createFromModifiedId` will check that all feed items do indeed come after the `$id` and `$modified` arguments provided. It will contruct the next link based on the id and modified value of the newest feed item and the provided `$feedBaseUrl` argument.

e.g.
```php
use OpenActive\Rpde\RpdeBody;

$feedPage = RpdeBody::createFromModifiedId(
    'https://www.example.com/rpde-feeds/session-series', # $feedBaseUrl
    0, # $modified,
    0, # $id
    $feedItems
);

$feedPage->getNext(); # 'https://www.example.com/rpde-feeds/session-series?afterChangeNumber=5'
```

To override the default licence:
```php
$feedPage->setLicense('https://www.example.com/my-licence/v2.0');
```

#### Serializing the feed page

Finally the feed page can then be serialized with `Serialize RpdeBody::serialize($feedPage)` which will also take care of serializing the each feed item's data attribute as JSON-LD.

```php
$jsonFeedPage = RpdeBody::serialize($feedPage);
```

See the [OpenActive's guide to publishing data](https://developer.openactive.io/publishing-data/data-feeds) and [the RPDE specification](https://www.openactive.io/realtime-paged-data-exchange/) for more details about RPDE feeds.

### Enums

Each enum is represented by a class which contains a constant for each available value.

e.g. Adding days of the week to a Schedule:

```php
use OpenActive\Models\OA\Schedule;
use OpenActive\Enums\SchemaOrg\DayOfWeek;

new Schedule([
    "scheduledEventType" => "Event",
    "startTime" => "12:00:00",
    "endTime" => "14:00:00",
    "byDay" => [
        new DayOfWeek\Monday,
        new DayOfWeek\Wednesday,
        new DayOfWeek\Friday
    ],
    ...
]);
```

### Serialization

This package provides support for JSON-LD serialization/deserialization of [models](#models) and and for the `\OpenActive\Rpde\RpdeBody` object.

#### `serialize($obj, $prettyPrint = false, $schema = false, $modifiers = [])`

Returns the JSON-LD string representation of the given object `$obj`.

An additional parameter `$prettyPrint` is available to return a JSON-LD string in a human-readable format.

An example, using the `\OpenActive\Models\OA\SessionSeries` defined above:
```php
use OpenActive\Models\OA\SessionSeries;

echo SessionSeries::serialize($sessionSeries, true);
```

Will output:
```json
{
    "@context": [
        "https:\/\/openactive.io\/",
        "https:\/\/openactive.io\/ns-beta"
    ],
    "type": "SessionSeries",
    "name": "Virtual BODYPUMP",
    "description": "This is the virtual version of the original barbell class, which will help you get lean, toned and fit - fast.",
    "startDate": "2017-04-24T19:30:00-08:00",
    "endDate": "2017-04-24T23:00:00-08:00",
    "location": {...},
    "activity": {...},
    "organizer": {...},
    "offers": [...]
}
```

**Please note:** at the moment by default, only the OpenActive `@context` is rendered in the serialization output. You may supply the `$schema` flag to add the Schema.org `@context`.

#### `deserialize($data)`

Returns an object from a given JSON-LD representation.

The `$data` argument can be a JSON-LD string, or an associative array, for example as a result of `json_encode($string, true)`.

For example:

```php
use OpenActive\Models\OA\Action;

$jsonLd = '{"@context": ["https:\/\/openactive.io\/","https:\/\/openactive.io\/ns-beta"],"type": "Action","name": "Book","target": {"type": "EntryPoint","encodingType": "application\/vnd.openactive.v1.0+json","httpMethod": "POST","type": "EntryPoint","url": "https:\/\/example.com\/orders"}}';

$action = Action::deserialize($jsonLd);

var_dump($action);
```

Will result in:
```
object(OpenActive\Models\OA\Action)#3 (24) {
  ["name":protected]=>
  string(4) "Book"
  ["target":protected]=>
  object(OpenActive\Models\OA\EntryPoint)#2 (20) {
    ["encodingType":protected]=>
    string(36) "application/vnd.openactive.v1.0+json"
    ["httpMethod":protected]=>
    string(4) "POST"
    ["urlTemplate":protected]=>
    NULL
    ["actionApplication":protected]=>
    NULL
    ["application":protected]=>
    NULL
    ["actionPlatform":protected]=>
    NULL
    ["contentType":protected]=>
    NULL
    ["identifier":protected]=>
    NULL
    ["name":protected]=>
    NULL
    ["description":protected]=>
    NULL
    ["sameAs":protected]=>
    NULL
    ["url":protected]=>
    string(26) "https://example.com/orders"
    ["image":protected]=>
    NULL
    ["additionalType":protected]=>
    NULL
    ["subjectOf":protected]=>
    NULL
    ["mainEntityOfPage":protected]=>
    NULL
    ["potentialAction":protected]=>
    NULL
    ["disambiguatingDescription":protected]=>
    NULL
    ["alternateName":protected]=>
    NULL
    ["id":protected]=>
    NULL
  }
  ["result":protected]=>
  NULL
  ["startTime":protected]=>
  NULL
  ["actionStatus":protected]=>
  NULL
  ["agent":protected]=>
  NULL
  ["endTime":protected]=>
  NULL
  ["instrument":protected]=>
  NULL
  ["participant":protected]=>
  NULL
  ["object":protected]=>
  NULL
  ["error":protected]=>
  NULL
  ["location":protected]=>
  NULL
  ["identifier":protected]=>
  NULL
  ["description":protected]=>
  NULL
  ["sameAs":protected]=>
  NULL
  ["url":protected]=>
  NULL
  ["image":protected]=>
  NULL
  ["additionalType":protected]=>
  NULL
  ["subjectOf":protected]=>
  NULL
  ["mainEntityOfPage":protected]=>
  NULL
  ["potentialAction":protected]=>
  NULL
  ["disambiguatingDescription":protected]=>
  NULL
  ["alternateName":protected]=>
  NULL
  ["id":protected]=>
  NULL
}
```

#### Modifiers

Modifiers allow you to change the serialized context *after* it has been normalized by the library. An example use-case
for this is if you are working with a third party who does not completely adhere to the specification, or has other
implementation details which require non-standard serialization. For example, if the third party requires a different
date format you could do this:

```
use OpenActive\Models\OA\SessionSeries;

echo SessionSeries::serialize($sessionSeries, true, false, [
    function ($class, $key, $value, $object) {
      if (!in_array($key, ['startDate', 'endDate'])) {
        return $value;
      }
      return (new \DateTime($value))->format('Y.m.d.H:i:s');
    }
]);
```

The given modifiers **MUST** adhere to this method signature:

```
function (string $class, string $key, mixed $value, mixed $object): mixed
```

Each modifier **MUST** always respond with a value, as the modifiers are always applied. If it does not return a value
all the data in your object will be wiped during serialization. You **SHOULD** use the `$class` and `$key` parameters to
determine if the modifier should run for the parameter, and simply return the `$value` if it is not necessary. The
`$object` parameter is also available for modifiers which require further information from the 
parent object.

Modifiers can also be added to the Deserialization process, and are applied *before* the property is set. This can be
useful when having to handle migration paths as changes happen in the library, or to fix data coming from an
incompatible seller. Building on the previous example, if the third party in this case is sending dates in an odd format
you could do this:

```
use OpenActive\Models\OA\SessionSeries;

$session = SessionSeries::deserialize('{...}', [
    function ($class, $key, $value, $object) {
      if (!in_array($key, ['startDate', 'endDate'])) {
        return $value;
      }
      return \DateTime::createFromFormat('Y.m.d.H:i:s', $value, new \DateTimeZone('Europe/London'));
    }
]);
```

Example & helper modifiers can be found in the `src/Modifiers` directory.

## Contributing

### Installation
**Please note:** [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) is required for dependency management.

```bash
git clone git@github.com:openactive/models-php.git
cd models-php
composer install
```

### Running Tests
PHPUnit is used to run tests.

To run the whole suite:
```bash
./vendor/bin/phpunit
```

If you want to run the whole suite in verbose mode:
```bash
./vendor/bin/phpunit --verbose
```

You can also run a section of the suite by specifying the class's relative path on which you want to perform tests:
```bash
./vendor/bin/phpunit --verbose tests/Unit/RpdeTest.php
```

For additional information on the commands available for PHPUnit,
consult [their documentation](https://phpunit.readthedocs.io/en/8.5/textui.html#command-line-options)


### Updating models
A guide is provided in [UPDATING.md](UPDATING.md)

### Implementing APIs
These models can be used in the context of implementing an data API. A guide is provided in [IMPLEMENTING_APIS.md](IMPLEMENTING_APIS.md)
