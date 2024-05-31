<?php
$conn = null;
$conn = checkDbConnection();
$pictures = new Pictures($conn);
if (array_key_exists("picturesid", $_GET)) {
    checkEndpoint();
}
checkPayload($data);
$pictures->pictures_article = checkIndex($data, "pictures_article");
$pictures->pictures_publish_date = checkIndex($data, "pictures_publish_date");
$pictures->pictures_is_active = 1;
$pictures->pictures_created = date("Y-m-d H:i:s");
$pictures->pictures_datetime = date("Y-m-d H:i:s");

// isNameExist($pictures, $pictures->pictures_title);

$query = checkCreate($pictures);
returnSuccess($pictures, "pictures", $query);
