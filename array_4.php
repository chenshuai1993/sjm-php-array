<?php
/**
 * Created by PhpStorm.
 * User: chenshuai
 * Date: 2018/3/17
 * Time: 下午3:38
 */


#核心思想  var_export()   #写入文件

$data = [
    'name'=>'chenshuai',
    'age' => '26',
    'school'=>'sjm'
];


$fileName = 'array-4-file.php';

$dealDate = '<?php'.PHP_EOL.'return ';
$dealDate .= var_export($data,true);
$dealDate .=';';


if(file_put_contents($fileName,$dealDate)){
    if(file_exists($fileName)){
        $config = include_once($fileName);
        print_r($config);
    }
}

