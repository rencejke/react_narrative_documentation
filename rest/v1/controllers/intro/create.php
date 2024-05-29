<?php
$conn = null;
$conn = checkDbConnection();
$intro = new Intro($conn);
if (array_key_exists("introid", $_GET)) {
    checkEndpoint();
}
checkPayload($data);
$intro->intro_article = checkIndex($data, "intro_article");
$intro->intro_publish_date = checkIndex($data, "intro_publish_date");
$intro->intro_is_active = 1;
$intro->intro_created = date("Y-m-d H:i:s");
$intro->intro_datetime = date("Y-m-d H:i:s");

// isNameExist($intro, $intro->intro_title);

$query = checkCreate($intro);
returnSuccess($intro, "intro", $query);
