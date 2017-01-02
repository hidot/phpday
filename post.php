<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/1 0001
 * Time: 上午 10:44
 */
//header( 'Access-Control-Allow-Origin:*' );
if(empty($_POST)){
    $_POST = $_GET;
}
echo json_encode($_POST);