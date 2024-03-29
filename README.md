![Laravel Settings](https://banners.beyondco.de/Laravel%20Settings.png?theme=light&packageManager=composer+require&packageName=arafatkn%2Flaravel-settings&pattern=architect&style=style_1&description=A+laravel+package+for+managing+project+settings.&md=1&showWatermark=0&fontSize=100px&images=adjustments)

# Laravel Settings

[![Latest Stable Version](https://poser.pugx.org/arafatkn/laravel-settings/v)](//packagist.org/packages/arafatkn/laravel-settings)
[![License](https://poser.pugx.org/arafatkn/laravel-settings/license)](//packagist.org/packages/arafatkn/laravel-settings)
[![Total Downloads](https://poser.pugx.org/arafatkn/laravel-settings/downloads)](//packagist.org/packages/arafatkn/laravel-settings)

A laravel package for managing project settings.

---
We always need to use a settings system in our application. This package will help you to create the system easily.
The package will create a table in database named `settings` with key, value and autoload column. You can specify which column should be loaded in boot time by setting `autoload` column to true.

## Installation

You can install the package via composer:

```bash
composer require arafatkn/laravel-settings
```

If you are using Laravel Package Auto-Discovery, you don't need you to manually add the ServiceProvider.

#### Without auto-discovery:

If you don't use auto-discovery, add the below ServiceProvider to the `$providers` array in `config/app.php` file.

```php
Arafatkn\LaravelSettings\SettingServiceProvider::class,
```

Then add the `Setting` facade in `$aliases` array in `config/app.php` file.

```php
'Setting' => \Arafatkn\LaravelSettings\Facades\Setting::class,
```

Then you can run migration command to create database table.

```bash
php artisan migrate
```

You can also publish the migration file and modify as you needs.

```bash
php artisan vendor:publish --provider="Arafatkn\LaravelSettings\SettingServiceProvider"
```

## Usage

```php
use Arafatkn\LaravelSettings\Facades\Setting;

Setting::set('setting_key', 'setting_value', $autoload); // create or update
// Here, $autoload = true if you want to indicate that this should be loaded by default.
Setting::has('setting_key'); // check whether the key exists or not
Setting::get('setting_key', 'default_value'); // get the value
Setting::forget('setting_key'); // remove from the settings table
Setting::clean(); // remove all rows from the settings table
Setting::all(); // get all settings
```

## Roadmap

- Runtime result cache to reduce duplicate query (release in v0.2.0).
- File/Redis Cache Support.
- Multiple driver support. Such as- file, redis etc.

If you want to contribute, open a pull request by following Laravel contribution guide.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
