<?php
$conn = null;
$conn = checkDbConnection();
$pictures = new Pictures($conn);
$error = [];
$returnData = [];


if (array_key_exists("picturesid", $_GET)) {
    $pictures->pictures_aid = $_GET['picturesid'];

    checkId($pictures->pictures_aid);

    $query = checkReadById($pictures);
    http_response_code(200);
    getQueriedData($query);
}



if (empty($_GET)) {
    $query = checkReadAll($pictures);
    http_response_code(200);
    getQueriedData($query);
}

checkEndpoint();
