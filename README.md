# IntFormat

The function formats an integer with grouped thousands and optionally +/− signs.

## Install

Install via [Composer](https://getcomposer.org/):

```bash
$ composer require sergeyakovlev/int-format
```

## Usage

```php
use function SergeYakovlev\IntFormat\int_format;

$value = -1000000;

// Use cases are equivalent
$formatted_value = int_format($value);
$formatted_value = int_format($value, '&nbsp;', '', '&minus;');
// $formatted_value = "&minus;1&nbsp;000&nbsp;000"
```
