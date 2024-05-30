<?php
require '../../core/header.php';
require '../../core/functions.php';
require '../../models/Cover.php';

$conn = null;
$conn = checkDbConnection();

$cover = new Cover($conn);

$body = file_get_contents("php://input");
$data = json_decode($body, true);


if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    checkApiKey();
    if (array_key_exists("coverid", $_GET)) {
        checkPayload($data);
        $cover->cover_aid = $_GET['coverid'];
        $cover->cover_is_active = trim($data["isActive"]);
        $cover->cover_datetime = date("Y-m-d H:i:s");
        checkId($cover->cover_aid);
        $query = checkActive($cover);
        http_response_code(200);
        returnSuccess($cover, "cover", $query);
    }
    checkEndpoint();
}

http_response_code(200);
// header('HTTP/1.0 401 Unauthorized');
checkAccess();
