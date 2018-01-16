<?php
header("Content-type: text/html; charset=utf-8");

$arr = array(
    array('id' => 'AL', 'value' => '学而思培优'),
    array('id' => 'AK', 'value' => '东学堂语文'),
    array('id' => 'AZ', 'value' => '乐加乐英语'),
    array('id' => 'AR', 'value' => '爱智康'),
    array('id' => 'Ac', 'value' => '学而思网校'),
    array('id' => 'Av', 'value' => '海边直播'),
    array('id' => 'Ab', 'value' => '家长帮'),
    array('id' => 'An', 'value' => '乐外教'),
    array('id' => 'Am', 'value' => '摩比'),
);

exit(json_encode($arr));
?>
