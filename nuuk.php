<?php
/**
 * Nuuk
 *
 * Nuuk is a private, drop-in, functional PHP framework.
 *
 * Copyright (c) 2015, 2016, 2017 Ciprian Popescu
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category   Component
 * @package    Nuuk
 * @author     Ciprian Popescu <getbutterfly@gmail.com>
 * @copyright  2012-2017 Ciprian Popescu
 * @license    MIT License (MIT) https://opensource.org/licenses/MIT
 * @version    1.0.0-alpha1
 * @link       https://getbutterfly.com/nuuk/
 */

if (!isset($_SESSION)) {
	session_start();
} 

require_once 'components/database.php';
require_once 'components/users.php';
