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

class Hash
{

    const ALGO = PASSWORD_BCRYPT;
    const COST = 10;

    public function __construct()
    {
        $this->algo = self::ALGO;
        $this->cost = self::COST;
    } //End constructor

    /**
    * Hash a plain text password.
    *
    * @param string $password 	The plain text password to hash.
    * @return string 			The hashed $password parameter.
    */
    public function password($password)
    {
        return password_hash($password, $this->algo, ['cost' => $this->cost]);
    } //End password

    /**
    * Check a password against it's hash.
    *
    * @param string $password 	Plain text password.
    * @param string $hash 		Hashed password.
    * @return bool 			 	True if they match, false otherwise.
    */
    public function passwordCheck($password, $hash)
    {
        return password_verify($password, $hash);
    } //End password

    /**
    * Use sha256 to hash an input string.
    *
    * @param string $input 	Plain text string to be hashed.
    * @return string 		The hashed version of the $input string.
    */
    public function hash($input)
    {
        return hash('sha256', $input);
    } //End hash

    /**
    * Check a hash against another.
    *
    * @param string $know 	 The hash we know is correct.
    * @param string $unknown The hash we want to compare with it.
    * @return bool 			 True if the hashed strings match, false otherwise.
    */
    public function hashCheck($know, $unknown)
    {
        return hash_equals($know, $unknown);
    } //End hashCheck

} //End class Hash