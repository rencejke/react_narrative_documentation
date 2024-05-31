<?php
require '../../core/header.php';
require '../../core/functions.php';
require '../../models/Code.php';

$conn = null;
$conn = checkDbConnection();

$code = new Code($conn);

$body = file_get_contents("php://input");
$data = json_decode($body, true);


if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    checkApiKey();
    if (array_key_exists("codeid", $_GET)) {
        checkPayload($data);
        $code->code_aid = $_GET['codeid'];
        $code->code_is_active = trim($data["isActive"]);
        $code->code_datetime = date("Y-m-d H:i:s");
        checkId($code->code_aid);
        $query = checkActive($code);
        http_response_code(200);
        returnSuccess($code, "code", $query);
    }
    checkEndpoint();
}

http_response_code(200);
// header('HTTP/1.0 401 Unauthorized');
checkAccess();
