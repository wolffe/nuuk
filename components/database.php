<?php
define('DBHOST', 'localhost');
define('DBNAME', '');
define('DBUSER', '');
define('DBPASS', '');

define('DBPREFIX', 'nuuk_');

/*
 * nuukDb is a PDO connection method
 *
 * nuukDb uses a default set of parameters, as documented by PDO::Documentation
 *
 * @param string DBHOST Database host, usually 'localhost'
 * @param string DBNAME Database name
 * @param string DBUSER Database username
 * @param string DBPASS Database password
 *
 * @return array
 */
function nuukDb() {
    $nuukDb = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8', DBUSER, DBPASS);
    $nuukDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nuukDb->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

}
