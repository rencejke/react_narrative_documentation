<?php
$conn = null;
$conn = checkDbConnection();
$cover = new Cover($conn);
$error = [];
$returnData = [];


if (array_key_exists("coverid", $_GET)) {
    $cover->cover_aid = $_GET['coverid'];

    checkId($cover->cover_aid);

    $query = checkReadById($cover);
    http_response_code(200);
    getQueriedData($query);
}



if (empty($_GET)) {
    $query = checkReadAll($cover);
    http_response_code(200);
    getQueriedData($query);
}

checkEndpoint();
