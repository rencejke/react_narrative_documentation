<?php
$conn = null;
$conn = checkDbConnection();
$intro = new Intro($conn);
$error = [];
$returnData = [];
if (array_key_exists("introid", $_GET)) {
    checkPayload($data);
    $intro->intro_aid = $_GET['introid'];
    $intro->intro_article = checkIndex($data, "intro_article");
    $intro->intro_publish_date = checkIndex($data, "intro_publish_date");
    $intro->intro_datetime = date("Y-m-d H:i:s");
    
    checkId($intro->intro_aid);
    // $intro_name_old = checkIndex($data, "intro_name_old");
    // compareName($intro, $intro_name_old, $intro->intro_name);
    $query = checkUpdate($intro);
    returnSuccess($intro, "intro", $query);
}

checkEndpoint();