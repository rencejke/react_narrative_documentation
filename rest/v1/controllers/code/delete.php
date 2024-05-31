<?php
$conn = null;
$conn = checkDbConnection();
$code = new Code($conn);

$error = [];
$returnData = [];
if (array_key_exists("codeid", $_GET)) {
    $code->code_aid = $_GET['codeid'];
    checkId($code->code_aid);

    $query = checkDelete($code);
    returnSuccess($code, "code", $query);
}

checkEndpoint();