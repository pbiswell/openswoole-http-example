<?php
// Plain text
$response->header("Content-Type", "text/plain");
// Print all POST variables
foreach ($_POST as $key => $value) {
    $response->write($key . ": " . $value . "\n");
}
?>
