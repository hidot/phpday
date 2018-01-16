<?php
header('Content-type:text/html; charset=utf-8');


// header 语法
echo "header(string, replace, http_response_code)" . PHP_EOL;
// 页面默认UTF-8编码
header('Content-type:text/html; charset=utf-8');
// 页面跳转
echo "header('Loction: http://www.example.com/')" . PHP_EOL;