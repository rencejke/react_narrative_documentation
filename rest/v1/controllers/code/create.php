<?php
$conn = null;
$conn = checkDbConnection();
$code = new Code($conn);
if (array_key_exists("codeid", $_GET)) {
    checkEndpoint();
}
checkPayload($data);
$code->code_article = checkIndex($data, "code_article");
$code->code_publish_date = checkIndex($data, "code_publish_date");
$code->code_is_active = 1;
$code->code_created = date("Y-m-d H:i:s");
$code->code_datetime = date("Y-m-d H:i:s");

// isNameExist($code, $code->code_title);

$query = checkCreate($code);
returnSuccess($code, "code", $query);
