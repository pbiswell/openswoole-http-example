<?php
// Links to all pages
$prefix = "http://".$serverip.":".$serverport;
$response->write("<h1>Pages</h1>");
foreach ($pages as $key => $value) {
    if ($key[0] == "/") $response->write("<a href=\"".$prefix.$key."\">".$prefix.$key."</a><br>");
}
?>
