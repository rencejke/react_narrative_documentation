<?php
$conn = null;
$conn = checkDbConnection();
$code = new Code($conn);
$error = [];
$returnData = [];


if (array_key_exists("codeid", $_GET)) {
    $code->code_aid = $_GET['codeid'];

    checkId($code->code_aid);

    $query = checkReadById($code);
    http_response_code(200);
    getQueriedData($query);
}



if (empty($_GET)) {
    $query = checkReadAll($code);
    http_response_code(200);
    getQueriedData($query);
}

checkEndpoint();
