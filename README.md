# models-php
PHP Models for the OpenActive Opportunity and Booking Specifications

OpenActive aims to provide model files for all classes defined in its Opportunity and Booking specifications across the PHP, Ruby, and .NET languages. This repository is intended for the PHP files; see also the [Ruby](https://github.com/openactive/models-ruby/) and [.NET](https://github.com/openactive/OpenActive.NET) implementations.

## Requirements
This project requires PHP >=5.6.
While most of the functionality should work down to PHP 5.4, some functionality (especially around parsing of offset for DateTimeZone) will not work with that version of PHP (see the [DateTimeZone PHP docs](https://www.php.net/manual/en/datetimezone.construct.php#refsect1-datetimezone.construct-changelog) for more info).

[Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) is also required for dependency management.

## Installation
```bash
git clone https://github.com/openactive/models-php.git
cd models-php
composer install
```

## Running Tests
PHPUnit 5.7 is used to run tests.

To run the whole suite:
```bash
./vendor/bin/phpunit
```

If you want to run the whole suite in verbose mode:
```bash
./vendor/bin/phpunit --verbose
```

For additional information on the commands available for PHPUnit,
consult [their documentation](https://phpunit.de/manual/5.7/en/installation.html)
