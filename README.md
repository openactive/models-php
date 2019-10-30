# models-php
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

## Requirements
This project requires PHP >=5.6.
While most of the functionality should work down to PHP 5.4, some functionality (especially around parsing of offset for DateTimeZone) will not work with that version of PHP (see the [DateTimeZone PHP docs](https://www.php.net/manual/en/datetimezone.construct.php#refsect1-datetimezone.construct-changelog) for more info).

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
use OpenActive\Models\OA\Action;
use OpenActive\Models\OA\EntryPoint;

$action = new Action([
    "name" => "Book",
    "target" => new EntryPoint([
        "encodingType" => "application/vnd.openactive.v1.0+json",
        "httpMethod" => "POST",
        "type" => "EntryPoint",
        "url" => "https://example.com/orders"
    ])
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

**Coming soon**

### Enums

**Coming soon**

### Serialization

This package provides support for JSON-LD serialization/deserialization of [models](#models) and and for the `\OpenActive\Rpde\RpdeBody` object.

#### `serialize($obj, $prettyPrint = false)`

Returns the JSON-LD string representation of the given object `$obj`.

An additional parameter `$prettyPrint` is available to return a JSON-LD string in a human-readable format.

An example, using the `\OpenActive\Models\OA\Action` defined above:
```php
use OpenActive\Models\OA\Action;

echo Action::serialize($action, true);
```

Will output:
```json
{
    "@context": [
        "https:\/\/openactive.io\/",
        "https:\/\/openactive.io\/ns-beta"
    ],
    "type": "Action",
    "name": "Book",
    "target": {
        "type": "EntryPoint",
        "encodingType": "application\/vnd.openactive.v1.0+json",
        "httpMethod": "POST",
        "type": "EntryPoint",
        "url": "https:\/\/example.com\/orders"
    }
}
```

**Please note:** at the moment, only the OpenActive `@context` is rendered in the serialization output. Future versions of this package may allow to include more and/or different `@context`.

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

## Contribution

### Installation
**Please note:** [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) is required for dependency management.

```bash
git clone https://github.com/openactive/models-php.git
cd models-php
composer install
```

### Running Tests
PHPUnit 5.7 is used to run tests.

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
consult [their documentation](https://phpunit.de/manual/5.7/en/installation.html)
