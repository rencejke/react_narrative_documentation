<?php
$conn = null;
$conn = checkDbConnection();
$weeks = new Weeks($conn);

$error = [];
$returnData = [];
if (array_key_exists("weeksid", $_GET)) {
    $weeks->weeks_aid = $_GET['weeksid'];
    checkId($weeks->weeks_aid);

    $query = checkDelete($weeks);
    returnSuccess($weeks, "weeks", $query);
}

checkEndpoint();