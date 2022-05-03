<?php
// Change content type
$response->header("Content-Type", "application/json");

// From array
$thejson = array();
$thejson["first"] = array(
    "item" => "one",
);
$thejson["second"] = array(
    "item" => "one",
    "otheritem" => "two",
);

// Output
$response->end(json_encode($thejson));
?>