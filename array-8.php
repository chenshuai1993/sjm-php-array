<?php
/**
 * Created by PhpStorm.
 * User: chenshuai
 * Date: 2018/3/17
 * Time: 下午4:27
 */

#字符串翻转-用数组栈

$name = 'dlroWolleh';

$arrName = [];

$reverseName = '';

#字符转数组
for ($i=0,$len=strlen($name); $i<$len; $i++){
    $arrName[] = $name[$i];
}

#翻转
while (count($arrName) > 0){
    $reverseName .= array_pop($arrName);
}

echo '翻转后的字符为=>',$reverseName;
