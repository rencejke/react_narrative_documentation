<?php
require '../../core/header.php';
require '../../core/functions.php';
require '../../models/Code.php';
// check database connection
$conn = null;
$conn = checkDbConnection();
// make instance of classes
$code = new Code($conn);
// get payload
$body = file_get_contents("php://input");
$data = json_decode($body, true);

// // validate api key
if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    checkApiKey();
    checkPayload($data);
    // get data
    $code->code_search = $data["searchValue"];
    checkKeyword($code->code_search);
    $query = checkSearch($code);
    http_response_code(200);
    getQueriedData($query);
    // return 404 error if endpoint not available
    checkEndpoint();
}

http_response_code(200);
// when authentication is cancelled
// header('HTTP/1.0 401 Unauthorized');
checkAccess();