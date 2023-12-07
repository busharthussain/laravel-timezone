# Laravel Timezone

The `bushart/laravel-timezone` package simplifies timezone handling in Laravel applications. By using the `Timezone::getTimezones` method, you can effortlessly retrieve an array of timezones based on the provided current timezone and time hour, streamlining timezone-related operations in your Laravel project

### Docs

-   [Installation](#installation)
-   [Usage](#usage)


### Install package

To install the package, you can use Composer. Add the following line to your `composer.json` file and execute the command:

```bash
composer require bushart/laravel-timezone
```

### Usage

After installing the package, you can use it in your PHP files. Here's an example:
    
```
use Bushart\LaravelTimezone\Timezone;

// Returns a Timezones array
// You need to pass 2 values: current Timezone (e.g., 'UTC') and current time Hour (e.g., 7)

$timezones = Timezone::getTimezones('UTC', 7);
```

### Have fun CRUDding! :-)