<?php
$conn = null;
$conn = checkDbConnection();
$pictures = new Pictures($conn);
$error = [];
$returnData = [];
if (array_key_exists("picturesid", $_GET)) {
    checkPayload($data);
    $pictures->pictures_aid = $_GET['picturesid'];
    $pictures->pictures_article = checkIndex($data, "pictures_article");
    $pictures->pictures_publish_date = checkIndex($data, "pictures_publish_date");
    $pictures->pictures_datetime = date("Y-m-d H:i:s");
    
    checkId($pictures->pictures_aid);
    // $pictures_name_old = checkIndex($data, "pictures_name_old");
    // compareName($pictures, $pictures_name_old, $pictures->pictures_name);
    $query = checkUpdate($pictures);
    returnSuccess($pictures, "pictures", $query);
}

checkEndpoint();