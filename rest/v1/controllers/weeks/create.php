<?php
$conn = null;
$conn = checkDbConnection();
$weeks = new Weeks($conn);
if (array_key_exists("weeksid", $_GET)) {
    checkEndpoint();
}
checkPayload($data);
$weeks->weeks_title = checkIndex($data, "weeks_title");
$weeks->weeks_article = checkIndex($data, "weeks_article");
$weeks->weeks_publish_date = checkIndex($data, "weeks_publish_date");
$weeks->weeks_is_active = 1;
$weeks->weeks_created = date("Y-m-d H:i:s");
$weeks->weeks_datetime = date("Y-m-d H:i:s");

// isNameExist($weeks, $weeks->weeks_title);

$query = checkCreate($weeks);
returnSuccess($weeks, "weeks", $query);
