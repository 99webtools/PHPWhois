PHPWhois
========

A lightweight php whois script by [99webtools](http://99webtools.com)

## Example of usage

```php

<?php
require("whoisClass.php")
$whois=new Whois;
$rs=$whois->whoislookup("99webtools.com"); //Your domain or IP
echo '<pre>'.$rs.'</pre>';
?>

```

Read more how this script works http://99webtools.com/php-whois-script.php
