<?php
$conn = null;
$conn = checkDbConnection();
$cover = new Cover($conn);

$error = [];
$returnData = [];
if (array_key_exists("coverid", $_GET)) {
    $cover->cover_aid = $_GET['coverid'];
    checkId($cover->cover_aid);

    $query = checkDelete($cover);
    returnSuccess($cover, "cover", $query);
}

checkEndpoint();