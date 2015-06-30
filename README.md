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
$nuuk = $nuukdb->prepare("INSERT INTO table_name (column1, column2, column3) VALUES ('$value1', '$value2', '$value3')");
$nuuk->execute();
```
