<?php
// We need to do this otherwise the PHP info outputs to the server log.
ob_start();
phpinfo();
$data = ob_get_contents();
ob_clean();
// The PHP info is only in plain text, not the HTML page.
$response->header("Content-Type", "text/plain");
$response->end($data);
?>
