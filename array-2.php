<?php
/**
 * Created by PhpStorm.
 * User: chenshuai
 * Date: 2018/3/17
 * Time: 下午3:27
 */

/**
 * @param $n 猴子数量
 * @param $m 第几个猴子
 * @return array
 */
function ysf($n,$m)
{
    $i=0;
    $arr = range(1,$n);//创建:含有100个值的数组

    while(count($arr)>=$m) {
        ++$i;
        //不断出队(即删除数组的第一个元素)
        $survice = array_shift($arr);

        if($i%$m<>0){
            //结合约瑟夫环问题
            //报到3就自杀(从队列中踢出),否则等待下一次的审判(再次添加到队尾)
            array_push($arr, $survice);
        } #elseif($i>count($survice)){$i=0;}#这句代码加不加都无所谓,便于理解
    }
    return $arr;
}

$list = ysf(20,3);

print_r($list);