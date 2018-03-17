<?php
/**
 * Created by PhpStorm.
 * User: chenshuai
 * Date: 2018/3/17
 * Time: 下午3:28
 */

#3、得分计算，已知道选题提交的答案是

$commits= 'A,B,B,A,C,C,D,A,B,C,D,C,C,C,D,A,B,C,D,A';

#实际的答案是：
$answers= 'A,A,B,A,D,C,D,A,A,C,C,D,C,D,A,B,C,D,C,D';
#每题得分是5分，那么这个同学得分是多少？



#拆成数组
$arrCommits = explode(',',$commits);

$arrAnswers = explode(',',$answers);


#处理数组
#带索引检查计算数组的交集
$result = array_intersect_assoc($arrCommits,$arrAnswers);

echo '这位同学的分数是',count($result)*5,'分';








