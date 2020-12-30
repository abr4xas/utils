<?php
/**
 * The MIT License (MIT)
 * Copyright (c) 2017 Angel Cruz <me@abr4xas.org>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the “Software”), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @author Angel Cruz <me@abr4xas.org>
 * @license MIT License
 * @copyright 2017 Angel Cruz
 */

namespace Abr4xas\Utils;

class Gravatar
{
    const HTTP_URL = 'http://www.gravatar.com/avatar/';
    const HTTPS_URL = 'https://secure.gravatar.com/avatar/';

    /**
     * Returns the user's gravatar url.
     * @param string $email The email address
     * @param array $options Optional, additional key/value attributes to include
     * @return string Link to the user's gravatar image.
     */
    public static function getAvatarUrl($email, $options = []): string
    {
        $size = isset($options['s']) ? $options['s'] : 80;
        $imageset = isset($options['d']) ? $options['d'] : 'mm';
        $rating = isset($options['r']) ? $options['r'] : 'g';
        $secure = isset($options['secure']) ? self::HTTPS_URL : self::HTTP_URL;

        return $secure . md5(strtolower(trim($email))) . '?s=' . $size .'&d=' . $imageset . '&r=' . $rating;
    }
}
