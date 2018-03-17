<?php
/**
 * Created by PhpStorm.
 * User: chenshuai
 * Date: 2018/3/17
 * Time: 下午4:11
 */

class My
{

    public $desc;

    private $name;
    private $age;
    private $school;


    public function __construct()
    {
         $this->name = '陈帅';
         $this->age = '26';
         $this->school = 'sjm';
         $this->desc = 'array高级应用';
    }

    public function index()
    {
        $this->name = 'wakeup';
        $this->age = 'wakeup';
        $this->school = 'wakeup';
        $this->desc = 'wakeup';
    }

    /**
     * @return array
     * @ 如果存在这个方法,会优先调用__sleep  随后在调用构造函数
     */
    public function __sleep()
    {
        return ['name','age','school'];
    }

    /**
     * 反序列化之前会调用 __wakeup
     */
    public function __wakeup()
    {
        $this->index();
    }




}

$my = new My();

$serializeMy = serialize($my);
/*print_r($my);
print_r($serializeMy);*/


#$unserialize = unserialize($serializeMy);

#print_r($serializeMy);