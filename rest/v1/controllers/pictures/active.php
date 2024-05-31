<?php
require '../../core/header.php';
require '../../core/functions.php';
require '../../models/Pictures.php';

$conn = null;
$conn = checkDbConnection();

$pictures = new Pictures($conn);

$body = file_get_contents("php://input");
$data = json_decode($body, true);


if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    checkApiKey();
    if (array_key_exists("picturesid", $_GET)) {
        checkPayload($data);
        $pictures->pictures_aid = $_GET['picturesid'];
        $pictures->pictures_is_active = trim($data["isActive"]);
        $pictures->pictures_datetime = date("Y-m-d H:i:s");
        checkId($pictures->pictures_aid);
        $query = checkActive($pictures);
        http_response_code(200);
        returnSuccess($pictures, "pictures", $query);
    }
    checkEndpoint();
}

http_response_code(200);
// header('HTTP/1.0 401 Unauthorized');
checkAccess();
