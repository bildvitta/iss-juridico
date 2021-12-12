# This is my package iss-juridico

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bildvitta/iss-juridico.svg?style=flat-square)](https://packagist.org/packages/bildvitta/iss-juridico)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bildvitta/iss-juridico/run-tests?label=tests)](https://github.com/bildvitta/iss-juridico/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bildvitta/iss-juridico/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bildvitta/iss-juridico/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bildvitta/iss-juridico.svg?style=flat-square)](https://packagist.org/packages/bildvitta/iss-juridico)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

- Coming soon

## Installation

You can install the package via composer:

```bash
composer require bildvitta/iss-juridico
```



You can publish the config file with:
```bash
php artisan vendor:publish --provider="Bildvitta\IssCrm\IssJuridicoServiceProvider" --tag="iss-juridico-config"```

This is the contents of the published config file:

```php
return [
  'base_uri' => env('MS_JURIDICO_BASE_URI', 'https://api-dev-juridico.nave.dev'),
  'prefix' => env('MS_JURIDICO_API_PREFIX', '/api')
];
```

## Usage

```php
$iss-juridico = new Bildvitta\IssJuridico();
echo $iss-juridico->echoPhrase('Hello, Bildvitta!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Michael](https://github.com/bildvitta)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
