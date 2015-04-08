<?php
/**
 * Nuuk Framework
 *
 * A procedural PHP framework with support for the latest PHP technologies
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2015 Ciprian Popescu
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
 * @package    Nuuk Framework
 * @author     Ciprian Popescu <getbutterfly@gmail.com>
 * @copyright  2012-2015 Ciprian Popescu
 * @license    http://opensource.org/licenses/MIT
 * @version    0.1-build12
 * @link       http://getbutterfly.com/nuuk/
 */

define('DBHOST', 'localhost');
define('DBNAME', '');
define('DBUSER', '');
define('DBPASS', '');

define('DBPREFIX', 'nuuk_');

/**
  * nuukdb is a PDO connection method
  *
  * nuukdb uses a default set of parameters, as documented by PDO::Documentation
  *
  * @param string DBHOST Database host, usually 'localhost'
  * @param string DBNAME Database name
  * @param string DBUSER Database username
  * @param string DBPASS Database password
  *
  * @return array
  */
$nuukdb = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8', DBUSER, DBPASS);
$nuukdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$nuukdb->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

/*
// all code chunks below are samples

// this code will prepare and execute a query
$nuuk = $nuukdb->prepare("INSERT INTO users (username, password, registration) VALUES ('$username', '$password', NOW())");
$nuuk->execute();

// this code will get a row and make it available using $user['password']
$nuuk = $nuukdb->prepare("SELECT * FROM users WHERE username='$username'");
$nuuk->execute();
$user = $nuuk->fetch();

// this code will query a table and count returned rows/results
$res = $nuukdb->query("SELECT * FROM updates WHERE deadline != '0000-00-00' AND type != '3'");
$items = $res->rowCount();

// this code will create a loop
$res = $nuukdb->query("SELECT * FROM data WHERE FIND_IN_SET('" . $userid . "', uids) AND priority != 'closed' ORDER BY lastmodified DESC");
foreach($res as $row) {
    $read_count = $res->rowCount();
    echo $row['password'];
}

// get last update/reply ID
$nuuk = $nuukdb->prepare("INSERT INTO updates (projectid, deadline) VALUES ('$projectid', '$deadline')");
$nuuk->execute();
$last_id = $nuukdb->lastInsertId();
*/
?>
