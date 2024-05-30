<?php
$conn = null;
$conn = checkDbConnection();
$weeks = new Weeks($conn);
$error = [];
$returnData = [];
if (array_key_exists("weeksid", $_GET)) {
    checkPayload($data);
    $weeks->weeks_aid = $_GET['weeksid'];
    $weeks->weeks_title = checkIndex($data, "weeks_title");
    $weeks->weeks_article = checkIndex($data, "weeks_article");
    $weeks->weeks_publish_date = checkIndex($data, "weeks_publish_date");
    $weeks->weeks_datetime = date("Y-m-d H:i:s");
    
    checkId($weeks->weeks_aid);
    // $weeks_name_old = checkIndex($data, "weeks_name_old");
    // compareName($weeks, $weeks_name_old, $weeks->weeks_name);
    $query = checkUpdate($weeks);
    returnSuccess($weeks, "weeks", $query);
}

checkEndpoint();