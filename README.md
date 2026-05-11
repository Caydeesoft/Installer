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

### Installing Features

This package provides an Artisan command to install the necessary files and configurations into your Laravel application.

To install the features, run the following command:

```bash
php artisan installer-features:install
```

If you need to overwrite existing files, you can use the `--force` option:

```bash
php artisan installer-features:install --force
```

After running the install command, you should perform the following steps:

1.  **Dump Autoload:**
    ```bash
    composer dump-autoload
    ```
2.  **Run Migrations:**
    ```bash
    php artisan migrate
    ```
3.  **Clear Optimization Cache:**
    ```bash
    php artisan optimize:clear
    ```

[// TODO: Add more detailed usage instructions for the installed features, such as how to create and manage plugins, once the stubs are clearer.]

## Contributing

[// TODO: Add contribution guidelines if this project is open to contributions.]

## License

This project is proprietary.
