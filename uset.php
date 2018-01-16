<?php
/**
 * Created by PhpStorm.
 * User: hidot
 * Date: 2017/7/26
 * Time: 下午8:42
 */
$arr = [
    ['id'=>1, 'value'=>'001'],
    ['id'=>2, 'value'=>'002'],
    ['id'=>3, 'value'=>'003'],
];

foreach ( $arr as $key=>$value ){
    if($value['id'] == 2){
        unset($arr[ $key ]);
        continue;
    }
}

print_r($arr);