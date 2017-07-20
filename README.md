### Utilidades

[![GitHub issues](https://img.shields.io/github/issues/abr4xas/utils.svg?style=flat-square)](https://github.com/abr4xas/utils/issues) [![GitHub forks](https://img.shields.io/github/forks/abr4xas/twig-slug.svg?style=flat-square)](https://github.com/abr4xas/utils/network) [![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/abr4xas/utils/master/LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/abr4xas/utils/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/abr4xas/utils/?branch=master)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/62d8bf07dc3a4c09bb8eae53edae9871)](https://www.codacy.com/app/ElBlogDeAbr4xas/utils?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=abr4xas/utils&amp;utm_campaign=Badge_Grade)

### how to install

```bash
$ composer require abr4xas/utils
$ composer dumpautoload -o // optional
```

### components


```php
use Abr4xas\Utils\SeoUrl;
use Abr4xas\Utils\Hash;
use Abr4xas\Utils\Debug;
use Abr4xas\Utils\Money;
use Abr4xas\Utils\Gravatar;
use Abr4xas\Utils\TimeFormat;
```

### how to use

```php

<?php

require 'vendor/autoload.php';

use Abr4xas\Utils\SeoUrl;

SeoUrl::generateSlug('this is an awesome string');


use Abr4xas\Utils\Hash;
// read the docs :smile:

use Abr4xas\Utils\Debug;

Debug::dieDump($var);

use Abr4xas\Utils\Money;

Money::generaFormato(200, ['s' => 'USD$']); // USD$ 200.00
Money::generaFormato(200, ['s' => 'USD$', 'd' => 4]); // USD$ 200.0000

Money::quitarFormato('USD$ 200',  ['s' => 'USD$']); // 200.00
Money::quitarFormato('USD$ 200',  ['s' => 'USD$', 'd' => 4]); // 200.0000

use Abr4xas\Utils\Gravatar;

Gravatar::getAvatarUrl('email@domain.tld', ['s'=> 80, 'd'=>'mm', 'secure' => true]);

use Abr4xas\Utils\TimeFormat;

TimeFormat::timeAgo('2017-07-11'); 

```
