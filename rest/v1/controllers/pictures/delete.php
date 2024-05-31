<?php
$conn = null;
$conn = checkDbConnection();
$pictures = new Pictures($conn);

$error = [];
$returnData = [];
if (array_key_exists("picturesid", $_GET)) {
    $pictures->pictures_aid = $_GET['picturesid'];
    checkId($pictures->pictures_aid);

    $query = checkDelete($pictures);
    returnSuccess($pictures, "pictures", $query);
}

checkEndpoint();