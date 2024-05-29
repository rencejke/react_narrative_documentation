<?php
require '../../core/header.php';
require '../../core/functions.php';
require '../../models/Intro.php';

$conn = null;
$conn = checkDbConnection();

$intro = new Intro($conn);

$body = file_get_contents("php://input");
$data = json_decode($body, true);


if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    checkApiKey();
    if (array_key_exists("introid", $_GET)) {
        checkPayload($data);
        $intro->intro_aid = $_GET['introid'];
        $intro->intro_is_active = trim($data["isActive"]);
        $intro->intro_datetime = date("Y-m-d H:i:s");
        checkId($intro->intro_aid);
        $query = checkActive($intro);
        http_response_code(200);
        returnSuccess($intro, "intro", $query);
    }
    checkEndpoint();
}

http_response_code(200);
// header('HTTP/1.0 401 Unauthorized');
checkAccess();
