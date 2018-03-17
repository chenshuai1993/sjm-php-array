<?php
/**
 * Created by PhpStorm.
 * User: chenshuai
 * Date: 2018/3/17
 * Time: 下午4:46
 */

#18


$nums = array(11,18,12,1,-2,20,8,10,7,6);
for($i=0;$i<1024;$i++){
    $str = str_split(strrev(decbin(18)));

    $ans = 0;
    foreach($str as $k=>$v){
        $ans +=$v *$nums[$k];
    }
    if($ans==18) {
        echo '[';
        foreach($str as $k=>$v){
            if($v==1) {
                echo $nums[$k];echo ",";
            }
        }
        echo "]";
    }
}