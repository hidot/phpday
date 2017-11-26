<?php
error_reporting(E_ALL || ~E_NOTICE);

// 直接返回用户信息
if($_GET['return_json'] == 1){
    $callback = $_GET["jsoncallback"];
    $result = json_encode($_GET);
    echo "$callback($result)";
    exit;
}

if($_GET['uid'] > 0){
    header( 'Location: ' . $_COOKIE['url'] . '&uid=' . $_GET['uid'] );
}
