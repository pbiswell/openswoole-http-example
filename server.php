<?php

use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Server;

$serverip = "127.0.0.1";
$serverport = 9501;

$server = new Swoole\HTTP\Server($serverip, $serverport);

// Server settings
$server->set([
    // Process ID
    "pid_file" => __DIR__ . "/swoole.pid",

    // Logging
    "log_file" => __DIR__ . "/log/swoole.log",
    "log_rotation" => SWOOLE_LOG_ROTATION_DAILY,
    "log_date_format" => "%Y-%m-%d %H:%M:%S",
    "log_date_with_microseconds" => false,

    // HTTP
    "http_compression" => true,
    "compression_min_length" => 128,
]);

/*
    PAGES
    ---
    Add a new page to the array in this format:

    "page-on-webserver" => "location/of/page-to-include.php",

    Example:
    "/help" => __DIR__ . "/inc/help.php",
*/
$pages = array(
    "404" => __DIR__ . "/inc/404.php",
    "/" => __DIR__ . "/inc/index.php",
    "/redirect" => __DIR__ . "/inc/redirect.php",
    "/json" => __DIR__ . "/inc/json.php",
    "/text" => __DIR__ . "/inc/text.php",
    "/get" => __DIR__ . "/inc/get.php",
    "/post" => __DIR__ . "/inc/post.php",
    "/info" => __DIR__ . "/inc/php-info.php",
);

// Start Server
$server->on("Start", function (Server $server) {
    global $serverip, $serverport;
    echo "Swoole http server is started at http://".$serverip.":".$serverport."\n";
});

// Display pages on new request
$server->on("Request", function (Request $request, Response $response) {

    // Setup
    global $serverip, $serverport, $pages;
    $uri = $request->server["request_uri"];
    $requestip = $request->server["remote_addr"];
    // Fix Cloudflare
    if (isset($request->header["cf-connecting-ip"])) {
        $requestip = $request->header["cf-connecting-ip"];
    }
    // Variables to PHP style
    $_SERVER["REMOTE_ADDR"] = $requestip;
    $_SERVER["REQUEST_URI"] = $uri;
    $_SERVER["REQUEST_METHOD"] = $request->server["request_method"];
    $_GET = $request->get ?? [];
    $_FILES = $request->files ?? [];
    $_POST = $request->post ?? [];

    // Page handler
    if (array_key_exists($uri, $pages)) {
        // Include page from array
        include $pages[$uri];
    } else {
        // Not in array - display 404 error page
        include $pages["404"];
    }
});

$server->start();
