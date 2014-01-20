<?php
require("whoisClass.php")
$whois=new Whois;
$rs=$whois->whoislookup("99webtools.com"); //Your domain or IP
echo '<pre>'.$rs.'</pre>';
?>
