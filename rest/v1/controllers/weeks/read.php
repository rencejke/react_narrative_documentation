<?php
$conn = null;
$conn = checkDbConnection();
$weeks = new Weeks($conn);
$error = [];
$returnData = [];


if (array_key_exists("weeksid", $_GET)) {
    $weeks->weeks_aid = $_GET['weeksid'];

    checkId($weeks->weeks_aid);

    $query = checkReadById($weeks);
    http_response_code(200);
    getQueriedData($query);
}



if (empty($_GET)) {
    $query = checkReadAll($weeks);
    http_response_code(200);
    getQueriedData($query);
}

checkEndpoint();
