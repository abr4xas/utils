### Utilidades

[![GitHub issues](https://img.shields.io/github/issues/abr4xas/utils.svg?style=flat-square)](https://github.com/abr4xas/utils/issues) [![GitHub forks](https://img.shields.io/github/forks/abr4xas/twig-slug.svg?style=flat-square)](https://github.com/abr4xas/utils/network) [![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/abr4xas/utils/master/LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/abr4xas/utils/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/abr4xas/utils/?branch=master)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/62d8bf07dc3a4c09bb8eae53edae9871)](https://www.codacy.com/app/ElBlogDeAbr4xas/utils?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=abr4xas/utils&amp;utm_campaign=Badge_Grade)

### how to install

Add this to your `composer.json`

```json
"require": {
    "abr4xas/utils": "dev-master"
}
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

use Abr4xas\Utils\Hash;
// read the docs :smile:

use Abr4xas\Utils\SeoUrl;
SeoUrl::generateSlug('this is an awesome string');

use Abr4xas\Utils\Gravatar;
Gravatar::getAvatarUrl('email@domain.tld', ['s'=> 80, 'd'=>'mm', 'secure' => true]);

use Abr4xas\Utils\UploadsIm;
UploadsIm::uploadImages('image.jpg', $fileType); // default `$fileType` image/jpeg

use Abr4xas\Utils\TimeFormat;
TimeFormat::timeAgo('2017-07-11'); 

use Abr4xas\Utils\OpenWeatherMap;
OpenWeatherMap::openWeatherMap('city','api key');

use Abr4xas\Utils\PrettyPrintArray;
PrettyPrintArray::prettyPrintArray($var);


use Abr4xas\Utils\SuggestKeyword;
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

use Abr4xas\Utils\GoogleShortUrl;
$url = GoogleShortUrl::shortUrl('https://blog.abr4xas.org/','apiKey');
// Output: https://goo.gl/83ymQE
```
