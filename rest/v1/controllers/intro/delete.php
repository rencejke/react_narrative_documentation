<?php
$conn = null;
$conn = checkDbConnection();
$intro = new Intro($conn);

$error = [];
$returnData = [];
if (array_key_exists("introid", $_GET)) {
    $intro->intro_aid = $_GET['introid'];
    checkId($intro->intro_aid);

    $query = checkDelete($intro);
    returnSuccess($intro, "intro", $query);
}

checkEndpoint();