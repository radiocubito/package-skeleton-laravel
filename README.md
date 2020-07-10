# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/radiocubito/:package_name.svg?style=flat-square)](https://packagist.org/packages/radiocubito/:package_name)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/radiocubito/:package_name/run-tests?label=tests)](https://github.com/radiocubito/:package_name/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/radiocubito/:package_name.svg?style=flat-square)](https://packagist.org/packages/radiocubito/:package_name)

**Note:** Replace ```:author_name``` ```:author_username``` ```:author_email``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can also run `configure-skeleton.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require radiocubito/package-skeleton-laravel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Radiocubito\Skeleton\SkeletonServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Radiocubito\Skeleton\SkeletonServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$skeleton = new Radiocubito\Skeleton();
echo $skeleton->echoPhrase('Hello, Radiocubito!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email oliver@radiocubito.com instead of using the issue tracker.

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
