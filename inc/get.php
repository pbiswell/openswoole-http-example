<?php
// Plain text
$response->header("Content-Type", "text/plain");
// Print all GET variables
foreach ($_GET as $key => $value) {
    $response->write($key.": ".$value."\n");
}
?>
