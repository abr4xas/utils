## Utilidades

[![GitHub issues](https://img.shields.io/github/issues/abr4xas/utils.svg?style=flat-square)](https://github.com/abr4xas/utils/issues) [![GitHub forks](https://img.shields.io/github/forks/abr4xas/twig-slug.svg?style=flat-square)](https://github.com/abr4xas/utils/network) [![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/abr4xas/utils/master/LICENSE)

Un simple composer package que puede servir de utilidad a cualquiera con muchas herramientas que facilitan el desarrollo de proyectos mucho más rápido.

---



### how to install

```bash
composer require abr4xas/utils
```

Then:

```bash
$ composer update
$ composer dumpautoload -o // optional
```

### components

```php
use Abr4xas\Utils\Hash;
use Abr4xas\Utils\SeoUrl;
use Abr4xas\Utils\Gravatar;
use Abr4xas\Utils\UploadsIm;
use Abr4xas\Utils\TimeFormat;
use Abr4xas\Utils\GoogleShortUrl;
use Abr4xas\Utils\SuggestKeyword;
use Abr4xas\Utils\OpenWeatherMap;
use Abr4xas\Utils\PrettyPrintArray;
```

### how to use

```php

<?php

require 'vendor/autoload.php';

use Abr4xas\Utils\SeoUrl;
use Abr4xas\Utils\Gravatar;
use Abr4xas\Utils\TimeFormat;
use Abr4xas\Utils\SuggestKeyword;
use Abr4xas\Utils\PrettyPrintArray;

$slug = SeoUrl::generateSlug('this is an awesome string');
// this-is-an-awesome-string

$gravatar = Gravatar::getAvatarUrl('email@domain.tld', ['s' => 80, 'd' => 'mm', 'secure' => true]);
// https://secure.gravatar.com/avatar/0b84841f9b6236d312515dc83046078c?s=80&d=mm&r=g

$timeAgo = TimeFormat::timeAgo('2020-08-25');
// 21 hours ago

PrettyPrintArray::prettyPrintArray($var);

$keywords = SuggestKeyword::SuggestKeyword('php');

PrettyPrintArray::prettyPrintArray($keywords);

// Output:

// Array
// (
//     [0] => php
//     [1] => phpmyadmin
//     [2] => php date
//     [3] => phpstorm
//     [4] => php online
//     [5] => php array length
//     [6] => php foreach
//     [7] => phpunit
//     [8] => php array
//     [9] => php try catch
// )
```



### random string generator usage

```php
<?php

use Abr4xas\Utils\RandomStringGenerator;

// create new instance of generator class.
$generator = new RandomStringGenerator;

// set token length.
$tokenLength = 10;

// call method to generate random string.
$token = $generator->generate($tokenLength);
```

### custom alphabet

```php
<?php

$customAlphabet = '0123456789ABCDEF';

// set initial alphabet.
$generator = new RandomStringGenerator($customAlphabet);

// set token length.
$tokenLength = 10;

// change alphabet whenever needed.
$generator->setAlphabet($customAlphabet);

// call method to generate random string.
$token = $generator->generate($tokenLength);
```