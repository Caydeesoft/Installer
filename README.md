# caydeesoft/installer

A WordPress-style installer and plugin installer feature pack for Laravel.

## Description

This package provides a robust, WordPress-style installer and plugin installer feature pack specifically designed for Laravel applications. It aims to simplify the initial setup and ongoing management of plugins within your Laravel project, offering a familiar experience for developers accustomed to WordPress's extensibility.

## Installation

You can install the package via Composer:

```bash
composer require caydeesoft/installer
```

### Laravel Integration

For Laravel applications, the package will automatically discover its service provider. If you need to manually register it, add the following to your `config/app.php` file within the `providers` array:

```php
'providers' => [
    // ...
    Caydeesoft\Installer\InstallerServiceProvider::class,
    // ...
],
```

## Requirements

*   PHP ^8.2
*   illuminate/support ^12.0
*   illuminate/filesystem ^12.0

## Usage

[// TODO: Add detailed usage instructions here, including how to configure and use the installer and plugin features.]

## Contributing

[// TODO: Add contribution guidelines if this project is open to contributions.]

## License

This project is proprietary.
