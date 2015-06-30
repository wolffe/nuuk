# Introduction
Nuuk Framework is a procedural PDO framework with support for the latest PHP/MySQL features and technologies.

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
