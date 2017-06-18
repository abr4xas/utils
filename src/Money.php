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
use Exception;

class Money
{
    /**
     * Genera el formato de moneda
     *
     * @param  float $valor monto a transformar
     * @param  string $simbolo símbolo a mostrar por defecto BsF
     * @param  int $decimal cantidad de decimales a mostrar por defecto dos
     * @return string valor formateado según $simbolo y $decimal
     * @throws Exception
     */

    public static function generaFormato($valor = 0, $simbolo = 'BsF', $decimal = 2)
    {
        if (!is_numeric($valor))
            throw new Exception("{$valor} debe indicar un número que sea válido");
        if (!is_int($decimal))
            throw new Exception("El valor {$decimal} no es válido");

        return $simbolo . ' ' . number_format($valor, $decimal, '.', '');
    }
    /**
     * Retira el formato generado de moneda
     *
     * @param  string $str monto a transformar
     * @param  string $simbolo
     * @return float
     */
    public static function quitarFormato($str, $simbolo = 'BsF')
    {
        return floatval(str_replace('.', '', str_replace($simbolo, '', $str)));
    }
}
