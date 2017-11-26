<?php
error_reporting(E_ALL || ~E_NOTICE);

setcookie("url", $_GET['url']);

$callback = $_GET["jsoncallback"];
$result = json_encode($_GET);
echo "$callback($result)";
exit;