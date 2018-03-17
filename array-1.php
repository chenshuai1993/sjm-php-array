<?php

#1、多维数组排序
$items = array(
    array('http://www.abc.com/a/', 100, 120),
    array('http://www.abc.com/b/index.php', 50, 80),
    array('http://www.abc.com/a/index.html', 90, 100),
    array('http://www.abc.com/a/?id=12345', 200, 33),
    array('http://www.abc.com/c/index.html', 10, 20),
    array('http://www.abc.com/abc/', 10, 30)
);
#变成如下的样子：
/*array (
    array ( 'http://www.abc.com/a/', 390,253),
    array ('http://www.abc.com/b/', 50,80),
    array ('http://www.abc.com/c/', 10,20),
    array ('http://www.abc.com/abc/', 10,30)
)*/



#二维数组排序
function arraySort($array){
    $result = [];

    $len = strlen('http://www.abc.com/a');

    #处理数组
    array_walk($array,function(&$value,$index,$len){
        $_index = strpos($value[0],'/',$len) +1;
        $value[0] = substr($value[0],0, $_index);
    },$len);

    #处理数据
    foreach ($array as $key => $value){

        if(isset($result[$value[0]])){
            $result[$value[0]][1]  += $value[1];
            $result[$value[0]][2]  += $value[2];
        }else{
            $result[$value[0]] = $value;
        }
    }

    return $result;
}


$result = arraySort($items);

print_r($result);


