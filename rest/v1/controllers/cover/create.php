<?php
$conn = null;
$conn = checkDbConnection();
$cover = new Cover($conn);
if (array_key_exists("coverid", $_GET)) {
    checkEndpoint();
}
checkPayload($data);
$cover->cover_header = checkIndex($data, "cover_header");
$cover->cover_article = checkIndex($data, "cover_article");
$cover->cover_publish_date = checkIndex($data, "cover_publish_date");
$cover->cover_is_active = 1;
$cover->cover_created = date("Y-m-d H:i:s");
$cover->cover_datetime = date("Y-m-d H:i:s");

// isNameExist($cover, $cover->cover_title);

$query = checkCreate($cover);
returnSuccess($cover, "cover", $query);
