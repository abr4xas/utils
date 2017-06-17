## Twig Slug Generator

[![GitHub issues](https://img.shields.io/github/issues/abr4xas/utils.svg?style=flat-square)](https://github.com/abr4xas/utils/issues) [![GitHub forks](https://img.shields.io/github/forks/abr4xas/twig-slug.svg?style=flat-square)](https://github.com/abr4xas/utils/network) [![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/abr4xas/utils/master/LICENSE)


A [Twig](http://twig.sensiolabs.org/) extension for [abr4xas/twig-slug](https://github.com/abr4xas/utils).

## how to install

```bash
$ composer require abr4xas/utils
$ composer dumpautoload -o // optional
```
and

```bash
$ composer update
$ composer dumpautoload -o // optional
```

## usage

In `SomeController` like this:

```php
<?php

namespace SomeNameSpace;

use SeoUrl\SeoUrl;

class SomeController
{
    public function someFunction()
    {
        $str = 'This is an awesome string';

        $seoUrl = SeoUrl::generateSlug($str); // output: this-is-an-awesome-string

    }
}
```