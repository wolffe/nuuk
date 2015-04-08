<?php
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
