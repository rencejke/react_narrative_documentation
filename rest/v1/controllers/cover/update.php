<?php
$conn = null;
$conn = checkDbConnection();
$cover = new Cover($conn);
$error = [];
$returnData = [];
if (array_key_exists("coverid", $_GET)) {
    checkPayload($data);
    $cover->cover_aid = $_GET['coverid'];
    $cover->cover_header = checkIndex($data, "cover_header");
    $cover->cover_article = checkIndex($data, "cover_article");
    $cover->cover_publish_date = checkIndex($data, "cover_publish_date");
    $cover->cover_datetime = date("Y-m-d H:i:s");
    
    checkId($cover->cover_aid);
    // $cover_name_old = checkIndex($data, "cover_name_old");
    // compareName($cover, $cover_name_old, $cover->cover_name);
    $query = checkUpdate($cover);
    returnSuccess($cover, "cover", $query);
}

checkEndpoint();