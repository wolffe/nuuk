[![Code Climate](https://codeclimate.com/github/wolffe/nuuk/badges/gpa.svg)](https://codeclimate.com/github/wolffe/nuuk)
[![Issue Count](https://codeclimate.com/github/wolffe/nuuk/badges/issue_count.svg)](https://codeclimate.com/github/wolffe/nuuk)

# Version
`1.0.0-alpha1`

# Introduction
Nuuk is a private, drop-in, functional PHP framework.

# Components
* Database connectivity
* Database interaction
* Email sending
* String sanitization
* Helpers

# Usage
```php
// this code will prepare and execute a query
$nuuk = $nuukdb->prepare("INSERT INTO table_name (column1, column2) VALUES ('$value1', '$value2')");
$nuuk->execute();
```

```php
// this code will create a loop
$res = $nuukdb->query("SELECT value FROM table_name WHERE priority = 'high' ORDER BY lastmodified DESC");
foreach($res as $row) {
    $read_count = $res->rowCount();
    echo $row['value'];
}
```

## Prepare and execute a query
```php
$nuuk = $nuukDb->prepare("INSERT INTO users (username, password, registration) VALUES ('$username', '$password', NOW())");
$nuuk->execute();
```

## Get a row and make it available using $user['password']
```php
$nuuk = $nuukDb->prepare("SELECT * FROM users WHERE username='$username'");
$nuuk->execute();
$user = $nuuk->fetch();
```

## Query a table and count returned rows/results
```php
$res = $nuukDb->query("SELECT * FROM updates WHERE deadline != '0000-00-00' AND type != '3'");
$items = $res->rowCount();
```

## Create a loop
```php
$res = $nuukDb->query("SELECT * FROM data WHERE FIND_IN_SET('" . $userid . "', uids) AND priority != 'closed' ORDER BY lastmodified DESC");
foreach($res as $row) {
    $read_count = $res->rowCount();
    echo $row['password'];
}
```

## Get the last inserted ID (see below)
```php
$nuuk_last_id = $nuukDb->lastInsertId();
```

## Get last update/reply ID
```php
$nuuk = $nuukDb->prepare("INSERT INTO updates (projectid, deadline) VALUES ('$projectid', '$deadline')");
$nuuk->execute();
$last_id = $nuukDb->lastInsertId();
```
