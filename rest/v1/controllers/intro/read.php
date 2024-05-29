<?php
$conn = null;
$conn = checkDbConnection();
$intro = new Intro($conn);
$error = [];
$returnData = [];


if (array_key_exists("introid", $_GET)) {
    $intro->intro_aid = $_GET['introid'];

    checkId($intro->intro_aid);

    $query = checkReadById($intro);
    http_response_code(200);
    getQueriedData($query);
}



if (empty($_GET)) {
    $query = checkReadAll($intro);
    http_response_code(200);
    getQueriedData($query);
}

checkEndpoint();
