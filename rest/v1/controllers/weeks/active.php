<?php
require '../../core/header.php';
require '../../core/functions.php';
require '../../models/Weeks.php';

$conn = null;
$conn = checkDbConnection();

$weeks = new Weeks($conn);

$body = file_get_contents("php://input");
$data = json_decode($body, true);


if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    checkApiKey();
    if (array_key_exists("weeksid", $_GET)) {
        checkPayload($data);
        $weeks->weeks_aid = $_GET['weeksid'];
        $weeks->weeks_is_active = trim($data["isActive"]);
        $weeks->weeks_datetime = date("Y-m-d H:i:s");
        checkId($weeks->weeks_aid);
        $query = checkActive($weeks);
        http_response_code(200);
        returnSuccess($weeks, "weeks", $query);
    }
    checkEndpoint();
}

http_response_code(200);
// header('HTTP/1.0 401 Unauthorized');
checkAccess();
