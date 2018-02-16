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

class SuggestKeyword
{

    /**
     * Generar URL
     *
     * @param $param url
     * @param $apiKey string llave api de Google
     *
     * @return array resultado de la transaccion
     */
    public static function SuggestKeyword($param)
    { 
        $curlSession = curl_init();
        curl_setopt($curlSession, CURLOPT_URL, 'https://suggestqueries.google.com/complete/search?output=firefox&client=firefox&hl=en-US&q=' . $param);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlSession, CURLOPT_HTTPHEADER, [ 'Content-type: application/json' ]);
        $jsonData = json_decode(curl_exec($curlSession), true);
        curl_close($curlSession);
        
        return $jsonData[ 1 ];
    }
    
}
