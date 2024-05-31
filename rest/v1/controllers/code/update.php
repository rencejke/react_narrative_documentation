<?php
$conn = null;
$conn = checkDbConnection();
$code = new Code($conn);
$error = [];
$returnData = [];
if (array_key_exists("codeid", $_GET)) {
    checkPayload($data);
    $code->code_aid = $_GET['codeid'];
    $code->code_article = checkIndex($data, "code_article");
    $code->code_publish_date = checkIndex($data, "code_publish_date");
    $code->code_datetime = date("Y-m-d H:i:s");
    
    checkId($code->code_aid);
    // $code_name_old = checkIndex($data, "code_name_old");
    // compareName($code, $code_name_old, $code->code_name);
    $query = checkUpdate($code);
    returnSuccess($code, "code", $query);
}

checkEndpoint();