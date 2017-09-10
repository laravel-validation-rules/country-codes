# Country Codes

Validates 2 & 3 character country codes.

<p align="center">
  <a href="https://travis-ci.org/laravel-validation-rules/country-codes">
    <img src="https://img.shields.io/travis/laravel-validation-rules/country-codes.svg?style=flat-square">
  </a>
  <a href="https://scrutinizer-ci.com/g/laravel-validation-rules/country-codes/code-structure/master/code-coverage">
    <img src="https://img.shields.io/scrutinizer/coverage/g/laravel-validation-rules/country-codes.svg?style=flat-square">
  </a>
  <a href="https://scrutinizer-ci.com/g/laravel-validation-rules/country-codes">
    <img src="https://img.shields.io/scrutinizer/g/laravel-validation-rules/country-codes.svg?style=flat-square">
  </a>
  <a href="https://github.com/laravel-validation-rules/country-codes/blob/master/LICENSE">
    <img src="https://img.shields.io/github/license/laravel-validation-rules/country-codes.svg?style=flat-square">
  </a>
  <a href="https://twitter.com/clarkeash">
    <img src="http://img.shields.io/badge/author-@clarkeash-blue.svg?style=flat-square">
  </a>
</p>

## Installation

```bash
composer require laravel-validation-rules/country-codes
```

## Usage

Validate a 2 character country code.

```php
use LVR\CountryCode\Two;

$request->validate([
    'country' => ['required', new Two],
]);
```

Validate a 3 character country code.

```php
use LVR\CountryCode\Three;

$request->validate([
    'country' => ['required', new Three],
]);
```
