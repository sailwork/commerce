# Sailwork Commerce Package for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sailwork/commerce.svg?style=flat-square)](https://packagist.org/packages/sailwork/commerce)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sailwork/commerce/run-tests?label=tests)](https://github.com/sailwork/commerce/actions?query=workflow%3Arun-tests+branch%3Adevelop)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sailwork/commerce/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sailwork/commerce/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Adevelop)
[![Total Downloads](https://img.shields.io/packagist/dt/sailwork/commerce.svg?style=flat-square)](https://packagist.org/packages/sailwork/commerce)

## Document
Please read document in here: [Document](DOCUMENT.MD)

## Installation

You can install the package via composer:

```bash
composer require sailwork/commerce
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Sailwork\Commerce\CommerceServiceProvider" --tag="commerce-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Sailwork\Commerce\CommerceServiceProvider" --tag="commerce-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$commerce = new Sailwork\Commerce();
echo $commerce->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
